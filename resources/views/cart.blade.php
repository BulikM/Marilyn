@extends('layouts.frontend')
@section('title')

@endsection

@section('content')
    @if (session('alert'))
        <x-alert :type="session('alert')['type']" :message="session('alert')['message']">
            <x-slot name="title">Users</x-slot>
        </x-alert>
    @endif

    <main class="container-fluid">
        <div class="row mx-lg-5 mb-3">
            <div class="col-12 col-lg-8">
                <div class="d-flex align-items-center">
                    <a href="{{ url()->previous() }}" class="go-back">
                        <button aria-label="Go back" type="button" class=" btn btn-link">
                            <svg viewBox="0 0 24 24" height="16" width="16"
                                 class="">
                                <path d="M18 24L5.1 12.1 18 0l.9 1L7 12l11.9 11z"></path>
                            </svg>
                        </button>
                    </a>
                    <div class="w-100 text-center pt-4 pb-2">
                        <h1>Your Bag</h1>
                        <span>
                            {{Session::has('cart') ? Session::get('cart')->totalQuantity:'0'}} item in bag
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-lg-5">
            <div class="col-12 col-lg-8">
                <div class="bg-secondary bg-opacity-10 d-flex justify-content-center align-items-center mb-2"  style="min-height: 42px;">
                    <div class="text-uppercase text-black">You qualify for <strong>FREE SHIPPING!</strong></div>
                </div>
                <div class="m-0">

                    @foreach($cart as $product)
                        <hr class="text-black">
                        <div class="p-2">
                            <div class="cartItemWrapper___1GWWZ d-flex flex-wrap m-0 p-0 w-100">
                                <div class="cartItemImage___3USxn">
                                    <a href="{{route('product.show', $product['product']->slug)}}">
                                        <img class="productImg___2ywut d-block"
                                             src="{{$product['product_image'] ? asset( $product['product_image']) : "img.png"}}">
                                    </a>
                                </div>
                                <div class="order-2 order-lg-1 ps-4">
                                    <h3 class="productName___289kw">
                                        <a href="{{route('product.show', $product['slug'])}}">{{$product['product_name']}}</a>
                                    </h3>
                                    <div class="m-0">
                                        <div class="m-0">
                                            @foreach($product['product']->brand as $brand)
                                            <a href="{{route('productsPerBrand', $brand->slug)}}">
                                                <p class="m-0">
                                                    <span>Brand:</span>

                                                {{$product['brand_name']}}
                                                </p>
                                            </a>
                                            @endforeach
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
                                                    <form method="POST"
                                                          action="{{action('App\Http\Controllers\frontend\CartController@updateQuantity')}}"
                                                          enctype='multipart/form-data'>
                                                        @csrf
                                                        @method('POST')
                                                        <div class="input-group mb-3" style=" width: 100px">
                                                            <span class="input-group-text border-dark bg-white rounded-0 border-end-0" id="basic-addon1">Qty: </span>
                                                            <input type="number" class="form-control border-dark border-start-0 bg-white rounded-0 text-center" aria-label="quantity" aria-describedby="basic-addon1" value="{{$product['quantity']}}" name="quantity">
                                                            @error('quantity')
                                                                <span class="drwJIz">
                                                                  {{ $message }}
                                                                </span>
                                                            @enderror
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
                                    <a href="{{route('removeItem', $product['product_id'])}}"
                                         class="text-decoration-underline removeButton ">Remove</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <div><h2 class="line d-flex align-items-center title___1Ikv6">You might also like...</h2></div>

                    <div id="carouselExampleIndicators-You-might-like" class="carousel slide dotscarousel" data-bs-ride="carousel" >
                        <div class="carousel-indicators d-lg-none">
                            <button type="button" data-bs-target="#carouselExampleIndicators-You-might-like" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators-You-might-like" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators-You-might-like" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner carousel-4 Items_container pb-5 w-100 gap-2" style="height: 350px; ">
                            <div class="carousel-item active ">
                                <!--							eerste carousel-->
                                <!--									eerste card-->
                                <div class="card h-100 col-6 col-lg-3 d-flex flex-column justify-content-between pe-3" >
                                    <div>
                                        <a class="imageLink___1NeIh"
                                           href="#">
                                            <img alt="Vintner’s Daughter Active Botanical Serum" itemprop="image" class="w-100 h-auto"
                                                 src="https://shop.goop-img.com/spree/images/attachments/000/062/863/product/open-uri20201123-6983-1g043ji?1606174998"
                                                 draggable="false">
                                        </a>
                                        <span class="brandName___2Tzl8">Vintner’s Daughter</span>
                                        <a class="name___1-mZL" title="Active Botanical Serum" href="#">
                                            <span>Active Botanical Serum</span>
                                        </a>
                                        <span class="d-block">
                                            <span itemtype="https://schema.org/Offer">
                                                <span>US $</span>
                                                <span>195.00</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn text-center text-uppercase w-100 btn-outline-dark rounded-0 mt-4">Add to Bag
                                        </button>
                                    </div>
                                </div>
                                <!--							einde inhoud tweede carousel-->
                            </div>
                            <div class="carousel-item">
                                <!--							tweed carousel-->
                                <div class="card h-100 col-6 col-lg-3 d-flex flex-column justify-content-between pe-3" >
                                    <div>
                                        <a class="imageLink___1NeIh"
                                           href="#">
                                            <img alt="Vintner’s Daughter Active Botanical Serum" itemprop="image" class="w-100 h-auto"
                                                 src="https://shop.goop-img.com/spree/images/attachments/000/062/863/product/open-uri20201123-6983-1g043ji?1606174998"
                                                 draggable="false">
                                        </a>
                                        <span class="brandName___2Tzl8">Vintner’s Daughter</span>
                                        <a class="name___1-mZL" title="Active Botanical Serum" href="#">
                                            <span>Active Botanical Serum</span>
                                        </a>
                                        <span class="d-block">
                                            <span itemtype="https://schema.org/Offer">
                                                <span>US $</span>
                                                <span>195.00</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn text-center text-uppercase w-100 btn-outline-dark rounded-0 mt-4">Add to Bag
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--						einde tweede carousel-->
                            <div class="carousel-item">
                                <!--							derde carousel-->
                                <div class="card h-100 col-6 col-lg-3 d-flex flex-column justify-content-between pe-3" >
                                    <div>
                                        <a class="imageLink___1NeIh"
                                           href="#">
                                            <img alt="Vintner’s Daughter Active Botanical Serum" itemprop="image" class="w-100 h-auto"
                                                 src="https://shop.goop-img.com/spree/images/attachments/000/062/863/product/open-uri20201123-6983-1g043ji?1606174998"
                                                 draggable="false">
                                        </a>
                                        <span class="brandName___2Tzl8">Vintner’s Daughter</span>
                                        <a class="name___1-mZL" title="Active Botanical Serum" href="#">
                                            <span>Active Botanical Serum</span>
                                        </a>
                                        <span class="d-block">
                                            <span itemtype="https://schema.org/Offer">
                                                <span>US $</span>
                                                <span>195.00</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn text-center text-uppercase w-100 btn-outline-dark rounded-0 mt-4">Add to Bag
                                        </button>
                                    </div>
                                </div>
                                <!--							einde inhoud derde carousel-->
                            </div>
                            <div class="carousel-item">
                                <!--							vierde carousel-->
                                <div class="card h-100 col-6 col-lg-3 d-flex flex-column justify-content-between pe-3" >
                                    <div>
                                        <a class="imageLink___1NeIh"
                                           href="#">
                                            <img alt="Vintner’s Daughter Active Botanical Serum" itemprop="image" class="w-100 h-auto"
                                                 src="https://shop.goop-img.com/spree/images/attachments/000/062/863/product/open-uri20201123-6983-1g043ji?1606174998"
                                                 draggable="false">
                                        </a>
                                        <span class="brandName___2Tzl8">Vintner’s Daughter</span>
                                        <a class="name___1-mZL" title="Active Botanical Serum" href="#">
                                            <span>Active Botanical Serum</span>
                                        </a>
                                        <span class="d-block">
                                            <span itemtype="https://schema.org/Offer">
                                                <span>US $</span>
                                                <span>195.00</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn text-center text-uppercase w-100 btn-outline-dark rounded-0 mt-4">Add to Bag
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--							vierde carousel-->
                                <div class="card h-100 col-6 col-lg-3 d-flex flex-column justify-content-between pe-3" >
                                    <div>
                                        <a class="imageLink___1NeIh"
                                           href="#">
                                            <img alt="Vintner’s Daughter Active Botanical Serum" itemprop="image" class="w-100 h-auto"
                                                 src="https://shop.goop-img.com/spree/images/attachments/000/062/863/product/open-uri20201123-6983-1g043ji?1606174998"
                                                 draggable="false">
                                        </a>
                                        <span class="brandName___2Tzl8">Vintner’s Daughter</span>
                                        <a class="name___1-mZL" title="Active Botanical Serum" href="#">
                                            <span>Active Botanical Serum</span>
                                        </a>
                                        <span class="d-block">
                                            <span itemtype="https://schema.org/Offer">
                                                <span>US $</span>
                                                <span>195.00</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <button class="btn text-center text-uppercase w-100 btn-outline-dark rounded-0 mt-4">Add to Bag
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev pijl d-lg-none" type="button" data-bs-target="#carouselExampleIndicators-You-might-like" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next pijl d-lg-none" type="button" data-bs-target="#carouselExampleIndicators-You-might-like" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>



                    </div>



                </div>
            </div>
            <div class="col-12 col-lg-4">

                <div class="bg-secondary bg-opacity-10 border card">
                    <div class="text-center checkout">
                        <h3>Checkout</h3
                        ></div>
                    <div class="px-3 py-2 text-black checkout-list">
                            <div class="d-flex justify-content-between">
                                <p>Subtotal</p>
                                <p>€ {{Session::get('cart')->totalPrice}}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="label___3OTM4 xs-flex-2">Standard Ground</p>
                                <p class="value___3Fz-s xs-flex-1">Free</p>
                            </div>
                            <div>
                                <div class="promoFormWrapper___1AEUX">
                                    <div>
                                        <div><p class="promoInputLabel___iOhtg"><span>Promo Code</span></p>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p class="promoInputinfo">(only one per order)</p></div>
                                    <form class="input-group mb-3">
                                        <input type="text" class="form-control text-capitalize rounded-0" placeholder="Enter Promo code" aria-label="Username" aria-describedby="basic-addon1">
                                    </form>
                                </div>
                            </div>
                            <div class="totalWrapper___20bDu">
                                <div class="display-flex fullPageCart___bGTcB">
                                    <div class="xs-flex-2 label___19LnA">Total</div>
                                    <div class="xs-flex-1 value___38GgZ">€ {{Session::get('cart')->totalPrice}}</div>
                                </div>
                            </div>

                            <a href="{{route('cart-address')}}">
                            <button class="btn btn-g btn-dark text-uppercase rounded-0 w-100 mt-3 mb-4">Checkout</button>
                            </a>
                    </div>
                </div>
                <a href="{{route('home')}}">
                    <button type="button" class="btn text-decoration-underline text-uppercase w-100 text-center my-4">Continue Shopping</button>
                </a>
                <div class="text-start col-11 offset-1 mt-3">
                    <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample1">
                        <div class="accordion-item border-start-0 border-end-0 ">
                            <h2 class="accordion-header border-0" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="false"
                                        aria-controls="collapseOne1">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP">
                                        NEED HELP? HAVE A QUESTION?</h2>
                                </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF">
                                    <p style="min-width: 50%;float: left;padding-right: 10px; margin-bottom: 1em; line-height: 24px;">
                                        <strong>Contact Customer Service</strong>
                                        <br>
                                        <a href="mailto:customerservice@goop.com" style="font-weight:bold;">customerservice@goop.com</a>
                                        <br>
                                        1.844.WTF.GOOP,
                                        <br>
                                        11AM - 3PM EST
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo1" aria-expanded="false"
                                        aria-controls="collapseTwo1">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">PAYMENT OPTIONS</h2>
                                </button>
                            </h2>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample1">
                                <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    <ul style="list-style:none;padding:0;margin-bottom:0;line-height:1em;display:flex;flex-wrap:wrap;">
                                        <li style="width:50%;min-width:136px;display:flex;align-items:center;margin-bottom:1em;">
		<span style="padding-right:0.75em;">
			<svg height="25" viewBox="0 0 160 100" width="43">
				<g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
					<g>
						<rect d="M0,9 L0,89 L160,89 L160,9 L0,9 Z M0,9" fill="#F6F6F6" height="80" id="Rectangle-20"
                              width="160" x="0" y="9"></rect>
						<path
                            d="M148,1.01146687e-06 C140,1.76644588e-06 55.3007812,-1.60318373e-06 8,1.01146687e-06 C4,1.23257532e-06 -1.27897692e-13,4.00000101 7.10542736e-14,8.00000101 L7.10542736e-14,20.000001 L160,20.000001 C160,20.000001 159.999998,38.5719411 160,12.000001 C160,4.00000101 156,1.01146687e-06 148,1.01146687e-06 Z M148,1.01146687e-06"
                            fill="#265697" id="Rectangle-1"></path>
						<path
                            d="M0,80 C0,80 9.66373104e-07,80.000001 0,88.0000005 C-4.6283987e-07,95.9999999 4,99.9999997 12,99.9999997 C56.6232096,99.9999997 140,100 148,99.9999997 C156,99.9999997 160,95.9999999 160,88.0000005 L160,80 L0,80 Z M0,80"
                            fill="#D97B16" id="Rectangle-1"></path>
						<path
                            d="M111.614545,29.7821084 C109.372,28.9224828 105.858424,28 101.470273,28 C90.2863939,28 82.4084242,33.7551133 82.3411818,42.0028374 C82.2781818,48.0997635 87.9653636,51.5007685 92.258697,53.5306207 C96.6644545,55.6103251 98.1454848,56.9368276 98.1242727,58.793931 C98.0964848,61.6381084 94.6060303,62.9375172 91.3529394,62.9375172 C86.8226667,62.9375172 84.4159394,62.2944236 80.6987273,60.7102069 L79.2401818,60.0359015 L77.6516061,69.5344828 C80.2950606,70.718798 85.1838182,71.7451034 90.2596667,71.7982069 C102.157333,71.7982069 109.881091,66.109202 109.968909,57.3016158 C110.011545,52.4746207 106.995818,48.8013793 100.466091,45.7731823 C96.5098182,43.8103054 94.0869697,42.5004926 94.1126364,40.5129064 C94.1126364,38.7492217 96.1634242,36.8632906 100.594424,36.8632906 C104.295727,36.8045517 106.976727,37.6292808 109.065909,38.4889064 L110.080061,38.9785419 L111.614545,29.7821084"
                            fill="#265697" id="Shape"></path>
						<path
                            d="M140.638455,28.7779113 L131.892485,28.7779113 C129.183273,28.7779113 127.155606,29.5334975 125.965818,32.2966108 L109.156061,71.1819901 L121.041424,71.1819901 C121.041424,71.1819901 122.984667,65.9535764 123.424182,64.8056749 C124.723,64.8056749 136.269182,64.8238818 137.919697,64.8238818 C138.258455,66.3092611 139.296788,71.1819901 139.296788,71.1819901 L149.799333,71.1819901 L140.638455,28.7779113 L140.638455,28.7779113 Z M126.681515,56.1268374 C127.617606,53.6821281 131.191,44.2654778 131.191,44.2654778 C131.124182,44.3784039 132.120091,41.8088473 132.691758,40.2157438 L133.456667,43.8740296 C133.456667,43.8740296 135.623909,54.0024828 136.077,56.1264039 L126.681515,56.1268374 L126.681515,56.1268374 L126.681515,56.1268374 L126.681515,56.1268374 Z M126.681515,56.1268374"
                            fill="#265697" id="Shape"></path>
						<path
                            d="M59.2498788,71.1685517 L66.3264545,28.7373793 L77.6450303,28.7373793 L70.5635758,71.1685517 L59.2498788,71.1685517 Z M59.2498788,71.1685517"
                            fill="#265697" id="Shape"></path>
						<path
                            d="M49.7568182,28.7683744 L38.6756061,57.7032512 L37.4949394,51.8230739 C35.4320606,45.0446897 29.0047879,37.7005911 21.8193939,34.0238818 L31.9517879,71.1319212 L43.9270909,71.1180493 L61.7461212,28.7683744 L49.7568182,28.7683744"
                            fill="#265697" id="Shape"></path>
						<path
                            d="M28.3955758,28.7421478 L10.1444545,28.7421478 L10,29.6249655 C24.1991818,33.1371626 33.5946667,41.6248276 37.4947273,51.8230739 L33.5261515,32.3243547 C32.841,29.6375369 30.8538485,28.8357833 28.3955758,28.7421478"
                            fill="#D97B16" id="Shape"></path>
					</g>
				</g>
			</svg>
		</span>
                                            <span>Visa</span>
                                        </li>
                                        <li style="width:50%;min-width:136px;display:flex;align-items:center;margin-bottom:1em;">
		<span style="padding-right:0.75em;">
			<svg width="42" height="25" viewBox="0 0 300 180" style="enable-background:new 0 0 300 180;">
				<g>
					<g>
						<path style="fill:#FF9900;"
                              d="M298.032,90.5c0.014,48.936-39.646,88.614-88.582,88.627 c-48.937,0.012-88.614-39.646-88.627-88.582c0-0.016,0-0.029,0-0.045c-0.013-48.935,39.647-88.615,88.581-88.628 c48.937-0.013,88.615,39.647,88.628,88.583C298.032,90.47,298.032,90.484,298.032,90.5z"></path>
						<path style="fill:#CC0000;"
                              d="M90.001,1.895C41.355,2.204,1.967,41.781,1.967,90.5 c0,48.909,39.695,88.604,88.605,88.604c22.955,0,43.879-8.748,59.624-23.086c-0.001,0-0.003-0.002-0.007-0.004h0.019 c3.224-2.938,6.231-6.108,8.995-9.488H141.05c-2.424-2.928-4.627-5.979-6.606-9.127h31.308c1.904-3.047,3.628-6.211,5.158-9.488    h-41.635c-1.419-3.042-2.651-6.153-3.703-9.309h49.045c2.956-8.832,4.56-18.281,4.56-28.103c0-6.512-0.706-12.861-2.042-18.974    h-54.164c0.671-3.146,1.518-6.254,2.528-9.308h49.063c-1.097-3.25-2.371-6.417-3.82-9.487H129.27 c1.496-3.196,3.191-6.305,5.084-9.307h31.285c-2.082-3.317-4.386-6.486-6.877-9.488h-17.443c2.697-3.174,5.666-6.163,8.889-8.95 c-15.746-14.34-36.676-23.09-59.636-23.09C90.381,1.895,90.192,1.894,90.001,1.895z"></path>
						<path style="fill:#FCB340;"
                              d="M289.143,136.82c0.482,0,0.951,0.125,1.409,0.371c0.46,0.246,0.814,0.601,1.07,1.062 c0.256,0.456,0.384,0.937,0.384,1.435c0,0.492-0.127,0.968-0.379,1.424c-0.251,0.455-0.605,0.81-1.061,1.063 c-0.451,0.249-0.928,0.375-1.424,0.375s-0.972-0.126-1.426-0.375c-0.455-0.254-0.807-0.607-1.063-1.063 c-0.252-0.456-0.377-0.932-0.377-1.424c0-0.498,0.127-0.979,0.384-1.435c0.258-0.461,0.614-0.813,1.071-1.062 C288.193,136.945,288.662,136.82,289.143,136.82 M289.143,137.295c-0.401,0-0.793,0.104-1.176,0.311 c-0.38,0.207-0.677,0.5-0.891,0.888c-0.217,0.382-0.325,0.778-0.325,1.194c0,0.412,0.106,0.81,0.315,1.188 c0.214,0.377,0.51,0.673,0.888,0.885c0.381,0.211,0.776,0.315,1.188,0.315c0.414,0,0.81-0.104,1.189-0.315 c0.378-0.212,0.673-0.508,0.884-0.885c0.209-0.378,0.313-0.775,0.313-1.188c0-0.416-0.106-0.813-0.321-1.194 c-0.213-0.388-0.511-0.681-0.894-0.888C289.934,137.398,289.544,137.295,289.143,137.295 M287.887,141.27v-3.082h1.062 c0.36,0,0.622,0.028,0.784,0.088c0.162,0.057,0.291,0.154,0.388,0.297c0.095,0.141,0.144,0.291,0.144,0.451 c0,0.226-0.08,0.422-0.242,0.588c-0.158,0.166-0.373,0.261-0.639,0.281c0.109,0.045,0.196,0.102,0.264,0.164 c0.125,0.12,0.275,0.323,0.455,0.61l0.375,0.603h-0.606l-0.272-0.485c-0.215-0.382-0.388-0.62-0.521-0.718 c-0.091-0.069-0.224-0.105-0.397-0.105h-0.293v1.311h-0.5 M288.385,139.535h0.604c0.288,0,0.483-0.044,0.588-0.129 c0.106-0.088,0.159-0.2,0.159-0.342c0-0.092-0.024-0.174-0.075-0.244c-0.052-0.073-0.122-0.125-0.213-0.162 c-0.089-0.035-0.255-0.055-0.497-0.055h-0.564v0.932"></path>
					</g>
					<g>
						<g transform="translate(-13.74405,15.9939)">
							<path style="fill:#000066;"
                                  d="M133.719,99.926l1.18-8.02c-0.645,0-1.593,0.279-2.431,0.279 c-3.284,0-3.694-1.755-3.436-3.037l3.236-16.13h4.992l1.029-9.103h-4.705l0.958-5.516H124.7 c-0.208,0.208-5.568,31.022-5.568,34.776c0,5.555,3.118,8.027,7.516,7.988C130.09,101.134,132.773,100.181,133.719,99.926z"></path>
							<path style="fill:#000066;"
                                  d="M136.706,84.638c0,13.332,8.799,16.499,16.297,16.499 c6.921,0,10.55-1.604,10.55-1.604l1.662-9.1c0,0-5.848,2.378-10.601,2.378c-10.131,0-8.355-7.554-8.355-7.554l19.463,0.059 c0,0,1.239-6.111,1.239-8.602c0-6.217-3.387-13.849-13.745-13.849C143.73,62.867,136.706,73.088,136.706,84.638z M153.252,71.313 c5.324,0,4.342,5.984,4.342,6.469H147.12C147.12,77.162,148.109,71.313,153.252,71.313z"></path>
							<path style="fill:#000066;"
                                  d="M212.99,99.923l1.689-10.284c0,0-4.632,2.321-7.807,2.321 c-6.693,0-9.378-5.11-9.378-10.601c0-11.137,5.758-17.265,12.168-17.265c4.808,0,8.665,2.699,8.665,2.699l1.54-9.993 c0,0-4.554-3.289-9.456-3.308c-14.745-0.058-23.182,10.208-23.182,27.955c0,11.763,6.248,19.768,17.506,19.768 C207.918,101.215,212.99,99.923,212.99,99.923z"></path>
							<path style="fill:#000066;"
                                  d="M81.83,63.012c-6.469,0-11.427,2.079-11.427,2.079l-1.37,8.127 c0,0,4.093-1.663,10.281-1.663c3.513,0,6.083,0.395,6.083,3.25c0,1.734-0.314,2.374-0.314,2.374s-2.772-0.231-4.056-0.231 c-9.21,0-16.729,3.482-16.729,13.98c0,8.273,5.623,10.17,9.108,10.17c6.657,0,9.292-4.203,9.444-4.215l-0.077,3.488 c0,0,8.306,0,8.307,0l3.706-25.98C94.786,63.366,85.17,63.012,81.83,63.012z M83.268,84.108c0.181,1.586-0.41,9.086-6.092,9.086 c-2.93,0-3.691-2.24-3.691-3.562c0-2.584,1.403-5.683,8.315-5.683C83.41,83.949,82.997,84.065,83.268,84.108z"></path>
							<path style="fill:#000066;"
                                  d="M103.615,100.906c2.125,0,14.272,0.541,14.272-11.994 c0-11.721-11.244-9.404-11.244-14.114c0-2.342,1.833-3.08,5.184-3.08c1.329,0,6.447,0.423,6.447,0.423l1.189-8.33 c0,0.001-3.312-0.741-8.704-0.741c-6.979,0-14.063,2.786-14.063,12.318c0,10.802,11.812,9.717,11.812,14.267 c0,3.037-3.3,3.287-5.844,3.287c-4.401,0-8.363-1.511-8.377-1.438l-1.259,8.245C93.257,99.819,95.702,100.906,103.615,100.906z"></path>
							<path style="fill:#000066;"
                                  d="M290.807,55.455l-1.705,12.709c0,0-3.553-4.905-9.112-4.905 c-10.459,0-15.849,10.423-15.849,22.396c0,7.73,3.844,15.307,11.699,15.307c5.651,0,8.784-3.941,8.784-3.941l-0.415,3.365h9.178 l7.207-44.862L290.807,55.455z M286.755,80.156c0,4.983-2.468,11.64-7.581,11.64c-3.396,0-4.988-2.851-4.988-7.324 c0-7.315,3.285-12.14,7.432-12.14C285.012,72.332,286.755,74.662,286.755,80.156z"></path>
							<path style="fill:#000066;"
                                  d="M30.749,100.423l5.743-33.87l0.844,33.87h6.499l12.125-33.87l-5.371,33.87h9.658 l7.437-44.922l-15.342-0.117l-9.126,27.504l-0.25-27.387h-14.06l-7.544,44.922H30.749L30.749,100.423z"></path>
							<path style="fill:#000066;"
                                  d="M176.101,100.487c2.746-15.615,3.724-27.947,11.732-25.393 c1.15-6.044,3.891-11.3,5.143-13.858c0,0-0.396-0.589-2.871-0.589c-4.225,0-9.866,8.574-9.866,8.574l0.843-5.301h-8.786 l-5.884,36.566H176.101z"></path>
							<g transform="translate(845.3001,0)">
								<path style="fill:#000066;"
                                      d="M-612.55,63.012c-6.472,0-11.43,2.079-11.43,2.079l-1.369,8.127 c0,0,4.095-1.663,10.28-1.663c3.514,0,6.083,0.395,6.083,3.25c0,1.734-0.313,2.374-0.313,2.374s-2.771-0.231-4.055-0.231 c-9.211,0-16.729,3.482-16.729,13.98c0,8.273,5.622,10.17,9.107,10.17c6.655,0,9.292-4.203,9.443-4.215l-0.078,3.488h8.309 l3.705-25.98C-599.596,63.366-609.212,63.012-612.55,63.012z M-611.114,84.108c0.18,1.586-0.411,9.086-6.092,9.086 c-2.932,0-3.692-2.24-3.692-3.562c0-2.584,1.402-5.683,8.315-5.683C-610.972,83.949-611.384,84.065-611.114,84.108z"></path>
							</g>
							<path style="fill:#000066;"
                                  d="M255.266,100.487c1.508-11.488,4.299-27.616,11.731-25.393 c1.149-6.044,0.041-6.028-2.433-6.028c-4.228,0-5.164,0.154-5.164,0.154l0.844-5.301h-8.785l-5.884,36.567H255.266 l255.266,100.487z"></path>
						</g>
						<g>
							<path style="fill:#FFFFFF;"
                                  d="M122.434,113.059l1.181-8.019c-0.645,0-1.594,0.276-2.431,0.276 c-3.284,0-3.646-1.746-3.437-3.037l2.653-16.362h4.991l1.205-8.87h-4.706l0.958-5.516h-9.434 c-0.208,0.208-5.569,31.023-5.569,34.775c0,5.555,3.119,8.029,7.517,7.989C118.806,114.266,121.488,113.313,122.434,113.059z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M125.423,97.77c0,13.332,8.8,16.5,16.297,16.5c6.92,0,9.965-1.547,9.965-1.547 l1.662-9.099c0,0-5.264,2.319-10.018,2.319c-10.13,0-8.356-7.553-8.356-7.553h19.172c0,0,1.238-6.113,1.238-8.604 c0-6.216-3.094-13.79-13.452-13.79C132.445,75.998,125.423,86.219,125.423,97.77z M141.967,84.445 c5.324,0,4.342,5.983,4.342,6.467h-10.474C135.835,90.294,136.825,84.445,141.967,84.445z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M201.707,113.055l1.688-10.285c0,0-4.629,2.321-7.806,2.321 c-6.692,0-9.376-5.11-9.376-10.6c0-11.137,5.758-17.264,12.168-17.264c4.807,0,8.665,2.699,8.665,2.699l1.54-9.993 c0,0-5.721-2.315-10.625-2.315c-10.891,0-21.486,9.448-21.486,27.192c0,11.766,5.721,19.537,16.979,19.537 C196.637,114.348,201.707,113.055,201.707,113.055z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M70.547,76.143c-6.469,0-11.428,2.079-11.428,2.079l-1.369,8.127 c0,0,4.093-1.663,10.28-1.663c3.513,0,6.083,0.395,6.083,3.25c0,1.734-0.315,2.374-0.315,2.374s-2.771-0.232-4.054-0.232 c-8.159,0-16.73,3.482-16.73,13.98c0,8.272,5.623,10.17,9.108,10.17c6.656,0,9.525-4.319,9.678-4.332l-0.311,3.605h8.307 l3.706-25.981C83.502,76.498,73.887,76.143,70.547,76.143z M72.568,97.297c0.18,1.587-0.995,9.026-6.675,9.026 c-2.93,0-3.692-2.238-3.692-3.562c0-2.582,1.403-5.682,8.316-5.682C72.125,97.081,72.297,97.253,72.568,97.297z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M92.331,114.038c2.125,0,14.273,0.54,14.273-11.995 c0-11.719-11.245-9.404-11.245-14.112c0-2.344,1.833-3.082,5.183-3.082c1.33,0,6.447,0.423,6.447,0.423l1.19-8.33 c0,0.001-3.312-0.741-8.704-0.741c-6.979,0-14.063,2.786-14.063,12.318c0,10.801,11.812,9.717,11.812,14.267 c0,3.037-3.3,3.284-5.843,3.284c-4.401,0-8.364-1.51-8.378-1.438l-1.258,8.246C81.973,112.948,84.417,114.038,92.331,114.038z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M279.852,68.668l-2.035,12.627c0,0-3.551-4.905-9.11-4.905 c-8.644,0-15.849,10.422-15.849,22.397c0,7.73,3.843,15.304,11.699,15.304c5.651,0,8.784-3.94,8.784-3.94l-0.415,3.365h9.176 l7.207-44.863L279.852,68.668z M275.471,93.288c0,4.983-2.467,11.639-7.582,11.639c-3.395,0-4.986-2.85-4.986-7.323 c0-7.314,3.285-12.14,7.43-12.14C273.729,85.463,275.471,87.796,275.471,93.288z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M19.466,113.555l5.743-33.87l0.843,33.87h6.5l12.125-33.87l-5.371,33.87h9.658 l7.438-44.923H41.467l-9.301,27.563l-0.484-27.563H17.915l-7.545,44.923H19.466z"></path>
							<path style="fill:#FFFFFF;"
                                  d="M164.818,113.617c2.746-15.616,3.255-28.296,9.808-25.975 c1.147-6.044,2.254-8.382,3.506-10.94c0,0-0.587-0.123-1.819-0.123c-4.225,0-7.355,5.772-7.355,5.772l0.841-5.301h-8.784 l-5.885,36.567H164.818z"></path>
							<g transform="translate(847.0062,0)">
								<path style="fill:#FFFFFF;"
                                      d="M-623.531,76.143c-6.469,0-11.428,2.079-11.428,2.079l-1.368,8.127 c0,0,4.093-1.663,10.28-1.663c3.513,0,6.081,0.395,6.081,3.25c0,1.734-0.313,2.374-0.313,2.374s-2.771-0.232-4.055-0.232 c-8.158,0-16.729,3.482-16.729,13.98c0,8.272,5.622,10.17,9.107,10.17c6.656,0,9.525-4.319,9.677-4.332l-0.309,3.605 c0,0,8.304,0,8.307,0l3.705-25.981C-610.575,76.498-620.191,76.143-623.531,76.143z M-621.507,97.297 c0.18,1.587-0.996,9.026-6.678,9.026c-2.93,0-3.69-2.238-3.69-3.562c0-2.582,1.403-5.682,8.315-5.682 C-621.952,97.081-621.781,97.253-621.507,97.297z"></path>
							</g>
							<g transform="translate(442.2857,0)">
								<path style="fill:#FFFFFF;"
                                      d="M-198.263,113.617c2.747-15.616,3.256-28.296,9.807-25.975 c1.149-6.044,2.257-8.382,3.508-10.94c0,0-0.587-0.123-1.819-0.123c-4.225,0-7.355,5.772-7.355,5.772l0.841-5.301h-8.784 l-5.885,36.567H-198.263z"></path>
							</g>
							<path style="fill:#FFFFFF;"
                                  d="M289.105,107.975c0.479,0,0.951,0.123,1.406,0.373 c0.459,0.242,0.816,0.598,1.072,1.059c0.257,0.458,0.383,0.935,0.383,1.434c0,0.493-0.126,0.969-0.379,1.424 c-0.251,0.455-0.604,0.812-1.059,1.063c-0.454,0.25-0.93,0.376-1.424,0.376c-0.498,0-0.974-0.126-1.429-0.376 c-0.454-0.253-0.806-0.608-1.058-1.063c-0.256-0.455-0.381-0.931-0.381-1.424c0-0.499,0.127-0.976,0.384-1.434 c0.258-0.461,0.616-0.815,1.073-1.059C288.154,108.098,288.626,107.975,289.105,107.975 M289.105,108.447 c-0.401,0-0.793,0.104-1.176,0.313c-0.382,0.204-0.679,0.499-0.894,0.885c-0.214,0.381-0.322,0.78-0.322,1.194     s0.104,0.81,0.313,1.188c0.213,0.377,0.509,0.673,0.891,0.886c0.378,0.208,0.773,0.313,1.188,0.313 c0.412,0,0.81-0.105,1.188-0.313c0.378-0.213,0.674-0.509,0.884-0.886c0.211-0.381,0.314-0.774,0.314-1.188     s-0.107-0.813-0.321-1.194c-0.213-0.386-0.51-0.681-0.894-0.885C289.896,108.552,289.507,108.447,289.105,108.447      M287.85,112.423v-3.083h1.061c0.361,0,0.625,0.029,0.785,0.088c0.162,0.055,0.289,0.154,0.388,0.297 c0.097,0.142,0.146,0.291,0.146,0.451c0,0.225-0.082,0.422-0.244,0.588c-0.158,0.166-0.371,0.262-0.637,0.28 c0.106,0.046,0.194,0.101,0.262,0.163c0.123,0.122,0.275,0.326,0.455,0.611l0.377,0.604h-0.609l-0.271-0.485 c-0.216-0.383-0.389-0.621-0.521-0.718c-0.091-0.071-0.224-0.106-0.399-0.106h-0.291v1.311L287.85,112.423 M288.348,110.688     h0.604c0.289,0,0.484-0.043,0.588-0.129c0.105-0.084,0.16-0.199,0.16-0.342c0-0.091-0.025-0.173-0.075-0.242 c-0.051-0.074-0.122-0.127-0.213-0.164c-0.091-0.035-0.254-0.053-0.498-0.053h-0.565V110.688"></path>
						</g>
					</g>
				</g>
			</svg>
		</span>
                                            <span>MasterCard</span>
                                        </li>
                                        <li style="width:50%;min-width:136px;display:flex;align-items:center;margin-bottom:1em;">
		<span style="padding-right:0.75em;">
			<svg width="43" height="35" viewBox="0 0 300 300" enable-background="new 0 0 300 300">
				<radialGradient id="SVGID_1_" cx="57.3882" cy="57.021" r="264.5797" gradientUnits="userSpaceOnUse">
					<stop offset="0" style="stop-color:#9DD5F6"></stop>
					<stop offset="0.0711" style="stop-color:#98D3F5"></stop>
					<stop offset="0.1575" style="stop-color:#89CEF3"></stop>
					<stop offset="0.2516" style="stop-color:#70C6EF"></stop>
					<stop offset="0.3514" style="stop-color:#4EBBEA"></stop>
					<stop offset="0.4546" style="stop-color:#23ADE3"></stop>
					<stop offset="0.5" style="stop-color:#0DA6E0"></stop>
					<stop offset="1" style="stop-color:#2E77BC"></stop>
				</radialGradient>
				<path fill="url(#SVGID_1_)"
                      d="M289.584,7.598H7.639v282.966h281.945v-93.386c1.12-1.619,1.673-3.69,1.673-6.222  c0-2.898-0.553-4.693-1.673-6.205"></path>
				<g>
					<defs>
						<path id="SVGID_2_AE"
                              d="M289.584,7.598H7.639v282.966h281.945v-93.386c1.12-1.619,1.673-3.69,1.673-6.222    c0-2.898-0.553-4.693-1.673-6.205"></path>
					</defs>
					<clipPath id="SVGID_3_">
						<use xlink:href="#SVGID_2_AE" overflow="visible"></use>
					</clipPath>
				</g>
				<path fill="#FFFFFF"
                      d="M33.053,130.042l-5.424-13.217l-5.393,13.217 M152.543,124.779c-1.089,0.661-2.377,0.683-3.92,0.683h-9.627  v-7.364h9.758c1.381,0,2.822,0.062,3.758,0.598c1.028,0.483,1.664,1.511,1.664,2.931  C154.176,123.076,153.571,124.242,152.543,124.779z M221.221,130.042l-5.484-13.217l-5.454,13.217H221.221z M93.201,144.348h-8.124  l-0.03-25.966l-11.491,25.966h-6.958l-11.521-25.989v25.989H38.959l-3.045-7.395h-16.5l-3.076,7.395H7.731l14.191-33.154h11.774  l13.478,31.39v-31.39h12.934l10.371,22.491l9.527-22.491h13.194V144.348z M125.58,144.348H99.107v-33.154h26.473v6.904h-18.548  v5.976h18.103v6.796h-18.103v6.621h18.548V144.348z M162.906,120.123c0,5.286-3.528,8.017-5.584,8.837  c1.734,0.66,3.215,1.826,3.92,2.792c1.119,1.649,1.312,3.122,1.312,6.083v6.513h-7.993l-0.03-4.181c0-1.995,0.191-4.864-1.251-6.459  c-1.158-1.166-2.923-1.419-5.776-1.419h-8.507v12.059h-7.924v-33.154h18.227c4.05,0,7.034,0.107,9.596,1.588  C161.403,114.263,162.906,116.425,162.906,120.123z M175.588,144.348h-8.086v-33.154h8.086V144.348z M269.396,144.348h-11.23  l-15.021-24.884v24.884h-16.139l-3.084-7.395H207.46l-2.992,7.395h-9.273c-3.852,0-8.729-0.852-11.491-3.667  c-2.785-2.815-4.234-6.628-4.234-12.657c0-4.917,0.866-9.412,4.272-12.964c2.562-2.646,6.574-3.866,12.035-3.866h7.672v7.104h-7.511  c-2.892,0-4.525,0.43-6.098,1.964c-1.351,1.396-2.278,4.035-2.278,7.51c0,3.552,0.706,6.113,2.179,7.786  c1.22,1.312,3.437,1.71,5.523,1.71h3.559l11.169-26.073h11.874l13.417,31.359v-31.359h12.066l13.93,23.09v-23.09h8.117V144.348z   M7.639,150.86h13.54l3.053-7.364h6.835l3.045,7.364h26.641v-5.63l2.378,5.654h13.83l2.378-5.738v5.714h66.208l-0.031-12.088h1.281  c0.897,0.031,1.159,0.114,1.159,1.595v10.493h34.243v-2.814c2.762,1.48,7.058,2.814,12.711,2.814h14.406l3.083-7.364h6.835  l3.015,7.364h27.761v-6.995l4.204,6.995h22.246v-46.24h-22.016v5.461l-3.083-5.461H228.77v5.461l-2.831-5.461h-30.515  c-5.108,0-9.598,0.713-13.225,2.7v-2.7h-21.058v2.7c-2.308-2.048-5.453-2.7-8.95-2.7H75.258l-5.162,11.943l-5.301-11.943H40.563  v5.461l-2.662-5.461H17.235l-9.597,21.985V150.86z"></path>
				<path fill="#FFFFFF"
                      d="M289.584,175.315h-14.443c-1.442,0-2.4,0.054-3.207,0.599c-0.836,0.537-1.158,1.334-1.158,2.386  c0,1.251,0.706,2.102,1.733,2.47c0.836,0.291,1.734,0.376,3.054,0.376l4.295,0.115c4.334,0.107,7.227,0.852,8.991,2.669  c0.321,0.253,0.514,0.537,0.735,0.821 M289.584,197.178c-1.925,2.815-5.676,4.242-10.754,4.242h-15.304v-7.111h15.242  c1.512,0,2.57-0.199,3.207-0.821c0.552-0.513,0.937-1.258,0.937-2.163c0-0.966-0.385-1.733-0.968-2.193  c-0.575-0.506-1.412-0.736-2.792-0.736c-7.441-0.253-16.724,0.23-16.724-10.264c0-4.81,3.054-9.873,11.37-9.873h15.785v-6.598  h-14.666c-4.426,0-7.641,1.06-9.918,2.708v-2.708h-21.693c-3.469,0-7.541,0.86-9.467,2.708v-2.708h-38.738v2.708  c-3.083-2.224-8.285-2.708-10.686-2.708h-25.552v2.708c-2.439-2.362-7.863-2.708-11.169-2.708h-28.597l-6.544,7.082l-6.129-7.082  H63.706v46.272h41.914l6.743-7.194l6.352,7.194l25.836,0.023v-10.885h2.54c3.428,0.053,7.471-0.085,11.038-1.627v12.488h21.31  v-12.06h1.028c1.312,0,1.441,0.054,1.441,1.365v10.694h64.736c4.11,0,8.406-1.052,10.785-2.961v2.961h20.534  c4.273,0,8.446-0.599,11.621-2.133V197.178z M257.973,183.93c1.543,1.597,2.37,3.613,2.37,7.026c0,7.134-4.457,10.464-12.449,10.464  h-15.435v-7.111h15.373c1.503,0,2.569-0.199,3.237-0.821c0.545-0.513,0.936-1.258,0.936-2.163c0-0.966-0.423-1.733-0.967-2.193  c-0.606-0.506-1.442-0.736-2.822-0.736c-7.411-0.253-16.692,0.23-16.692-10.264c0-4.81,3.022-9.873,11.33-9.873h15.887v7.058  h-14.537c-1.441,0-2.378,0.054-3.175,0.599c-0.868,0.537-1.19,1.334-1.19,2.386c0,1.251,0.737,2.102,1.734,2.47  c0.836,0.291,1.734,0.376,3.084,0.376l4.266,0.115C253.225,181.368,256.178,182.112,257.973,183.93z M186.465,181.882  c-1.06,0.629-2.371,0.683-3.913,0.683h-9.627v-7.448h9.758c1.411,0,2.823,0.03,3.782,0.599c1.027,0.537,1.641,1.564,1.641,2.983  S187.492,181.261,186.465,181.882z M191.251,186.009c1.764,0.651,3.206,1.818,3.882,2.784c1.119,1.619,1.281,3.13,1.313,6.053v6.574  h-7.956v-4.149c0-1.995,0.192-4.949-1.281-6.491c-1.158-1.188-2.923-1.472-5.814-1.472h-8.469v12.112h-7.963v-33.162h18.296  c4.012,0,6.934,0.177,9.535,1.565c2.501,1.511,4.074,3.581,4.074,7.364C196.867,182.48,193.337,185.181,191.251,186.009z   M201.262,168.258h26.449v6.858h-18.557v6.029h18.104v6.766h-18.104v6.598l18.557,0.03v6.881h-26.449V168.258z M147.795,183.562  h-10.241v-8.445h10.333c2.861,0,4.847,1.166,4.847,4.066C152.734,182.051,150.84,183.562,147.795,183.562z M129.661,198.404  l-12.167-13.508l12.167-13.079V198.404z M98.24,194.509H78.756v-6.598h17.398v-6.766H78.756v-6.029h19.868l8.668,9.664  L98.24,194.509z M161.242,179.183c0,9.212-6.873,11.114-13.8,11.114h-9.888v11.123h-15.403l-9.758-10.978l-10.141,10.978h-31.39  v-33.162h31.873l9.75,10.87l10.08-10.87h25.322C154.176,168.258,161.242,169.999,161.242,179.183z"></path>
			</svg>
		</span>
                                            <span>American Express</span>
                                        </li>
                                        <li style="width:50%;min-width:136px;display:flex;align-items:center;margin-bottom:10px;">
		<span style="padding-right:0.75em;">
			<svg width="43" height="25" viewBox="0 0 750 471">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g fill-rule="nonzero">
						<path
                            d="M52.8771038,0 C23.6793894,0 -4.55476115e-15,23.1545612 0,51.7102589 L0,419.289737 C0,447.850829 23.671801,471 52.8771038,471 L697.122894,471 C726.320615,471 750,447.845433 750,419.289737 L750,252.475404 L750,51.7102589 C750,23.1491677 726.328202,-4.4533018e-15 697.122894,0 L52.8771038,0 Z"
                            id="Shape" fill="#4D4D4D"></path>
						<path
                            d="M314.569558,152.198414 C323.06625,152.198414 330.192577,153.9309 338.865308,158.110254 L338.865308,180.197198 C330.650269,172.563549 323.523875,169.368926 314.100058,169.368926 C295.577115,169.368926 281.009615,183.944539 281.009615,202.424438 C281.009615,221.911997 295.126279,235.620254 315.018404,235.620254 C323.972798,235.620254 330.967135,232.591128 338.865308,225.080186 L338.865308,247.178497 C329.883538,251.197965 322.604577,252.785079 314.100058,252.785079 C284.025202,252.785079 260.655798,230.849701 260.655798,202.560947 C260.655798,174.577103 284.647269,152.198414 314.569558,152.198414 Z M221.191404,152.807038 C232.293048,152.807038 242.451462,156.418802 250.944635,163.479831 L240.609981,176.340655 C235.465019,170.859895 230.599394,168.547945 224.682615,168.547945 C216.169885,168.547936 209.970327,173.154235 209.970327,179.215049 C209.970327,184.413218 213.450798,187.164422 225.302356,191.332621 C247.768529,199.141028 254.426462,206.064868 254.426462,221.354473 C254.426462,239.986821 240.026981,252.955721 219.503077,252.955721 C204.47426,252.955721 193.548154,247.330452 184.44824,234.636213 L197.205529,222.956624 C201.754702,231.315341 209.342452,235.792799 218.763144,235.792799 C227.573971,235.792799 234.097058,230.014421 234.097058,222.217168 C234.097058,218.175392 232.121269,214.709536 228.175702,212.259183 C226.189231,211.099073 222.254519,209.369382 214.522615,206.777734 C195.973058,200.43062 189.609,193.646221 189.609,180.386799 C189.609,164.636126 203.275981,152.807038 221.191404,152.807038 Z M446.886269,154.485036 L468.460788,154.485036 L495.464615,219.130417 L522.815885,154.485036 L544.22701,154.485036 L500.482644,253.198414 L489.855019,253.198414 L446.886269,154.485036 Z M64.8212135,154.632923 L93.811974,154.632923 C125.842394,154.632923 148.170827,174.418596 148.170827,202.822609 C148.170827,216.985567 141.340038,230.679389 129.788913,239.766893 C120.068962,247.437722 108.994192,250.877669 93.6598558,250.877669 L64.8212135,250.877669 L64.8212135,154.632923 Z M157.25849,154.632923 L177.009462,154.632923 L177.009462,250.877669 L157.25849,250.877669 L157.25849,154.632923 Z M553.156923,154.632923 L609.168423,154.632923 L609.168423,170.940741 L572.892875,170.940741 L572.892875,192.303392 L607.831279,192.303392 L607.831279,208.603619 L572.892875,208.603619 L572.892875,234.583122 L609.168423,234.583122 L609.168423,250.877669 L553.156923,250.877669 L553.156923,154.632923 Z M622.250596,154.632923 L651.534327,154.632923 C674.313452,154.632923 687.366663,165.030007 687.366663,183.048838 C687.366663,197.784414 679.179923,207.454847 664.302885,210.332805 L696.176385,250.877669 L671.888144,250.877669 L644.551904,212.213673 L641.977163,212.213673 L641.977163,250.877669 L622.250596,250.877669 L622.250596,154.632923 Z M641.977163,169.791736 L641.977163,198.939525 L647.748269,198.939525 C660.360308,198.939525 667.044769,193.734406 667.044769,184.05942 C667.044769,174.693052 660.359106,169.791736 648.060019,169.791736 L641.977163,169.791736 Z M84.5571663,170.940741 L84.5571663,234.583122 L89.8568962,234.583122 C102.619538,234.583122 110.679663,232.259105 116.885144,226.934514 C123.71575,221.152572 127.824519,211.920423 127.824519,202.684197 C127.824519,193.462833 123.71575,184.505917 116.885144,178.723975 C110.361615,173.113074 102.619538,170.940741 89.8568962,170.940741 L84.5571663,170.940741 Z"
                            id="Shape" fill="#FFFFFF"></path>
						<path
                            d="M399.164288,151.559424 C428.914452,151.559424 453.031096,173.727429 453.031096,201.112187 L453.031096,201.143399 C453.031096,228.528147 428.914452,250.727374 399.164288,250.727374 C369.414125,250.727374 345.297481,228.528147 345.297481,201.143399 L345.297481,201.112187 C345.297481,173.727429 369.414125,151.559424 399.164288,151.559424 Z M749.982612,271.093939 C724.934651,288.327133 537.408564,411.490963 212.719237,470.985071 L697.105507,470.985071 C726.303228,470.985071 749.982612,447.830504 749.982612,419.274807 L749.982612,271.093939 Z"
                            id="Shape" fill="#F47216"></path>
					</g>
				</g>
			</svg>
		</span>
                                            <span>Discover</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree1" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">SHIPPING OPTIONS</h2>
                                </button>
                            </h2>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                                 data-bs-parent="#accordionExample1">
                                <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    <div>
                                        <ul style="list-style:none;padding:0;display:flex;flex-wrap:wrap;margin-bottom:20px;flex-grow:1;border-bottom: 1px solid #ccc;line-height: 24px;">
                                            <li style="display:flex;flex-wrap:wrap;flex-grow:1;padding-bottom:20px;font-weight:500;flex-basis:100%;">
                                                <div style="display:flex;width:100%;justify-content:space-between;">
                                                    <div style="line-height:20px">Belgium</div>
                                                    <div style="line-height:24px;">Free above €75</div>
                                                </div>
                                                <div style="width:100%;font-style:italic;"></div>
                                                <div style="font:italic normal 14px/20px brandon_grotesque;">Delivers Tuesday-Saturday</div>
                                            </li>
                                        </ul>
                                        <p style="margin-bottom: 30px;font-size:16px;line-height:24px;">Please allow up to two business days to process all orders. Orders are processed Monday through Friday, excluding Saturday, Sunday and holidays.</p>
                                        <p style="margin-bottom: 30px;font-size:16px;line-height:24px;">Some exceptions may apply to Pre-orders, Back-orders and Home products.</p>
                                        <p style="font-size:16px;line-height:24px;">
                                            Please contact us by phone at 1.844.WTF.GOOP or email at
                                            <a href="mailto:customerservice@goop.com" style="font-weight:bold;">customerservice@goop.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

@endsection
