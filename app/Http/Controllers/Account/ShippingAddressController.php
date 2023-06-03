<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\ShippingAddresses;
use App\Models\User;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
       $customer = User::findOrFail($id);
        return view('backend.shipping-address.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $address = new ShippingAddresses();
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->phone =$request->phone;
        $address->address_1 =$request->address_1;
        $address->address_2 =$request->address_2;
        $address->city =$request->city;
        $address->zipcode = $request->zipcode;
        $address->province=$request->province;
        $address->country =$request->country;
        $address->user_id = $request->customer_id;
        $oldAddresses = ShippingAddresses::where('user_id', $request->customer_id)->get();

//dd(sizeof($oldAddresses)==0);
if(sizeof($oldAddresses) == 0){
    $address->is_primary = 1;
}else{
    foreach ($oldAddresses as $oldAddress){
    $oldIsPrimary = $oldAddress->is_primary = 1;
//    dd($oldIsPrimary);
    if ($oldIsPrimary == true && $request->is_primary == 1){
        $oldAddress->is_primary = 0;
        $address->is_primary = $request->is_primary;
        $oldAddress->update();
    }elseif($oldIsPrimary == true && $request->is_primary == null){
        $address->is_primary = 0;
    }
    }
}

        $address->save();
        $tab = 'nav-contact';
        $customer= $address->user;

        return redirect()
            ->route('customers.edit', $customer->id)
            ->with([
                "alert" => [
                    "message" => "Address added",
                    "type" => "success",
                ],'tab-active'=>[
                    "tab" =>'nav-contact'
                ]
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
        return view('backend.shipping-address.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = ShippingAddresses::findOrFail($id)->delete();
        return redirect()->back()->with(["alert" => ["message" => "Address is destroyd", "type" => "danger"]]);
    }
}
