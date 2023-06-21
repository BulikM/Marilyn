@extends('layouts.frontendCheckout')
@section('title')

@endsection

@section('content')
    <nav class="container-fluid navbar bg-dark">
        <div class="row w-100">
            <div class="col-4 ps-5 mt-2">
                <a href="{{route('cart')}}">
                  <button type="button" class="text-white btn"><i class="bi bi-chevron-left"></i>Return to bag</button>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="{{route('home')}}">
                    <img src="http://127.0.0.1:8000/backend/Marilyn.svg" alt="Marilyn" width="auto" height="50" class="logo col" style=" filter: invert(1)">
                </a>
            </div>
        </div>
    </nav>
    <div class="row mt-5 px-lg-5 text-center">
        <div class="text-start col-12 col-lg-8">
            @if(Session::has('shipping'))
                <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample">
                    <div class="accordion-item border-start-0 border-end-0 ">
                        <h2 class="accordion-header border-0" id="headingOne">
                            <button class="btn w-100" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="CheckoutAddressTittel">
                                    1. Shipping address</h2>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF">
                                <div class="d-flex justify-content-center">
                                    <div class="border border-black col-10 col-lg-6 text-black">
                                        <div class="ps-5 py-2 AddressBookShippingForm" >
                                            <strong class="">Shipping address</strong>
                                            <p class="m-0">{{Session('shipping')->first_name}} {{Session('shipping')->last_name}}</p>
                                            <p class="m-0">{{Session('shipping')->address_1}}</p>
                                            <p class="m-0">{{Session('shipping')->address_2}}</p>
                                            <p class="m-0">{{Session('shipping')->provincy}}</p>
                                            <p class="m-0">{{Session('shipping')->city}} {{Session('shipping')->zipcode}}</p>
                                            <p class="m-0">{{Session('shipping')->country}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-start-0 border-end-0">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="btn w-100" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="CheckoutAddressTittel"
                                    role="heading" aria-level="2">2. Billing address</h2>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                 data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                <div class="accordion border-0 mb-5 accordionArrow" id="sub">
                                        <div class="accordion-item border-0">
                                            <form action="{{route('checkoutBillingAddress')}}"
                                                  method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('POST')

                                                <div class="d-flex justify-content-center">
                                                    <div class="border border-black col-10 col-lg-6 text-black">
                                                        <div class="ps-5 py-2 AddressBookShippingForm" >
                                                            <label class="dlJBHs fWXjje" id="shippingOption" type="button" width="100">
                                                                <button class="btn p-0" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#shipping" aria-expanded="true" aria-controls="collapseOne" data-parent="#shippingPrefferences">
                                                                    <input class="jaoyAT" type="checkbox" name="billing" id="billing" value="true" checked>
                                                                </button>

                                                                <strong class="ps-3">Same as Shipping address</strong>
                                                            </label>
                                                            <p class="m-0">{{Session('shipping')->company}} {{Session('shipping')->vat}}</p>
                                                            <p class="m-0">{{Session('shipping')->first_name}} {{Session('shipping')->last_name}}</p>
                                                            <p class="m-0">{{Session('shipping')->address_1}}</p>
                                                            <p class="m-0">{{Session('shipping')->address_2}}</p>
                                                            <p class="m-0">{{Session('shipping')->provincy}}</p>
                                                            <p class="m-0">{{Session('shipping')->city}} {{Session('shipping')->zipcode}}</p>
                                                            <p class="m-0">{{Session('shipping')->country}}</p>
                                                            <p class="m-0">{{Session('shipping')->phone}}</p>
                                                            <p class="m-0">{{Session('shipping')->email}}</p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div id="shipping" class="accordion-collapse collapse" aria-labelledby="sub"
                                                     data-bs-parent="#sub">
                                                    <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                                         data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">

                                                        <div class="row mb-4">
                                                            <div class="col-12 col-md-6 mb-4 mb-lg-0">

                                                                {{--                                company--}}
                                                                <div class="form-floating form-group">
                                                                    <input id="company" name="company" type="text" placeholder="Company"
                                                                           class="form-control"
                                                                           value="{{old('company')}}">
                                                                    <label class="label-top" for="email">company name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 mb-4 mb-lg-0">
                                                                {{--                                street--}}
                                                                <div class="form-floating form-group">
                                                                    <input id="vat" name="vat" type="text" placeholder="Vat number"
                                                                           class="form-control"
                                                                           value="{{old('vat')}}">
                                                                    <label class="label-top" for="email">Vat number</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            {{--                    <input type="hidden" name="customer_id" value="{{$customer->id}}">--}}

                                                            <div class="col-12 col-md-6">
                                                                <div class="form-floating form-group">
                                                                    <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First name" value="{{old('first_name')}}">
                                                                    <label class="label-top" for="first_name">*First name</label>
                                                                    @error('first_name')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-floating form-group">
                                                                    <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name" value="{{old('last_name')}}">
                                                                    <label class="label-top" for="last_name">*Last name</label>
                                                                    @error('last_name')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-4">
                                                            {{--addres_1--}}
                                                            <div class="col-12">
                                                                <div class="form-floating form-group">
                                                                    <input id="address" name="address" type="text" placeholder="Address"
                                                                           class="form-control" value="{{old('address')}}">
                                                                    <label class="label-top" for="address">*Address</label>
                                                                    @error('address')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            {{--addres_1--}}
                                                            <div class="col-12">
                                                                <div class="form-floating form-group">
                                                                    <input id="address_2" name="address_2" type="text" placeholder="Address"
                                                                           class="form-control" value="{{old('address_2')}}">
                                                                    <label class="label-top" for="address_2">*Address</label>
                                                                    @error('address_2')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            {{--                            city--}}
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-floating form-group">
                                                                    <input id="city" name="city" type="text" placeholder="city"
                                                                           class="form-control" value="{{old('city')}}">
                                                                    <label class="label-top" for="address_1">*City</label>
                                                                    @error('city')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            {{--postcode--}}
                                                            <div class="col-12 col-md-3">
                                                                <div class="form-floating form-group">
                                                                    <input id="zipcode" name="zipcode" type="text" placeholder="zipcode"
                                                                           class="form-control" value="{{old('zipcode')}}">
                                                                    <label class="label-top" for="address_1">*zipcode</label>
                                                                    @error('zipcode')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            {{--                            provincie--}}
                                                            <div class="col-12 col-md-3">
                                                                <div class="form-floating form-group">
                                                                    <input id="province" name="province" type="text" placeholder="province" class="form-control" value="{{old('province')}}">
                                                                    <label class="label-top" for="province">province</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-4">
                                                            {{--                                                                land--}}
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-floating form-group">
                                                                    <input id="country" name="country" type="text" placeholder="country"
                                                                           class="form-control" value="Belgium" readonly>
                                                                    <label class="label-top" for="country">country</label>
                                                                    <span class="drwJIz text-black">
                                               * We currently only ship to Belgium
                                                </span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-4">

                                                            {{--telfoonnummer--}}

                                                            <div class="col-12 col-md-6">
                                                                <div class="form-floating form-group">
                                                                    <input id="phone" name="phone" type="tel" placeholder="Phone"
                                                                           class="form-control" value="{{old('phone')}}">
                                                                    <label class="label-top" for="phone">*Phone</label>
                                                                    @error('phone')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            {{--                            email--}}
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-floating form-group">
                                                                    <input id="email" name="email" type="email" placeholder="email"
                                                                           class="form-control" value="{{old('email')}}">
                                                                    <label class="label-top" for="address_1">*email</label>
                                                                    @error('email')
                                                                    <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-center mt-5">
                                                    <button type="submit" class="btn btn-g btn-dark text-uppercase rounded-0 col-10 col-lg-3 mt-3 mb-4">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('billing'))
                        <div class="accordion-item border-start-0 border-end-0 ">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="btn w-100" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#drie" aria-expanded="true" aria-controls="collapseOne">
                                    <h2 class="CheckoutAddressTittel">
                                        3. Payment</h2>
                                </button>
                            </h2>
                            <div id="drie" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF">
                                    <div class="text-center">

                                           <p>Pleace check if everything is correct and proceed to checkout</p>

                                        <form action="{{route('checkout')}}" method="POST">
                                            @csrf
                                            <div class="d-flex justify-content-center mt-5">
                                                <button type="submit" class="btn btn-g btn-dark text-uppercase rounded-0 col-10 col-lg-3 mt-3 mb-4">Checkout</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="accordion-item border-start-0 border-end-0 ">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="btn w-100 border-0" type="button" data-bs-toggle="collapseThree"
                                        data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" disabled>
                                    <h2 class="CheckoutAddressTittel">
                                        3. Payment</h2>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                            </div>
                        </div>
                    @endif
                </div>

            @else
                <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample">
                    <div class="accordion-item border-start-0 border-end-0 ">
                        <h2 class="accordion-header border-0" id="headingOne">
                            <button class="btn w-100" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="CheckoutAddressTittel">
                                    1. Shipping address</h2>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF">
                                <form action="{{route('checkoutShippingAddress')}}"
                                      method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6 mb-4 mb-lg-0">

                                        {{--                                company--}}
                                        <div class="form-floating form-group">
                                            <input id="company" name="company" type="text" placeholder="Company"
                                                   class="form-control"
                                                   value="{{old('company')}}">
                                            <label class="label-top" for="email">company name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4 mb-lg-0">
                                        {{--                                street--}}
                                        <div class="form-floating form-group">
                                            <input id="vat" name="vat" type="text" placeholder="Vat number"
                                                   class="form-control"
                                                   value="{{old('vat')}}">
                                            <label class="label-top" for="email">Vat number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    {{--                    <input type="hidden" name="customer_id" value="{{$customer->id}}">--}}

                                    <div class="col-12 col-md-6">
                                        <div class="form-floating form-group">
                                            <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First name" value="{{old('first_name')}}">
                                            <label class="label-top" for="first_name">*First name</label>
                                            @error('first_name')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-floating form-group">
                                            <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Last name" value="{{old('last_name')}}">
                                            <label class="label-top" for="last_name">*Last name</label>
                                            @error('last_name')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row mb-4">
                                    {{--addres_1--}}
                                    <div class="col-12">
                                        <div class="form-floating form-group">
                                            <input id="address" name="address" type="text" placeholder="Address"
                                                   class="form-control" value="{{old('address')}}">
                                            <label class="label-top" for="address">*Address</label>
                                            @error('address')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    <div class="row mb-4">
                                        {{--addres_1--}}
                                        <div class="col-12">
                                            <div class="form-floating form-group">
                                                <input id="address_2" name="address_2" type="text" placeholder="Address"
                                                       class="form-control" value="{{old('address_2')}}">
                                                <label class="label-top" for="address_2">*Address</label>
                                                @error('address_2')
                                                <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                <div class="row mb-4">
                                    {{--                            city--}}
                                    <div class="col-12 col-md-6">
                                        <div class="form-floating form-group">
                                            <input id="city" name="city" type="text" placeholder="city"
                                                   class="form-control" value="{{old('city')}}">
                                            <label class="label-top" for="address_1">*City</label>
                                            @error('city')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{--postcode--}}
                                    <div class="col-12 col-md-3">
                                        <div class="form-floating form-group">
                                            <input id="zipcode" name="zipcode" type="text" placeholder="zipcode"
                                                   class="form-control" value="{{old('zipcode')}}">
                                            <label class="label-top" for="address_1">*zipcode</label>
                                            @error('zipcode')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{--                            provincie--}}
                                    <div class="col-12 col-md-3">
                                        <div class="form-floating form-group">
                                            <input id="province" name="province" type="text" placeholder="province" class="form-control" value="{{old('province')}}">
                                            <label class="label-top" for="province">province</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
{{--                                                                land--}}
                                    <div class="col-12 col-md-6">
                                        <div class="form-floating form-group">
                                            <input id="country" name="country" type="text" placeholder="country"
                                                   class="form-control" value="Belgium" readonly>
                                            <label class="label-top" for="country">country</label>
                                            <span class="drwJIz text-black">
                                               * We currently only ship to Belgium
                                                </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">

                                    {{--telfoonnummer--}}

                                    <div class="col-12 col-md-6">
                                        <div class="form-floating form-group">
                                            <input id="phone" name="phone" type="tel" placeholder="Phone"
                                                   class="form-control" value="{{old('phone')}}">
                                            <label class="label-top" for="phone">*Phone</label>
                                            @error('phone')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{--                            email--}}
                                    <div class="col-12 col-md-6">
                                        <div class="form-floating form-group">
                                            <input id="email" name="email" type="email" placeholder="email"
                                                   class="form-control" value="{{old('email')}}">
                                            <label class="label-top" for="address_1">*email</label>
                                            @error('email')
                                            <span class="drwJIz">
                                                  {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-3 mt-5">
                                    <button type="submit" class="btn btn-g btn-dark text-uppercase rounded-0 w-100 w-md-50 mt-3 mb-4">SUBMIT</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-start-0 border-end-0 ">
                        <h2 class="accordion-header border-0" id="headingOne">
                            <button class="btn w-100 border-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" disabled>
                                <h2 class="CheckoutAddressTittel">
                                    2. Billing address</h2>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                 data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-start-0 border-end-0">
                        <h2 class="accordion-header border-0" id="headingOne">
                            <button class="btn w-100 border-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" disabled>
                                <h2 class="CheckoutAddressTittel">
                                    3. Payment</h2>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                 data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>





        <div class="col-12 col-lg-4 order-0 order-lg-1">

            <div class="border card">
                <div class="px-4 py-5 text-black checkout-list">
                    <div class="d-flex justify-content-between">
                        <p>Subtotal</p>
                        <p>€ {{Session::get('cart')->totalPrice}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Standard Ground</p>
                        <p>Free</p>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between">
                        <div>Total</div>
                        <div>€ {{Session::get('cart')->totalPrice}}</div>
                    </div>

                </div>
            </div>
            <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample1">
                <div class="accordion-item border-start-0 border-end-0">
                    <h2 class="accordion-header" id="headingTwo1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo1" aria-expanded="false"
                                aria-controls="collapseTwo1">
                            <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                role="heading" aria-level="2">your bag</h2>
                        </button>
                    </h2>
                    <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-bs-parent="#accordionExample1">
                        <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF bg-white"
                             data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                            @foreach($cart as $product)
                           <ul class="list-group ">

                               <li class="list-group-item border-0 d-flex justify-content-between">
                                   <img class="w-25" alt{{$product['product_name']}}
                                        src="{{$product['product_image'] ? asset ( $product['product_image']) : ' no image availebel'}}">
                                   <p class="optionValues___qDP92">
                                       <span>Price:</span>€ {{$product['product_price']}}
                                   </p>
                               </li>
                               <li class="list-group-item border-0">
                                   <div>
                                   <p class="m-0">
                                       <span>Brand:</span> {{$product['product_brand']}}</p>
                                   <p class="m-0">
                                       <span>Item:</span>
                                       {{$product['product_name']}}
                                   </p>
                                   <p class="m-0">
                                       <span>Size:</span>
                                       S
                                   </p>
                                   <p class="m-0">
                                       <span>Color:</span>
                                       BLACK/IVORY
                                   </p>
                                   </div>
                                   <div>

                                   </div>
                               </li>

                           </ul>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
{{--@section('scripts')--}}
{{--    @if (session('accordion'))--}}
{{--    <script>--}}
{{--        const triggerTabList = document.querySelectorAll('#nav-tab button')--}}
{{--        triggerTabList.forEach(triggerEl => {--}}
{{--            const tabTrigger = new bootstrap.Tab(triggerEl)--}}

{{--            triggerEl.addEventListener('click', event => {--}}
{{--                event.preventDefault()--}}
{{--                tabTrigger.show()--}}
{{--            })--}}
{{--        })--}}

{{--        const triggerEl = document.querySelector('#nav-tab button[data-bs-target="#shipping"]')--}}
{{--        //const triggerEl = document.querySelector('#nav-preferences')--}}
{{--        console.log(triggerEl);--}}
{{--        const t = bootstrap.Tab.getInstance(triggerEl)--}}
{{--        console.log(t);--}}
{{--        t.show()--}}
{{--        @endif--}}
{{--    </script>--}}
{{--@endsection--}}

