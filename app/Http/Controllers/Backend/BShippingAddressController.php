<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShippingAddresses;
use App\Models\User;
use Illuminate\Http\Request;

class BShippingAddressController extends Controller
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
        $address->street =$request->street;
        $address->number =$request->number;
        $address->bus =$request->bus;
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

        $customer= $address->user;

        return redirect()
            ->route('customers.edit', $customer->id )
            ->with([
                "alert" => [
                    "message" => "Address added",
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
