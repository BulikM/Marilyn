<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\BillingAddresses;
use App\Models\Day;
use App\Models\Month;
use App\Models\Newsletterinfo;
use App\Models\Preference;
use App\Models\ReadOrShop;
use App\Models\Salutation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth","employee"]);
    }
    public function index()
    {
        $preferencTotal = Preference::all()->count();
        $newsletterinfosTotal = Newsletterinfo::all()->count();
        $users = User::with([
            "preferences",
            "salutation",
            "month",
            "newsletterinfos",
        ])
            ->orderByDesc("id")
            ->withTrashed()
            ->paginate(10);
        return view(
            "backend.users.index",
            compact("users", "preferencTotal", "newsletterinfosTotal")
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $preferences = Preference::all();
        $ReadOrShops = ReadOrShop::all();
        $newsletterinfos = Newsletterinfo::all();
        $salutations = Salutation::all();
        $months = Month::all();
        $days = Day::all();
        return view(
            "backend.users.create",
            compact(
                "preferences",
                "ReadOrShops",
                "newsletterinfos",
                "salutations",
                "months",
                "days"
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerCreateRequest $request)
    {
        $validatedData = $request->validate(
            [
                "password" => "required|min:8",
                "email" => "required |email | unique:users",
                "phone" => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                "mobile_phone" =>
                    'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            ],
            [
                "password.required" => "Please enter a password",
                "email.email" => "Please enter a valid email adres",
                "phone" => "Please enter a vilid phone number",
                "mobile_phone" => "Please enter a vilid phone number",
            ]
        );

        $user = new User();
        $user->read_or_shop_id = $request->ReadOrShop;
        $user->salutation_id = $request->salutation_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->mobile_phone = $request->mobile_phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->month_id = $request->month;
        $user->day_id = $request->day;
        $user->save();

        $user->preferences()->sync($request->preferences, true);
        $user->newsletterinfos()->sync($request->newsletterinfos, true);

        return redirect()
            ->route("users.index")
            ->with([
                "alert" => [
                    "message" => "User added successfully",
                    "type" => "success",
                ],
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        $preferences = Preference::all();
        $ReadOrShops = ReadOrShop::all();
        $newsletterinfos = Newsletterinfo::all();
        $salutations = Salutation::all();
        $months = Month::all();
        $days = Day::all();
        $BillingAddresses = BillingAddresses::all();

        return view(
            "backend.users.edit",
            compact(
                "user",
                "preferences",
                "ReadOrShops",
                "newsletterinfos",
                "salutations",
                "months",
                "days",
                "BillingAddresses"
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerUpdateRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }

        $user->update($input);

        $user->preferences()->sync($request->preferences, true);
        $user->newsletterinfos()->sync($request->newsletterinfos, true);

        return redirect("dashboard/users")->with([
            "alert" => [
                "message" => "Updated successfully",
                "type" => "primary",
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route("users.index")
            ->with([
                "alert" =>
                    ["message" => "Record removed", "type" => "danger"]
            ]);
    }
    public function restore($id)
    {
        User::onlyTrashed()
            ->where("id", $id)
            ->restore();

        return redirect()
            ->route("users.index")
            ->with(["aldert" =>
                ["message" => "Record restored", "type" => "succes"]
            ]);
    }
}
