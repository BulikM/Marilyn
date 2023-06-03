<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\BillingAddresses;
use App\Models\Day;
use App\Models\Month;
use App\Models\NewsletterInfo;
use App\Models\Preference;
use App\Models\ReadOrShop;
use App\Models\ShippingAddresses;
use App\Models\Salutation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BCustomerController extends Controller
{
           public function index()
    {
        $preferencTotal = Preference::all()->count();
        $newsletterinfosTotal = Newsletterinfo::all()->count();
        $customers = User::where('is_employee','=' ,'0')->with('salutation','preferences','newsletterinfos')->orderByDesc("id")
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
        $salutations = Salutation::all();
        $months = Month::all();
        $days = Day::all();
        return view(
            "backend.customers.create",
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
    public function store(CustomerCreateRequest $request)
    {
        $customer = new User();
        $customer->read_or_shop_id = $request->ReadOrShop;
        $customer->salutation_id = $request->salutation_id;
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
                    "message" => "Customer added successfully",
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
        $salutations = Salutation::all();
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
                "salutations",
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
    public function update(CustomerUpdateRequest $request, string $id)
    {
//        dd($request);

        $customer = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        $customer->update($input);


        return redirect("dashboard/customers")
            ->with([
            "alert" => [
                "message" => "Updated successfully",
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
        return redirect()->route('customers.index')
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
            ->route("customers.index")
            ->with(["alert" => ["message" => "restore", "type" => "primary"]]);
    }
}
