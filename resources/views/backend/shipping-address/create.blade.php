@extends('layouts.backend', ['title' => 'shipping address'])
@section('breadcrumb')
    <li class="breadcrumb-item"><a class="text-white text-decoration-none text-capitalize"
                                   href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                   href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page">New Shipping Adress</li>
@endsection
@section('content')
    {{--    {{dd($customer)}}--}}

    <form action="{{action('App\Http\Controllers\Account\ShippingAddressController@store')}}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row mb-4">
            <input type="hidden" name="customer_id" value="{{$customer->id}}">

            <div class="col-12 col-md-6">
                <div class="form-floating form-group">
                    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First name" value="{{old('first_name')}}">
                    <label class="label-top" for="first_name">First name</label>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-floating form-group">
                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name" value="{{old('last_name')}}">
                    <label class="label-top" for="last_name">Last name</label>
                </div>
            </div>

        </div>

        <div class="row mb-4">
            {{--addres_1--}}
            <div class="col-12">
                <div class="form-floating form-group">
                    <input id="address_1" name="address_1" type="text" placeholder="Address"
                           class="form-control" value="{{old('address_1')}}">
                    <label class="label-top" for="address_1">Address</label>
                    @error('address_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-4">
            {{--addres_2--}}
            <div class="col-12">
                <div class="form-floating form-group">
                    <input id="address_2" name="address_2" type="text" placeholder="Address" class="form-control value="{{old('address_2')}}">
                    <label class="label-top" for="address_2">Address 2</label>
                    @error('address_2')
                        <span class="invalid-feedback" role="alert">
                          <strong> {{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-4">
        {{--                            city--}}
        <div class="col-12 col-md-6">
            <div class="form-floating form-group">
                <input id="city" name="city" type="text" placeholder="city" class="form-control value="{{old('city')}}">
                <label class="label-top" for="city">city</label>
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{--postcode--}}
        <div class="col-12 col-md-3">
            <div class="form-floating form-group">
                <input id="zipcode" name="zipcode" type="number" placeholder="zipcode"
                       class="form-control value="{{old('zipcode')}}>
                <label class="label-top" for="zipcode">zipcode</label>
                @error('zipcode')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        {{--                            provincie--}}
        <div class="col-12 col-md-3">
            <div class="form-floating form-group">
                <input id="province" name="province" type="text" placeholder="province" class="form-control" value="{{old('province')}}">
                <label class="label-top" for="province">province</label>
                @error('province')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        </div>
        <div class="row mb-4">
            {{--                            land--}}
            <div class="col-12 col-md-6">
                <div class="form-floating form-group">
                    <input id="country" name="country" type="text" placeholder="country"
                           class="form-control value="{{old('country')}}">
                    <label class="label-top" for="country">country</label>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{--telfoonnummer--}}

            <div class="col-12 col-md-6">
                <div class="form-floating form-group">
                    <input id="phone" name="phone" type="tel" placeholder="Phone"
                           class="form-control" value="{{old('phone')}}">
                    <label class="label-top" for="phone">Phone</label>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <input type="checkbox" class="check-goop" name="is_primary" id="is_primary" value="1" checked="checked">
                <label for="is_primary">Make this my default shipping address.</label>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <x-sub-btn/>
                <x-cancel-btn :href="'customers.index'"/>
            </div>
        </div>
    </form>
@endsection
