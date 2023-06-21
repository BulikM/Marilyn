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

    <div class="w-100 text-center pt-3">
        <h2 class="line pb-3">Thank you for your purchase</h2>
        <h1 class="fs-2">Order overview</h1>
    </div>
    <div class="d-flex justify-content-evenly p-3">
        <div class="col-5 border border-black mb-4">
            <div class="p-3 AddressBookShippingForm" >
                <h2 class="fs-4">Shipping address</h2>
                <p class="m-0">{{Session('shipping')->company}} {{Session('shipping')->vat}}</p>
                <p class="m-0">{{Session('shipping')->first_name}} {{Session('shipping')->last_name}}</p>
                <p class="m-0">{{Session('shipping')->address}}</p>
                <p class="m-0">{{Session('shipping')->address_2}}</p>
                <p class="m-0">{{Session('shipping')->provincy}}</p>
                <p class="m-0">{{Session('shipping')->city}} {{Session('shipping')->zipcode}}</p>
                <p class="m-0">{{Session('shipping')->country}}</p>
                <p class="m-0">{{Session('shipping')->phone}}</p>
                <p class="m-0">{{Session('shipping')->email}}</p>
            </div>
        </div>
        <div class="col-5 border border-black mb-4">
            <div class="p-3 AddressBookShippingForm" >
                <h2  class="fs-4">Billing address</h2>
                <p class="m-0">{{Session('billing')->company}} {{Session('billing')->vat}}</p>
                <p class="m-0">{{Session('billing')->first_name}} {{Session('billing')->last_name}}</p>
                <p class="m-0">{{Session('billing')->address}}</p>
                <p class="m-0">{{Session('billing')->address_2}}</p>
                <p class="m-0">{{Session('billing')->provincy}}</p>
                <p class="m-0">{{Session('billing')->city}} {{Session('billing')->zipcode}}</p>
                <p class="m-0">{{Session('billing')->country}}</p>
                <p class="m-0">{{Session('billing')->phone}}</p>
                <p class="m-0">{{Session('billing')->email}}</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-evenly p-3">
      <div class="col-11 ">
          @foreach(session('cart')->products as $product)
              <hr class="text-black">
              <div class="p-2">
                  <div class="cartItemWrapper___1GWWZ d-flex flex-wrap m-0 p-0 w-100">
                      <div class="cartItemImage___3USxn">

                          <a href="{{route('product.show', $product['product_id'])}}">
                              <img class="productImg___2ywut d-block"
                                   src="{{$product['product_image'] ? asset ( $product['product_image']) : ' no image availebel'}}"></a>
                      </div>
                      <div class="order-2 order-lg-1 ps-4">
                          <h3 class="productName___289kw">
                              <a href="{{route('product.show', $product['product_id'])}}">{{$product['product_name']}}</a>
                          </h3>
                          <div class="m-0">
                              <div class="m-0">
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
                                  <p class="optionValues___qDP92">
                                      <span>Price:</span>€ {{$product['product_price']}}
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="order-1 order-lg-2 flex-fill align-items-end">

                          <div class="pt-4 pt-md-0 ps-3">
                                  <div class="input-group mb-3" style=" width: 100px">
                                      <span class="input-group-text border-dark bg-white rounded-0 border-end-0" id="basic-addon1">Qty: </span>
                                      <input type="number" class="form-control border-dark border-start-0 bg-white rounded-0 text-center" aria-label="quantity" aria-describedby="basic-addon1" value="{{$product['quantity']}}" name="quantity" readonly>
                                  </div>
                                  <input type="hidden" class="form-control form-control-sm"
                                         name="id" value="{{$product['product_id']}}">
                                  <button class="d-none" type="submit">
                                      Update price
                                  </button>
                              </form>

                          </div>
                          <div class="cartItemDelete___6Odzn">
                              <p class="text-black d-flex d-lg-none">{{$product['product_price']}}</p>
                          </div>
                      </div>
                      <div class="order-3 d-flex flex-column align-items-end">
                          <p class="text-black d-none d-lg-block">€ {{$product['product_price'] * $product['quantity']}}</p>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
    </div>

@endsection
