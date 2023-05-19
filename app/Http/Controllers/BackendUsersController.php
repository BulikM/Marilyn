<?php

namespace App\Http\Controllers;

use App\Models\BillingAddresses;
use App\Models\Day;
use App\Models\Month;
use App\Models\Newsletterinfo;
use App\Models\Preference;
use App\Models\ReadOrShop;
use App\Models\ShippingAddresses;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BackendUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preferencTotal = Preference::all()->count();
        $newsletterinfosTotal = Newsletterinfo::all()->count();
        $users = User::with([
            "preferences",
            "title",
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
        $titles = Title::all();
        $months = Month::all();
        $days = Day::all();
        return view(
            "backend.users.create",
            compact(
                "preferences",
                "ReadOrShops",
                "newsletterinfos",
                "titles",
                "months",
                "days"
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        $user->title_id = $request->title;
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
                    "message" => "User added",
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
        $titles = Title::all();
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
                "titles",
                "months",
                "days",
                "BillingAddresses"
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate(
            [
                "password" => "nullable|min:8",
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

        $user = User::findOrFail($id);
        $user->read_or_shop_id = $request->ReadOrShop;
        $user->title_id = $request->title;
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

        return route("users.index")->with([
            "alert" => [
                "message" => "User added",
                "type" => "success",
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route("users.index");
    }
    public function userRestore($id)
    {
        User::onlyTrashed()
            ->where("id", $id)
            ->restore();
        $user = User::withTrashed()
            ->where("id", $id)
            ->first();
        return redirect()
            ->route("users.index")
            ->with(["aldert" => ["message" => "restore", "type" => "succes"]]);
    }
}
