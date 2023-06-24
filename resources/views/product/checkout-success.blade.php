@extends('layouts.frontendCheckout')
@section('title')

@endsection

@section('content')
    <nav class="container-fluid navbar bg-dark">
        <div class="row w-100">
            <div class="col-4 ps-5 mt-2">
                <a href="{{route('sessionFlush')}}">
                    <button type="button" class="text-white btn"><i class="bi bi-chevron-left"></i>Return to shop</button>
                </a>
            </div>
            <div class="col-4 text-center">
                <a href="{{route('home')}}">
                    <img src="http://127.0.0.1:8000/backend/Marilyn.svg" alt="Marilyn" width="auto" height="50" class="logo col" style=" filter: invert(1)">
                </a>
            </div>
        </div>
    </nav>
    <div class="w-100 text-center">
    <div class="px-5"><h2 class="line d-flex align-items-center title___1Ikv6">Thank you for your purchase</h2></div>
        <h1 class="fs-3">Order overview</h1>
    </div>
    <div class="d-lg-flex justify-content-evenly p-3">
        @foreach($order->orderDetails as $address)
        @if($address->billing == true && $address->shipping == true)
                <div class="col-12 col-lg-5 border border-black mb-4">
                    <div class="p-3 AddressBookShippingForm" >
                        <h2 class="fs-4">billing address</h2>
                        <p class="m-0">{{$address->company}} {{$address->vat}}</p>
                        <p class="m-0">{{$address->first_name}} {{$address->last_name}}</p>
                        <p class="m-0">{{$address->address}}</p>
                        <p class="m-0">{{$address->address_2}}</p>
                        <p class="m-0">{{$address->provincy}}</p>
                        <p class="m-0">{{$address->city}} {{$address->zipcode}}</p>
                        <p class="m-0">{{$address->country}}</p>
                        <p class="m-0">{{$address->phone}}</p>
                        <p class="m-0">{{$address->email}}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 border border-black mb-4">
                    <div class="p-3 AddressBookShippingForm" >
                        <h2 class="fs-4">shipping address</h2>
                        <p class="m-0">{{$address->company}} {{$address->vat}}</p>
                        <p class="m-0">{{$address->first_name}} {{$address->last_name}}</p>
                        <p class="m-0">{{$address->address}}</p>
                        <p class="m-0">{{$address->address_2}}</p>
                        <p class="m-0">{{$address->provincy}}</p>
                        <p class="m-0">{{$address->city}} {{$address->zipcode}}</p>
                        <p class="m-0">{{$address->country}}</p>
                        <p class="m-0">{{$address->phone}}</p>
                        <p class="m-0">{{$address->email}}</p>
                    </div>
                </div>
            @else
                <div class="col-12 col-lg-5 border border-black mb-4">
            <div class="p-3 AddressBookShippingForm" >
                <h2 class="fs-4">{{$address->billing == true ? 'billing address' : 'shipping address' }}</h2>
                <p class="m-0">{{$address->company}} {{$address->vat}}</p>
                <p class="m-0">{{$address->first_name}} {{$address->last_name}}</p>
                <p class="m-0">{{$address->address}}</p>
                <p class="m-0">{{$address->address_2}}</p>
                <p class="m-0">{{$address->provincy}}</p>
                <p class="m-0">{{$address->city}} {{$address->zipcode}}</p>
                <p class="m-0">{{$address->country}}</p>
                <p class="m-0">{{$address->phone}}</p>
                <p class="m-0">{{$address->email}}</p>
            </div>
        </div>
            @endif
        @endforeach
    </div>
    <div class="d-flex justify-content-evenly p-3">
      <div class="col-11 ">
          @foreach($orderProducts as $arrayProduct)
              {{dd($arrayProduct)}}
                  <hr class="text-black">
                  <div class="p-2">
                  <div class="cartItemWrapper___1GWWZ d-flex flex-wrap m-0 p-0 w-100">
                      <div class="cartItemImage___3USxn">
                          <a href="{{route('product.show', $arrayProduct->products->id)}}">
                              <img class="productImg___2ywut d-block"
                                   src="{{$arrayProduct->products->image ? asset($arrayProduct->products->image->file) : 'http://via.placeholder.com/62x62'}}"></a>
                      </div>
                      <div class="order-2 order-lg-1 ps-4">
                          <h3 class="productName___289kw">
                              <a href="{{route('product.show', $arrayProduct->products->id)}}">{{$arrayProduct->products->name}}</a>
                          </h3>
                          <div class="m-0">
                              <div class="m-0">
                                  <p class="m-0">
                                      <span>Brand:</span> {{$arrayProduct->products->brand->name}}</p>
                                  <p class="m-0">
                                      <span>Item:</span>
                                      {{$arrayProduct->products->name}}
                                  </p>
                                  <p class="m-0">
                                      <span>Size:</span>
                                      S
                                  </p>
                                  <p class="m-0">
                                      <span>Color:</span>
                                      BLACK/IVORY
                                  </p>
                                  <p class="optionValues___qDP92">
                                      <span>Price:</span>€ {{$arrayProduct->products->price}}
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="order-1 order-lg-2 flex-fill align-items-end">
                          <div class="pt-4 pt-md-0 ps-3">
                                  <div class="input-group mb-3" style=" width: 100px">
                                      <span class="input-group-text border-dark bg-white rounded-0 border-end-0" id="basic-addon1">Qty: </span>
                                      <input type="number" class="form-control border-dark border-start-0 bg-white rounded-0 text-center" aria-label="quantity" aria-describedby="basic-addon1" value="{{$arrayProduct->quantity}}" name="quantity" readonly>
                                  </div>
                                  <input type="hidden" class="form-control form-control-sm"
                                         name="id" value="{{$arrayProduct->products->id}}">
                          </div>
                          <div class="cartItemDelete___6Odzn">
                              <p class="text-black d-flex d-lg-none">{{$arrayProduct->products->price}}</p>
                          </div>
                      </div>
                      <div class="order-3 d-flex flex-column align-items-end">
                          <p class="text-black d-none d-lg-block">€ {{$arrayProduct->products->price * $arrayProduct->quantity}}</p>
                      </div>
                  </div>
              </div>
          @endforeach
                  <a href="{{route('home')}}" class="d-flex justify-content-center w-100 mt-5">
                      <button type="submit" class="btn btn-g btn-dark text-uppercase rounded-0 col-10 col-lg-3 mt-3 mb-4">Go to Shop</button>
                  </a>
      </div>
    </div>

@endsection


