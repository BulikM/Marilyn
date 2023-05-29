@extends('layouts.backend')
@section('breadcrumb')
    <li class="breadcrumb-item"><a class="text-white text-decoration-none text-capitalize"
                                   href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a class="text-white text-decoration-none"
                                   href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page">New Shipping Adress</li>
@endsection
@section('content')
    {{--    {{dd($customer)}}--}}
    <form action="{{action('App\Http\Controllers\Backend\BShippingAddressController@store')}}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row mb-4">
            <input type="hidden" name="customer_id" value="{{$customer->id}}">
            <div class="row mb-4">
                <div class="col-12 col-md-6">
                    <div class="form-floating form-group">
                        <input id="first_name" name="first_name" type="text"
                               class="form-control"
                               placeholder="First name" value="{{old('first_name')}}">
                        <label class="label-top" for="first_name">First name</label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-floating form-group">
                        <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name"
                               value="{{old('last_name')}}">
                        <label class="label-top" for="last_name">Last name</label>
                    </div>
                </div>
            </div>
            {{--telfoonnummer--}}

            <div class="col-12 col-md-6">
                <div class="form-floating form-group">
                    <input id="phone" name="phone" type="tel" placeholder="Phone"
                           class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
                    <label class="label-top" for="phone">Phone</label>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>

                <div class="col-12 col-md-6">

                </div>
            </div>

        <div class="row mb-4">
            <div class="col-12 col-md-6">

                {{--                                street--}}
                <div class="form-floating form-group">
                    <input id="street" name="street" type="text" placeholder="street"
                           class="form-control @error('street') is-invalid @enderror"
                           value="{{old('street')}}">
                    <label class="label-top" for="email">Street</label>
                    @error('street')
                    <span class="invalid-feedback" role="alert">

                                                      <strong>{{ $message }}</strong>
                                                </span>
                    @enderror
                </div>
            </div>
            {{--number--}}
            <div class="col-12 col-md-3">
                <div class="form-floating form-group">
                    <input id="number" name="number" type="text" placeholder="number"
                           class="form-control @error('number') is-invalid @enderror">
                    <label class="label-top" for="number">number</label>
                    @error('number')
                    <span class="invalid-feedback" role="alert">

                                                      <strong>{{ $message }}</strong>
                                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-floating form-group">
                    <input id="bus" name="bus" type="text" placeholder="bus"
                           class="form-control">
                    <label class="label-top" for="bus">bus</label>
                </div>
            </div>
        </div>
            {{--                            city--}}
            <div class="col-12 col-md-6">
                <div class="form-floating form-group">
                    <input id="city" name="city" type="text" placeholder="city"
                           class="form-control @error('city') is-invalid @enderror"
                           value="{{old('city')}}">
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
                           class="form-control @error('zipcode') is-invalid @enderror">
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
                    <input id="province" name="province" type="text" placeholder="province"
                           class="form-control @error('province') is-invalid @enderror">
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
                           class="form-control @error('country') is-invalid @enderror"
                           value="{{old('country')}}">
                    <label class="label-top" for="country">country</label>
                    @error('country')
                    <span class="invalid-feedback" role="alert">

                                                      <strong>{{ $message }}</strong>
                                                </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <input type="checkbox" name="is_primary" id="is_primary" value="1" checked="checked">
            <label for="is_primary">Make this my default shipping address.</label>
        </div>
        <div class="d-flex justify-content-center gap-3">
            <x-sub-btn/>
            <x-cancel-btn :href="'customers.index'"/>
        </div>
    </form>
@endsection
