<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BillingAddresses;
use App\Models\Customers;
use App\Models\Day;
use App\Models\Month;
use App\Models\NewsletterInfo;
use App\Models\Preference;
use App\Models\ReadOrShop;
use App\Models\ShippingAddresses;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BCustomerController extends Controller
{
           public function index()
    {
        $preferencTotal = Preference::all()->count();
        $newsletterinfosTotal = Newsletterinfo::all()->count();
        $customers = User::where('is_employee','=' ,'0')->orderByDesc("id")
            ->withTrashed()
            ->paginate(10);
        return view(
            "backend.customers.index",
            compact("customers", "preferencTotal", "newsletterinfosTotal")
        );
    }
    public function create()
    {
        $preferences = Preference::all();
        $ReadOrShops = ReadOrShop::all();
        $newsletterinfos = Newsletterinfo::all();
        $titles = Title::all();
        $months = Month::all();
        $days = Day::all();
        return view(
            "backend.customers.create",
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

        $customer = new User();
        $customer->read_or_shop_id = $request->ReadOrShop;
        $customer->title_id = $request->title_id;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->phone = $request->phone;
        $customer->mobile_phone = $request->mobile_phone;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);

        $customer->month_id = $request->month;
        $customer->day_id = $request->day;
        $customer->save();

        $customer->preferences()->sync($request->preferences, true);
        $customer->newsletterinfos()->sync($request->newsletterinfos, true);

        return redirect()
            ->route("customers.index")
            ->with([
                "alert" => [
                    "message" => "Customer added",
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
        $customer = User::findOrFail($id);

        $preferences = Preference::all();
        $ReadOrShops = ReadOrShop::all();
        $newsletterinfos = Newsletterinfo::all();
        $titles = Title::all();
        $months = Month::all();
        $days = Day::all();
        $BillingAddresses = BillingAddresses::where('user_id',$id)->get();
        $shippingAddresses = ShippingAddresses::where('user_id', $id)->get();

        return view(
            "backend.customers.edit",
            compact(
                "customer",
                "preferences",
                "ReadOrShops",
                "newsletterinfos",
                "titles",
                "months",
                "days",
                "BillingAddresses",
                'shippingAddresses',
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
                "phone" => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                "mobile_phone" =>
                    'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            ],
            [
                "password.required" => "Please enter a password",
                "phone" => "Please enter a vilid phone number",
                "mobile_phone" => "Please enter a vilid phone number",
            ]
        );

        $customer = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        $customer->update($input);


        return redirect("dashboard/customers")->with([
            "alert" => [
                'title'=>'$customer->first_name',
                "message" => "is updated",
                "type" => "primary",
            ],
        ]);
    }

    public function updatepreferences(Request $request, string $id)
    {
//dd($request);
        $customer = User::findOrFail($id);
        $input = $request->all();
        $customer->update($input);
        $customer->preferences()->sync($request->preferences, true);
        $customer->newsletterinfos()->sync($request->newsletterinfos, true);

        return redirect()
            ->route('customers.edit', $customer->id )
            ->with([
                "alert" => [
                    "message" => "Preferences updated",
                    "type" => "success",
                ],"tab-active"=> [
                    'tab'=>'nav-preferences'
                ]
            ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       User::findOrFail($id)->delete();
        return redirect()->route('customers.index')->with(["alert" => ["message" => "destroyd", "type" => "danger"]]);

    }
    public function restore($id)
    {
        User::onlyTrashed()
            ->where("id", $id)
            ->restore();
        return redirect()
            ->route("customers.index")
            ->with(["alert" => ["message" => "restore", "type" => "primary"]]);
    }
}
