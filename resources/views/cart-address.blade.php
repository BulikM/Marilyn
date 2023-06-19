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
        <div class="col-12 col-lg-8 order-1 order-lg-0">
{{--            <form action="{{action('App\Http\Controllers\frontend\ProductController@address')}}" method="POST"--}}
{{--                  enctype="multipart/form-data">--}}
                @csrf
                @method('POST')
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-4 mb-lg-0">
                        {{--                                street--}}
                        <div class="form-floating form-group">
                            <input id="company" name="company" type="text" placeholder="Company"
                                   class="form-control"
                                   value="{{old('company')}}">
                            <label class="label-top" for="email">Company name</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0">
                        {{--                                street--}}
                        <div class="form-floating form-group">
                            <input id="vat" name="street" type="text" placeholder="Vat number"
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

                </div>
            <div class="row mb-4">

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
                {{--                            email--}}
                <div class="col-12 col-md-6">
                    <div class="form-floating form-group">
                        <input id="email" name="email" type="email" placeholder="email"
                               class="form-control value="{{old('email')}}">
                        <label class="label-top" for="email">email</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
                <div class="d-flex justify-content-center gap-3 mt-5">
                    <button type="submit" class="btn btn-g btn-dark text-uppercase rounded-0 w-100 w-md-50 mt-3 mb-4">SUBMIT</button>
                </div>
            </form>




                                    <form action="{{route('checkout')}}" method="POST">
                                        @csrf
{{--                                        <button type="submit" {{ (!is_null($street) && !empty($email) && !is_null($password) && !empty($password)) ? '' : 'disabled' }}>Login Now</button>--}}
                                        <button class="btn btn-g btn-dark text-uppercase rounded-0 w-100 w-md-50 mt-3 mb-4">Continue</button>
                                    </form>
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
                                       <img class="w-25"
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

