@extends('layouts.backend',['title'=>'customer info'])
@section('breadcrumb')
    <li class="breadcrumb-item"><a class="text-white text-decoration-none" href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item "><a class="text-white text-decoration-none"
                                    href="{{route('users.index')}}">Customers</a>
    </li>
    <li class="breadcrumb-item text-white active"
        aria-current="page">{{$customer->first_name ? $customer->first_name : $customer->email}}</li>
@endsection
@section('content')
    @if (session('alert'))
        <x-alert :type="session('alert')['type']" :message="session('alert')['message']">
        </x-alert>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Personal Info
                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-preferences" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">Preferences
                            </button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Address Book
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        {{--Persenal info--}}
                        <div class="tab-pane fade show active" id="nav-info" role="tabpanel"
                             aria-labelledby="nav-home-tab" tabindex="0">
                            <form
                                action="{{action('App\Http\Controllers\Backend\BCustomerController@update', $customer->id)}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="customer_id" value="{{$customer->id}}">
                                {{--titel--}}

                                <div class="dropdown mb-4">
                                    <select  name="salutation_id" id="salutation_id" class="form-select w-25" aria-label="salutation select">
                                        <option  value="" disabled selected hidden>Title</option>
                                        @foreach($salutations as $salutation)
                                            <option value="{{$salutation->id}}" name="salutation_id" class="hover-purple" @selected($customer->salutation_id == $salutation->id)>{{$salutation->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{--email--}}
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-group">
                                            <input id="email" name="email" type="email" placeholder="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   value="{{$customer->email}}">
                                            <label class="label-top" for="email">Email</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{--passwoord--}}
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-group">
                                            <input id="password" name="password" type="password" placeholder="password"
                                                   class="form-control @error('password') is-invalid @enderror">
                                            <label class="label-top" for="password">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{--naam--}}
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-group">
                                            <input id="first_name" name="first_name" type="text"
                                                   class="form-control"
                                                   placeholder="First name" value="{{$customer->first_name}}">
                                            <label class="label-top" for="first_name">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-group">
                                            <input id="last_name" name="last_name" type="text" class="form-control"
                                                   placeholder="Last name" value="{{$customer->last_name}}">
                                            <label class="label-top" for="last_name">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                {{--telfoonnummer--}}
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-group">
                                            <input id="phone" name="phone" type="tel" placeholder="Phone"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   value="{{$customer->phone}}">
                                            <label class="label-top" for="phone">Phone</label>
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-floating form-group">
                                            <input id="mobile_phone" name="mobile_phone" type="tel"
                                                   placeholder="Mobile phone"
                                                   class="form-control @error('mobile_phone') is-invalid @enderror"
                                                   value="{{$customer->mobile_phone}}">
                                            <label class="label-top" for="mobile_phone">Mobile phone</label>
                                            @error('mobile_phone')
                                            <span class="invalid-feedback" role="alert">

                                              <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{--verjaardag--}}
                                <p class="card-description"> Birthday </p>
                                <div class="row">
                                    <div class="dropdown mb-4 col-12 col-md-3">
                                        <select name="month_id" id="month_id" class="form-select" aria-label="Month">
                                            <option value="" disabled selected hidden>Month</option>
                                            @foreach($months as $month)
                                                <option
                                                    value="{{$month->id}}" @selected($customer->month_id == $month->id)>{{$month->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="dropdown mb-4 col-12 col-md-3">
                                        <select name="day_id" id="day_id" class="form-select" aria-label="Day">
                                            <option value="" disabled selected hidden>Day</option>
                                            @foreach($days as $day)
                                                <option
                                                    value="{{$day->id}}"@selected($customer->day_id == $day->id)>{{$day->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-3">
                                    <x-sub-btn/>
                                    <x-cancel-btn :href="'customers.index'"/>
                                </div>
                            </form>
                        </div>


                        {{--voorkeuren--}}
                        <div class="tab-pane fade" id="nav-preferences" role="tabpanel"
                             aria-labelledby="nav-profile-tab" tabindex="0">

                            <form action="{{action('App\Http\Controllers\Backend\BCustomerController@updatepreferences', $customer->id)}}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="row row-cols-1 row-cols-lg-3">
                                    @foreach($preferences as $preference)
                                        <div class="card col bg-none">
                                            <input type="checkbox" class="btn-check" value="{{$preference->id}}"
                                                   name="preferences[]" id="preference{{$preference->id}}"
                                                   autocomplete="off" @checked($customer->preferences->contains($preference->id))>
                                            <label class="button btn-outline-purple"
                                                   for="preference{{$preference->id}}">{{$preference->name}}</label><br>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="card-description"> I am here to... </p>
                                <hr>
                                <div class="row row-cols-1 row-cols-lg-3">
                                    @foreach($ReadOrShops as $ReadOrShop)
                                        <div class="card col bg-none">
                                            <input type="radio" class="btn-check" value="{{$ReadOrShop->id}}"
                                                   name="read_or_shop_id"
                                                   id="ReadOrShop{{$ReadOrShop->id}}"
                                                   autocomplete="off" @checked($customer->read_or_shop_id == $ReadOrShop->id)>
                                            <label class="button btn-outline-purple"
                                                   for="ReadOrShop{{$ReadOrShop->id}}">{{$ReadOrShop->name}}</label><br>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="card-description"> keep me informed </p>
                                <hr>
                                <div class="row row-cols-1 row-cols-lg-3">
                                    @foreach($newsletterinfos as $info)
                                        <div class="card col bg-none">
                                            <input type="checkbox" class="btn-check" value="{{$info->id}}"
                                                   name="newsletterinfos[]" id="info{{$info->id}}"
                                                   autocomplete="off" @checked($customer->newsletterinfos->contains($info->id))>
                                            <label class="button btn-outline-purple"
                                                   for="info{{$info->id}}">{{$info->name}}</label><br>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center gap-3">
                                    <x-sub-btn/>
                                    <x-cancel-btn :href="'customers.index'"/>
                                </div>
                            </form>

                        </div>


                        {{--address--}}
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                             tabindex="0">
                            {{--                        adress--}}
                            <p> Shipping Adres</p>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{route('shipping-address.create', $customer->id )}}"
                                       class="text-capitalize btn text-decoration-underline float-end"> Add New
                                        Addres</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-check d-flex flex-wrap p-0">
                                    @foreach($shippingAddresses as $s_address)
                                        <div class="col-12 col-sm-6 px-2">
                                            <div class="card box">
                                                <div class="row">
                                                    <div class="col-sm-8 col-xs-8 address-display">
                                                        <p class="text-capitalize">
                                                            {{$s_address->first_name}} {{$s_address->last_name}}
                                                            <br>
                                                            {{$s_address->address_1}}
                                                            {{$s_address->address_2}}
                                                            <br>
                                                            {{$s_address->city}} {{$s_address->zipcode}}
                                                            <br>
                                                            {{$s_address->country}}
                                                            <br>
                                                            {{$s_address->phone}}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4 address-controls">
                                                        <div class="d-flex">
                                                            <p class="actions">
                                                                <a class="btn text-decoration-underline"
                                                                   href="/account/addresses/4954897/edit">Edit</a>
                                                                |
                                                            <form
                                                                action="{{route('shipping-address.destroy', $s_address->id)}}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn text-decoration-underline"
                                                                        type="submit">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>

                                                        </p>
                                                        <p class="default-button">
                                                            @livewire('primary-address', [
                                                            'model' => $customer,
                                                            'field' => 'is_primary',
                                                            'address' => $s_address,
                                                            ])


                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <p> Billing Adres</p>
                            <hr>
                            <div class="float-end">
                                <button class="text-capitalize btn text-decoration-underline">Add New Addres</button>
                            </div>
                            <div class="row">
                                @foreach($BillingAddresses as $B_address)
                                    <div class="col-sm-6">
                                        <div class="card box">
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-8 address-display">
                                                    <p class="text-capitalize">
                                                        {{$B_address->first_name}} {{$B_address->last_name}}
                                                        <br>
                                                        {{$B_address->street}} {{$B_address->number}} {{$B_address->adon}}
                                                        <br>
                                                        {{$B_address->city}} {{$B_address->zipcode}}
                                                        <br>
                                                        {{$B_address->country}}
                                                        <br>
                                                        {{$B_address->phone}}
                                                    </p>
                                                </div>
                                                <div class="col-sm-4 col-xs-4 address-controls">
                                                    <p class="actions">
                                                        <a href="/account/addresses/4954897/edit">Edit</a>
                                                        |
                                                        <a data-confirm="Are You Sure?" rel="nofollow"
                                                           data-method="delete"
                                                           href="/account/addresses/4954897">Delete</a>
                                                    </p>
                                                    <p class="default-button">
                                                        <a class="set-default-btn" rel="nofollow" data-method="post"
                                                           href="/account/addresses/4954897/assign_default">
                                                            <input type="radio" name="default_address_ship"
                                                                   id="{{$B_address->is_primary}}" @checked($B_address->is_primary == 1)>
                                                            &nbsp; Default
                                                        </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @if (session('tab-active'))
<x-tab :tab="session('tab-active')['tab']" />
    @endisset

@endsection
