@extends('layouts.frontend')
@section('content')

<div class="container-fluid p-0">
    <div class="row justify-content-center max-width-1680 m-auto p-0">
        <a href="{{route('getaway')}}" class="col p-0 max-width-1680">
            <img src="https://goop-img.com/cdn-cgi/image/height=1120,width=3360,dpr=1,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2023/06/230623-primaryHero-desktop-1-scaled.jpg" alt="230623-primaryhero-desktop-1" srcset="https://goop-img.com/cdn-cgi/image/height=1120,width=3360,dpr=1,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2023/06/230623-primaryHero-desktop-1-scaled.jpg 3360w,
  https://goop-img.com/cdn-cgi/image/height=1120,width=3360,dpr=2,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2023/06/230623-primaryHero-desktop-1-scaled.jpg 6720w,
  https://goop-img.com/cdn-cgi/image/height=1120,width=3360,dpr=3,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2023/06/230623-primaryHero-desktop-1-scaled.jpg 10080w" class="hero">
        </a>
    </div>
</div>

<!--main-->
<main class="container-fluid p-0">

    <section id="NewArrivals" class="row p-0 max-width-1680 m-auto">
        <article class="col-12 p-0 my-4">
            <div class="text-start text-lg-center mt-5 mb-4">
                <h2 class="text-gTitel"> <span>{{$new_total}}</span> New Arrivals</h2>
                <p class="text-gOnderTitel">Just dropped and yours to explore</p>
            </div>
        </article>

        <!--new carousel-->
        <article class="col-12 p-0">

            <div id="newCarousel" class="dotscarousel carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    @foreach($new_products as $key=>$new)
                    <button type="button" data-bs-target="#newCarousel" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}" aria-current="true" aria-label="Slide 1"></button>
                    @endforeach
                </div>
                <div class="carousel-inner carousel-4 Items_container mb-5 px-5">
                    @foreach($new_products as $key=>$product)

                        <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center gap-5" style="padding-left: 24px; padding-right: 24px">
                            <div class="card h-auto">
                                <div class="img">
                                    <a href="{{route('product.show', $product->slug)}}">
                                        @foreach($product->images as $key=>$image)
                                            @if($loop->first)
                                                <img alt="{{$product->name}}"
                                                     class="card-img-top rounded-0"
                                                     src="{{$image->file ? $image->file : "/assets/img.png"}}">
                                            @endif
                                            @if($loop->last)
                                                <img alt="{{$product->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="hover_img card-img-top rounded-0">
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="text-g1">{{$product->id}}</p>
                                    @foreach($product->brand as $brand)
                                    <p class="text-g1">{{$brand->name}}</p>
                                    <a class="nav-link" href="{{route('productsPerBrand',$brand->slug)}}">{{$product->name}}</a>
                                    @endforeach
                                    <p class="text-g3">€ {{$product->price}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="pijl-bg carousel-control-prev" type="button" data-bs-target="#newCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="pijl-bg carousel-control-next" type="button" data-bs-target="#newCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </article>

        <!--	btn new arrivals-->
        <article CLASS="text-center">
            <a href="{{route('new')}}">
            <button type="button" class="btn btn-g btn-dark text-uppercase rounded-0 m-auto">Shop all {{$new_total}} new Arrivals</button></a>
        </article>
    </section>
    <!--Featured shops-->
    <section id="featured_shops"  class="d-flex justify-content-evenly align-items-center mt-5">
        <article class="row-col-12 p-0 bg-grey max-width-1680">
            <div class="featured">
                <h2 class="col-12 p-0 text-start ps-4 p-lg-0 text-lg-center text-gTitel" >Featured Shops</h2>
                <!--			uitlijnen kaartjes-->
                <div class="row justify-content-evenly align-items-center text-center gap-lg-4 gap-1 m-0">
                    <!--				kaart 1-->
                    <div class="card col-lg col-5 p-0">
                        <div class="img-hover-zoom">
                            <a href="{{route('productsPerCategory', 'beauty')}}" aria-label="the best of beauty" class=" jwslkU"><div class="knzUub"><div class="LazyImagestyles__Wrapper-sc-1pcwm2t-0 hMTCLb" title="the best of beauty" src=""><img alt="the best of beauty" src="https://goop-img.com/cdn-cgi/image/height=570,width=475,dpr=1,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2022/04/test-img-1.jpeg" srcset="" class="card-img-top border-0"></div></div></a>
                        </div>
                        <div class="card-body bg-grey d-none d-lg-block">
                            <a href="{{route('productsPerCategory', 'beauty')}}" class="text-gTitelkl text-nowrap">the best of beauty</a><p class="d-none d-lg-block text-g4">Shop the bestselling, clean beauty products on goop right here.</p>
                            <a href="{{route('productsPerCategory', 'beauty')}}" data-analytics-name="" aria-label="shop the best of beauty" class="d-none d-lg-block text-gTitelkl"> <u> SHOP NOW </u></a>
                        </div>
                        <div class="d-lg-none py-2"><a href="{{route('productsPerCategory', 'beauty')}}" class="text-uppercase">the best of beauty</a>
                        </div>
                    </div>
                    <!--				kaart2-->
                    <div class="card col-5 col-lg p-0">
                        <div class="card-body bg-grey d-none d-lg-block">
                            <div class="coHMnP"><a href="{{route('productsPerCategory', 'wellness')}}" class="text-uppercase">the best of wellness</a><p class="FeaturedShopCardstyles__Caption-uxmj2s-5 ilfhFT">These are the wellness products—from superpowered supplements to sex toys to silky essential oils—we want for ourselves.</p><a href="{{route('productsPerCategory', 'wellness')}}" data-analytics-name="" aria-label="shop the best of wellness" class=" fABAeT dhpxAK">SHOP NOW</a></div>
                        </div>

                        <div class="img-hover-zoom">
                            <a href="{{route('productsPerCategory', 'wellness')}}" aria-label="the best of wellness" class=" fVDhfm"><div class=" knzUub"><div class=" hMTCLb" title="the best of wellness" src=""><img alt="the best of wellness" src="https://goop-img.com/cdn-cgi/image/height=570,width=475,dpr=1,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2022/06/72.jpeg" srcset="" class="card-img-bottom border-0"></div></div></a>
                        </div>
                        <div class="d-lg-none py-2"><a href="{{route('productsPerCategory', 'wellness')}}" class="text-uppercase">the best of wellness</a>
                        </div>
                    </div>


                    <!--					kaart3-->
                    <div class="card col-5 col-lg p-0">
                        <div class="img-hover-zoom">
                            <a href="https://goop.com/goop-exclusives/c/" aria-label="exclusive to goop" class="FeaturedShopCardstyles__WrapperLink-uxmj2s-1 jwslkU"><div class="FeaturedShopCardstyles__StyledImageWrapper-uxmj2s-2 knzUub"><div class="LazyImagestyles__Wrapper-sc-1pcwm2t-0 hMTCLb" title="exclusive to goop" src=""><img alt="exclusive to goop" src="https://goop-img.com/cdn-cgi/image/height=570,width=475,dpr=1,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2022/04/4_11.jpg" srcset="" class="card-img-top border-0"></div></div></a>
                        </div>
                        <div class="card-body bg-grey d-none d-lg-block">
                            <div class="coHMnP">
                                <a href="{{route('productsPerCategory', 'wellness')}}">exclusive to goop</a>
                                <p class="ilfhFT">Clothing, clean beauty, and life-bettering tools you’ll only find here.</p>
                                <a href="{{route('productsPerCategory', 'wellness')}}" data-analytics-name="" aria-label="shop the best of beauty" class="d-none d-lg-block text-gTitelkl"> <u> SHOP NOW </u></a>
                            </div>
                        </div>
                        <div class="d-lg-none py-2"><a href="https://goop.com/goop-exclusives/c/" class="text-uppercase">exclusive to goop</a></div>
                    </div>
                    <!--				kaart 4-->
                    <div class="card col-5 col-lg p-0">
                        <div class="card-body bg-grey d-none d-lg-block">
                            <div class="coHMnP">
                                <a href="{{route('productsPerSubCategory', 'sex-toys')}}" class="text-uppercase">the pleasure shop</a>
                                <p class="FeaturedShopCardstyles__Caption-uxmj2s-5 ilfhFT">Vibrators, couples’ sets, toys, lubes, and more—for pleasure.</p>
                                <a href="{{route('productsPerSubCategory', 'sex-toys')}}" data-analytics-name="" aria-label="shop the best of beauty" class="d-none d-lg-block text-gTitelkl"> <u> SHOP NOW </u>
                                </a>
                            </div>
                        </div>

                        <div class="img-hover-zoom">
                            <a href="{{route('productsPerSubCategory', 'sex-toys')}}" aria-label="the pleasure shop" class=" fVDhfm">
                                <div class=" knzUub">
                                    <div class=" hMTCLb" title="the pleasure shop" >
                                        <img alt="the pleasure shop" src="https://goop-img.com/cdn-cgi/image/height=570,width=475,dpr=1,format=auto,onerror=redirect,metadata=copyright/wp-content/uploads/2022/04/7_2-1.jpg" srcset="" class="card-img-bottom border-0">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-lg-none py-2"><a href="{{route('productsPerSubCategory', 'sex-toys')}}" class="text-uppercase">the pleasure shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <!--	Products we love-->
    <!--tab-->
    <section id="Products_we_love" class="m-auto max-width-1680 p-0">
        <ul class="nav nav-tabs max-width-1140 m-auto" id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <button class="nav-link active text-dark emilXf dUTcMc BUVMf" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" aria-label="Gwyneth's Gift List" value="">Clean skin care</button>
            </li>
            <div class="separator opacity-25 mx-3"></div>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark text-dark emilXf dUTcMc BUVMf" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" aria-label="The 2022 goop Gift Guides" value="">The 2022 goop Gift Guides</button>
            </li>
        </ul>


        <div id="skin" class="dotscarousel carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                @foreach($new_products as $key=>$new)
                    <button type="button" data-bs-target="#skin" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}" aria-current="true" aria-label="Slide 1"></button>
                @endforeach
            </div>

            <div class="carousel-inner Items_container mb-5 px-5">
                @foreach($new_products as $key=>$product)

                    <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center gap-5" style="padding-left: 24px; padding-right: 24px">
                        <div class="card h-auto">
                            <div class="img">
                                <a href="{{route('product.show', $product->slug)}}">
                                    @foreach($product->images as $key=>$image)
                                        @if($loop->first)
                                            <img alt="{{$product->name}}"
                                                 class="card-img-top rounded-0"
                                                 src="{{$image->file ? $image->file : "/assets/img.png"}}">
                                        @endif
                                        @if($loop->last)
                                            <img alt="{{$product->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="hover_img card-img-top rounded-0">
                                        @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="card-body">
                                <p class="text-g1">{{$product->id}}</p>
                                @foreach($product->brand as $brand)
                                    <p class="text-g1">{{$brand->name}}</p>
                                    <a class="nav-link" href="{{route('productsPerBrand',$brand->slug)}}">{{$product->name}}</a>
                                @endforeach
                                <p class="text-g3">€ {{$product->price}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="pijl-bg carousel-control-prev" type="button" data-bs-target="#skin" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="pijl-bg carousel-control-next" type="button" data-bs-target="#skin" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

{{--        <div class="tab-content" id="myTabContent">--}}
{{--            <!--		eerste tab-->--}}
{{--            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">--}}



{{--            </div>--}}
{{--            <!--		tweede tab-->--}}
{{--            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">--}}
{{--                <!--				carousel-->--}}
{{--                <div id="carouselExampleIndicators3" class="carousel slide dotscarousel" data-bs-ride="false">--}}
{{--                    <div class="carousel-indicators">--}}
{{--                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                    </div>--}}
{{--                    <div class="carousel-inner Items_container">--}}
{{--                        <div class="carousel-item active">--}}
{{--                            <!--							eerste carousel-->--}}
{{--                            <!--									eerste card-->--}}
{{--                            <div class="d-flex justify-content-evenly mb-4 pb-5">--}}
{{--                                <div class="card flex-column">--}}
{{--                                    <span class="text-end">New</span>--}}
{{--                                    <img alt="Dr. Barbara Sturm The Serum House" src="https://shop.goop-img.com/spree/images/attachments/000/083/475/large/open-uri20221013-13527-ustlxo?version=1665687700" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Dr. Barbara Sturm</span>--}}
{{--                                            <a href="https://goop.com/dr-barbara-sturm-the-serum-house/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">The Serum House</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $470.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--										tweede card-->--}}
{{--                                <div class="card">--}}
{{--                                    <span class="ProductListCardstyles__Badge-g09iyn-13 jisFkc">Exclusive</span>--}}
{{--                                    <img alt="LYMA LYMA Laser Starter Kit" src="https://shop.goop-img.com/spree/images/attachments/000/080/110/large/open-uri20220708-31495-1lt0yp0?version=1657297496" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">LYMA</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/lyma-lyma-laser-starter-kit/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">LYMA Laser Starter Kit</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $2,700.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--											derde card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="Caddis Hooper Glasses" src="https://shop.goop-img.com/spree/images/attachments/000/083/684/large/open-uri20221019-14-ytvs5d?version=1666208981" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Caddis</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/caddis-hooper-glasses/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Hooper Glasses</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $105.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--												vierde card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="LUXTON Down Jumpsuit No. 2.1" src="https://shop.goop-img.com/spree/images/attachments/000/083/723/large/open-uri20221019-10-8x2svw?version=1666209864" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">LUXTON</span><a href="https://goop.com/luxton-down-jumpsuit-no-2-1/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Down Jumpsuit No. 2.1</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $1,295.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--							einde inhoud eerste carousel-->--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <!--							tweed carousel-->--}}
{{--                            <!--									eerste card-->--}}
{{--                            <div class="d-flex justify-content-evenly mb-4 pb-5">--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="Moonsisters Moon Calendar 2023" src="https://shop.goop-img.com/spree/images/attachments/000/084/256/large/open-uri20221026-23-aqv0lx?version=1666759672" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Moonsisters</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/moonsisters-moon-calendar-2023/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Moon Calendar 2023</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $39.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--										tweede card-->--}}
{{--                                <div class="card" >--}}
{{--                                    <img alt="Loftie Loftie Lamp" src="https://shop.goop-img.com/spree/images/attachments/000/083/019/large/open-uri20221006-12930-cc4i73?version=1665081436" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Loftie</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/loftie-lamp/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Loftie Lamp</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $275.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--											derde card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="Ven Store Essential Cashmere Travel Set" src="https://shop.goop-img.com/spree/images/attachments/000/083/804/large/open-uri20221019-10-6mnahr?version=1666211420" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Ven Store</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/ven-store-essential-cashmere-travel-set/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Essential Cashmere Travel Set</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $500.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--												vierde card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="Toteme Signature Monogram Silk Scarf" src="https://shop.goop-img.com/spree/images/attachments/000/083/795/large/open-uri20221019-32193-op0275?version=1666211239" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Toteme</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/toteme-signature-monogram-silk-scarf/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Signature Monogram Silk Scarf</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $220.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--						einde tweede carousel-->--}}
{{--                        <div class="carousel-item">--}}
{{--                            <!--							derde carousel-->--}}
{{--                            <!--									eerste card-->--}}
{{--                            <div class="d-flex justify-content-evenly mb-4 pb-5">--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="POJ Studio DIY Incense Kit" src="https://shop.goop-img.com/spree/images/attachments/000/073/082/large/open-uri20211022-14612-91h1t2?version=1634927516" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">POJ Studio</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/poj-studio-diy-incense-kit/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">DIY Incense Kit</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $52.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--										tweede card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="J. Hannah Nail Polish Set" src="https://shop.goop-img.com/spree/images/attachments/000/084/248/large/open-uri20221026-14-10v4uvp?version=1666759175" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">J. Hannah</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/j-hannah-nail-polish-set/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Nail Polish Set</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $56.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--											derde card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="Ga.Ma. Italy Professional IQ Perfetto Hair Dryer" src="https://shop.goop-img.com/spree/images/attachments/000/071/938/large/open-uri20211008-14033-1d5bnp7?version=1633729599" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Ga.Ma. Italy Professional</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/ga-ma-italy-professional-iq-perfetto/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">IQ Perfetto Hair Dryer</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $399.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!--												vierde card-->--}}
{{--                                <div class="card">--}}
{{--                                    <img alt="Dr. Dennis Gross DRx SpectraLite™ FaceWare Pro" src="https://shop.goop-img.com/spree/images/attachments/000/084/343/large/open-uri20221026-31981-179f60w?version=1666808127" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Dr. Dennis Gross</span>--}}
{{--                                            <br>--}}
{{--                                            <a href="https://goop.com/dr-dennis-gross-drx-spectralite-faceware-pro/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">DRx SpectraLite™ FaceWare Pro</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $435.00</span></div></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--							einde inhoud eerste carousel-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--				pijltjes naast carousel-->--}}
{{--                    <button class="carousel-control-prev pijl" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Previous</span>--}}
{{--                    </button>--}}
{{--                    <button class="carousel-control-next pijl" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Next</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!--	shop all button-->
        <div class="text-center">
            <button class="text-uppercase btn btn-dark rounded-0">SHOP ALL</button>
            <!--		<a class=" Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 emilXf dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ TabbedCarouselstyles__StyledPrimaryButton-sc-1tp24iz-6 fDgAOr" data-cta="Shop All" data-link="https://goop.com/holiday-gift-guide/c/" href="https://goop.com/holiday-gift-guide/c/">  Shop All</a>-->
        </div>
    </section>
    <!--		From the editors-->
    <!--	foto-->
    <section id="from the editors" class="row-col-12 p-0 max-width-1680 m-auto">
        <div class="max-width-1680 px-0 m-auto">
            <article class="col-12 text-center my-5 p-0">
                <h2 class="text-gTitel">From the Editors</h2>
                <p class="text-gOnderTitel">Your beaty, wellness, food and travel questions answered.</p>
            </article>
            <article class="d-flex gift max-width-1680 justify-content-center align-items-center p-0 m-auto" style="background-image: url('https://goop-img.com/wp-content/uploads/2023/06/230623-featuredEdit-desktop-1-scaled.jpg')">
                <div class="text-center max-width-1680">
                    <h2 class="text-white">10 Steps for a Sun-kissed glow (no sun required)</h2>
                    <a href="{{route('productsPerSubCategory', 'marilyn-skin-care')}}"></a>
                    <button type="button" class="btn btn-outline-light text-uppercase btn-lg px-5 rounded-0 ">Read more</button>
                </div>
            </article>
            <article class="bg-grey max-width-1680 p-0 m-auto pijlGImage">
                <ul class="nav max-width-1140 m-auto " id="myTab2" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-dark bg-grey btn-g" id="home-tab2" data-bs-toggle="tab" data-bs-target="#home-tab2-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" aria-label="Gwyneth's Gift List" value="">The 2022 goop Gift Guides</button>
                    </li>
                </ul>

                <div class="tab-content p-0 max-width-1680" id="myTabContent2">
                    <!--		eerste tab-->
                    <div class="tab-pane fade show active" id="home-tab-pane1" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                        <!--				carousel-->
                        <div id="carouselExampleIndicators4" class="carousel slide dotscarousel" data-bs-ride="false">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner bg-grey mb-4 pb-5">
                                <div class="carousel-item active">
                                    <!--							eerste carousel-->
                                    <!--									eerste card-->
                                    <div class="row row-cols-4 m-auto justify-content-evenly">
                                        <div class="card col bg-grey">
                                            <img alt="Clementina Sketchbook Hand-Painted Stationery, Set of 10" src="https://shop.goop-img.com/spree/images/attachments/000/083/472/large/open-uri20221013-14-15hjjo8?version=1665687630" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <p class="text-g1">Clementina Sketchbook</p>
                                            <a  class="text-g2" href="https://goop.com/clementina-sketchbook-hand-painted-stationery-set-of-10/p/" >Hand-Painted Stationery, Set of 10</a>
                                            <p  class="text-g3">US $75.00</p>
                                        </div>
                                        <!--										tweede card-->
                                        <div class="card col bg-grey">
                                            <img alt="Cody Foster &amp; Co. Caviar Ornament" src="https://shop.goop-img.com/spree/images/attachments/000/084/231/large/open-uri20221026-10-nrtd8b?version=1666758281" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft">
                                                <span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Cody Foster &amp; Co.</span>
                                                <br>
                                                <a href="https://goop.com/cody-foster-co-caviar-ornament/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Caviar Ornament</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $25.00</span></div></div>
                                        </div>
                                        <!--											derde card-->
                                        <div class="card col bg-grey">
                                            <img alt="Augustinus Bader The Winter Recovery Kit" src="https://shop.goop-img.com/spree/images/attachments/000/082/879/large/open-uri20221005-22232-vxa94b?version=1665000532" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Augustinus Bader</span>
                                                <br>
                                                <a href="https://goop.com/augustinus-bader-the-winter-recovery-kit/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">The Winter Recovery Kit</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $575.00</span></div></div>
                                        </div>
                                        <!--												vierde card-->
                                        <div class="card col bg-grey">
                                            <img alt="goop x Heretic This Smells Like My Vagina Candle" src="https://shop.goop-img.com/spree/images/attachments/000/062/322/large/open-uri20201104-21194-17ggzjo?version=1604522908" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="card-body">
                                                <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">goop x Heretic</span>
                                                    <br>
                                                    <a href="https://goop.com/heretic-this-smells-like-my-vagina-candle/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">This Smells Like My Vagina Candle</a><div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $75.00</span></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--							einde inhoud eerste carousel-->
                                </div>
                                <div class="carousel-item">
                                    <!--							tweed carousel-->
                                    <!--									eerste card-->
                                    <div class="row row-cols-4 m-auto justify-content-evenly">
                                        <div class="card col bg-grey">
                                            <<img alt="G. Label by goop Bloomer Cable-Knit Poncho" src="https://shop.goop-img.com/spree/images/attachments/000/082/463/large/open-uri20220922-20575-8i8yp3?version=1663865647" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft">
                                                <span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Proxies</span>
                                                <a href="https://goop.com/proxies-nonalcoholic-wine-tasting-set/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Nonalcoholic Wine Tasting Set</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn">
                                                    <span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $94.00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!--										tweede card-->
                                        <div class="card col bg-grey">
                                            <img alt="Proxies Nonalcoholic Wine Tasting Set" src="https://shop.goop-img.com/spree/images/attachments/000/083/118/large/open-uri20221006-12696-1cltjat?version=1665089844" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft">
                                                <span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Proxies</span>
                                                <a href="https://goop.com/proxies-nonalcoholic-wine-tasting-set/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Nonalcoholic Wine Tasting Set</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn">
																	<span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">
																		US $94.00
																	</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--											derde card-->
                                        <div class="card col bg-grey">
                                            <img alt="Reflections Copenhagen Mayfair Short Crystal Glass, Set of 2" src="https://shop.goop-img.com/spree/images/attachments/000/083/489/large/open-uri20221013-13627-1u6xu00?version=1665687982" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft">
																<span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">Reflections Copenhagen
																</span>
                                                <br>
                                                <a href="https://goop.com/reflections-copenhagen-mayfair-short-crystal-glass-set-of-2/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Mayfair Short Crystal Glass, Set of 2</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn">
																	<span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $650.00
																	</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--												vierde card-->
                                        <div class="card col bg-grey">
                                            <img alt="La DoubleJ Madras Ornaments, Set of 3" src="https://shop.goop-img.com/spree/images/attachments/000/084/512/large/open-uri20221101-25-bry5xf?version=1667332889" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span class="ProductListCardstyles__Brand-g09iyn-4 text-g1">La DoubleJ</span>
                                                <br>
                                                <a href="https://goop.com/la-doublej-madras-ornaments-set-of-3/p/" class="ProductListCardstyles__Title-g09iyn-11 text-g2">Madras Ornaments, Set of 3
                                                </a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn">
															<span class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu text-g3">US $140.00
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--						einde tweede carousel-->
                                <!--				pijltjes naast carousel-->
                                <button class="carousel-control-prev pijl" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next pijl" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </article>




            <!--	new /expert q&a's tabs -->
            <article class="py-5 px-0 row m-auto max-width-1680">
                <ul class="nav nav-tabs max-width-1140 m-auto p-3 p-lg-0" id="myTab3" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active text-dark text-uppercase" id="home-tab3" data-bs-toggle="tab" data-bs-target="#home-tab-pane3" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true" aria-label="Gwyneth's Gift List" value="">NEW</button>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-dark border-0" id="profile-tab3" data-bs-toggle="tab" data-bs-target="#profile-tab-pane3" type="button" role="tab" aria-controls="profile-tab-pane3" aria-selected="false" aria-label="The 2022 goop Gift Guides" value="">EXPERT Q&A'S</button>
                    </li>
                </ul>
                <!--		tab inhoud New-->

                <div class="tab-content container max-width-1680 p-0" id="myTabContent3">
                    <div class="tab-pane fade show active" id="home-tab-pane3" role="tabpanel" aria-labelledby="home-tab3" tabindex="0">
                        <!--				mobiel-->


                        <!--			pc	carousel-->

                        <div id="carouselExampleIndicators5" class="carousel dotscarousel slide max-width-1680 m-auto d-none d-lg-block" data-bs-ride="false">

                            <!--					carousel bolletjes-->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <!--					carousel container-->
                            <div class="carousel-inner Items_container">

                                <!--						eerste carousel-->

                                <div class="carousel-item active">
                                    <!--							eerste carousel-->

                                    <!--									eerste card-->

                                    <div class="row max-width-1140 m-auto">

                                        <div class="card col">
                                            <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/hero-2-1-1024x773.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="card-body d-flex flex-column">
                                                <span class="text-g1">Beauty</span>
                                                <a href="https://goop.com/travel/experiences/costa-rican-spa-vacation-at-hacienda-altagracia-auberge/" class="text-g2">A Weekend Spa Vacation in the Misty Costa Rican Mountains</a><span class="text-g3">They say it takes a whole week to fully unwind on vacation, but clearly “they” have never spent a weekend at Hacienda AltaGracia, a spa hotel high in the Talamanca Mountains of Costa Rica. There are stunningly designed casitas, jungle hikes, yoga sessions, artisanal cocktails, incredible organic food, and a next-level spa from The Well (with chakra-clearing massages and maderoterapia, to name a few treatments), which put you in fully unwound territory pretty much instantly.</span>
                                            </div>
                                        </div>

                                        <!--										tweede card-->
                                        <div class="card col">
                                            <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Tongue-Vibrators_TRU3237449-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="card-body d-flex flex-column">
                                                <p class="text-g1">Wellness</p>
                                                <a href="https://goop.com/wellness/sexual-health/best-tongue-vibrators/" class="text-g2">4 Tongue Vibrators That Mimic Oral Sex</a><p class="text-g3">Today’s sex toys do so much more than vibrate against your body—including a whole category of tongue vibrators that lick, swirl, and suck like a talented lover.</p>
                                            </div>
                                        </div>
                                        <!--											derde card-->

                                        <div class="card col">
                                            <img alt="" src="https://goop-img.com/wp-content/uploads/2022/07/How-to-Slow-Down-Time_Brian-Chorski-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                            <div class="card-body">
                                                <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span>
                                                    <br>
                                                    <a href="https://goop.com/wellness/mindfulness/how-to-slow-down-time/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">How to Slow Down Time</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Researchers are still uncovering how time is processed in the brain. But our perception of time is just that: our perception. You can play with ways to speed up time in the dullest moments—and slow it down when you want a moment to last.</span></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!--						tweede ccarousel-->

                                <div class="carousel-item">
                                    <!--							tweed carousel-->
                                    <div class="m-auto max-width-1140">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2017/11/Stuffing-waffle-min-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Recipe</span>
                                                            <br>
                                                            <a href="https://goop.com/recipes/stuffing-waffle/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">The Stuffing Waffle</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Stuffing in a waffle iron might sound a little out-there, but when you crunch through those delightfully crispy corners, you’ll understand. (This would be a perfect breakfast with a fried egg and leftover gravy sidecar.) Because no two leftover stuffings are the same, add stock as needed until you get a nice moist mixture. </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--										tweede card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Beauty-Editor-House-Tour-Jean-Godfrey-June’s-Clean-WFH-Routine-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span>
                                                            <br>
                                                            <a href="https://goop.com/beauty/skin/goop-beauty-director-jean-godfrey-june-clean-routine/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Beauty Editor House Tour: Jean Godfrey-June’s Clean WFH Routine</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">If it’s clean and at all beauty-related, she’s tried it. As a result Jean Godfrey-June’s house (and garden, believe it or not) is peppered with beauty products, from beloved essentials to new discoveries.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--											derde card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2021/12/My-Morning-Routine-Win-the-Day-First-Thing-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span>
                                                            <br>
                                                            <a href="https://goop.com/beauty/hair/michelle-ranavat-morning-routine/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Win the Day First Thing</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">She makes one of the most gorgeous hair serums—and now, the most stunning shampoo and conditioner—we’ve ever tried (the shine! the texture! the scent!), so we weren’t surprised that Michelle Ranavat’s hair looks especially lush, healthy, and shiny. She also makes skin care, as it turns out, and her exquisite complexion is a testament to that. Her morning routine emphasizes early-in-the-a.m. triumphs, the power of ritual, and next-level skin- and hair-care ingredients like bakuchiol, saffron, turmeric, and ashwagandha.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--							derde carousel-->

                                <div class="carousel-item">
                                    <div class="m-auto max-width-1140">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/New-Balance-How-One-Stylist-Wears-Her-Favorite-Sneakers-1-1024x782.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Style</span>
                                                            <br>
                                                            <a href="https://goop.com/style/outfitting-ideas/how-one-stylist-wears-her-favorite-sneakers/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">How One Stylist Wears Her Favorite Sneakers</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Becky Malinsky, personal stylist and former deputy fashion director at the Wall Street Journal’s Off Duty section, shares four looks featuring her favorite New Balance styles.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--										tweede card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/hero-4-1024x782.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy">
                                                            <br>
                                                            <span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Style</span><a href="https://goop.com/style/gift-guides/best-jewelry-gifts/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">33 Jewelry Gifts for Everyone on Your List</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Jewelry gifts are personal, lasting, and pretty much always well-received—plus, who doesn’t get excited by a teeny box under the tree?</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--											derde card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2021/11/A-Cozy-Winter-Dinner-Menu_20211022_EDITORIAL_FOOD_COZY_SHOT-03_319_CROPPED-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Food &amp; Home</span>
                                                            <br>
                                                            <a href="https://goop.com/food/recipes/cozy-winter-dinner-menu/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">A Cozy Winter Dinner Party Menu</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Pan-roasted chicken with mushrooms and thyme, creamy potato-cauli mash, and a tender kale salad showered with lemony bread crumbs. It’s both comforting and packed with veggies, deluxe yet easy to prepare.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--										vierde carousel-->

                                <div class="carousel-item">
                                    <!--							tweed carousel-->
                                    <div class="m-auto max-width-1140">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/3-1-1024x782.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span>
                                                            <br>
                                                            <a href="https://goop.com/beauty/skin/goopgenes-clean-nourishing-lip-balm-trio-new-colors/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Chic New Balm Colors—Wear Them Everywhere</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">We reimagined our bestselling clean lip balm trio in new colors—one clear, one a translucent pink-nude, and the other a sheer bright red. With their silky texture, exquisite pigments, and nourishing ingredients, these balms are the ultimate luxury for lips.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--										tweede card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/How-to-Pick-an-Effective-Exfoliating-Cleanser_20211201_EDITORIAL_BEAUTY_GOOPGLOW_JELLY_CLEANSER_476-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span>
                                                            <br>
                                                            <a href="https://goop.com/beauty/skin/how-to-pick-an-exfoliating-cleanser/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">How to Pick the Best Exfoliating Cleanser for Your Skin</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Adding a bit of exfoliation into your daily cleanse delivers serious benefits for almost every type of skin, helping to soften, clear, brighten, and smooth—day by day.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--											derde card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/08/Goop-Holiday_Editorial-Select_058-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Style</span>
                                                            <br>
                                                            <a href="https://goop.com/style/gift-guides/gwyneth-reveals-how-we-bring-gift-guide-to-life/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Gwyneth’s Version of the North Pole</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">A behind-the-scenes look at our unconventional holiday workshop.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--									vijfde carousel-->

                                <div class="carousel-item">
                                    <!--							tweed carousel-->
                                    <div class="m-auto max-width-1140">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Can-Bondage-Help-You-Understand-Your-Sexual-Boundaries_TLP-NAMA-0079-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span>
                                                            <br>
                                                            <a href="https://goop.com/wellness/sexual-health/bdsm-boundaries-and-consent/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Can Bondage Help You Understand Your Sexual Boundaries?</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Liz Goldwyn, author of Sex, Health &amp; Consciousness, discusses bondage as a tool for understanding and voicing our sexual boundaries.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--										tweede card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Droplette-ad-unit-slot-A-New-High-Tech-Skin-Trick-for-Winter-Glow-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span><a href="https://goop.com/beauty/skin/a-high-tech-skin-trick-for-glowing-skin/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">A New High-Tech Skin Trick for Winter Glow</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Walk out the door in the morning with skin that’s fresh, plumped with moisture, and glowing and you move through the entire day differently. The secret is layering your skin care so it really sinks in; now a brilliant at-home device called Droplette makes it easier than ever to see radiant results.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--											derde card-->
                                            <div class="col-4">
                                                <div class="card w-100">
                                                    <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Stutz_00_03_12_17-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                    <div class="card-body">
                                                        <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Podcast</span><a href="https://goop.com/the-goop-podcast/gwyneth-paltrow-x-phil-stutz-the-power-of-small-things" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Gwyneth Paltrow x Phil Stutz: The Power of Small Things</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">“Non-attachment says I can go for this thing, I can work as hard as I want to on it, but I’m also willing not to have it,” says legendary psychiatrist Phil Stutz. Stutz is known for his visualization exercises (called the tools) which he uses to help people overcome blocks to create lasting change. He joins GP to talk about why the tools work and how to tap into the invisible forces that collectively and individually move us forward. (After listening to this episode, be sure to watch Stutz, a new Netflix documentary directed by Jonah Hill about Stutz’s work.)</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--									einde carousels-->
                            </div>
                            <!--				pijltjes naast carousel-->
                            <button class="carousel-control-prev pijl" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next pijl" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!--		tweede tab-->
                    <div class="tab-pane fade" id="profile-tab-pane3" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div id="carouselExampleIndicators6" class="carousel dotscarousel slide max-width-1680 m-auto" data-bs-ride="false">
                            <!--					carousel bolletjes-->
                            <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <!--					carousel container-->
                        <div class="carousel-inner Items_container">

                            <!--						eerste carousel-->

                            <div class="carousel-item active">
                                <!--							eerste carousel-->
                                <div class="row row-cols-3 max-width-1140">
                                    <!--									eerste card-->
                                    <div class="card col">
                                        <img alt="" src="https://goop-img.com/wp-content/uploads/2021/06/Bringing-Your-Hormones-into-Alignment_Stocksy_txp14c69cc8eX6300_Medium_3107569-1.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span>
                                                <br>
                                                <a href="https://goop.com/wellness/health/hormone-intelligence-interview/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Bringing Your Hormones into Alignment</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Doctor, herbalist, and midwife Aviva Romm, MD, describes the menstrual cycle as our sixth vital sign: The length of our cycles, the heaviness of our flows, and the signs and symptoms that pop up along the way can all tell us something about the state of our hormonal health.</span></div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card col">
                                        <img alt="" src="https://goop-img.com/wp-content/uploads/2020/06/ear-seeds-hi-res-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span>
                                                <br>
                                                <a href="https://goop.com/wellness/health/ear-seeds/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Ear Seeds for Easy, At-Home Acupressure</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Ear seeds are teeny gold beads that are placed at different points on the ear to support overall well-being. They look almost like a constellation of small earrings. And they’re something you can apply at home. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card col">
                                        <img alt="" src="https://goop-img.com/wp-content/uploads/2022/07/Can-Your-Marriage-Bounce-Back-from-Financial-Infidelity_Stocksy_txp9ab387b9GrS300_Medium_3393522-1-1-1024x781.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span>
                                                <br>
                                                <a href="https://goop.com/wellness/relationships/financial-infidelity/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Can Your Marriage Bounce Back from Financial Infidelity?</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Like sexual or emotional cheating, financial infidelity can sink a relationship. But if each partner is willing to put in the work, they can often heal—as well as resolve the underlying issues that paved the way for it in the first place. Financial psychology specialist Alex Melkumian, PsyD, LMFT, works with couples when one partner’s financial behavior has crossed a line.</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--						tweede ccarousel-->

                            <div class="carousel-item">
                                <!--							tweed carousel-->
                                <div class="m-auto max-width-1140">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/06/Hiatal-Hernia_Stocksy_txpe4316c90M6S300_Medium_3662167-1-1024x781.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span><a href="https://goop.com/wellness/health/what-is-hiatal-hernia/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Symptoms of a Mild Hiatal Hernia—and How to Treat It</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Functional medicine practitioner Vikki Petersen explains mild hiatal hernias and their cascading array of symptoms, like acid reflux, difficulty breathing, and heart palpitations.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--										tweede card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/06/image-34-1024x781.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span><a href="https://goop.com/wellness/career-money/getting-more-out-of-digital-note-taking/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Getting More Out of Digital Note-Taking</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Productivity expert and author of Building a Second Brain Tiago Forte explains his approach to managing the vast amount of content that we consume every day.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--											derde card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/06/EMDR-QA_Stocksy_txpfca25760gsR300_Medium_3719069-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span><a href="https://goop.com/wellness/mindfulness/what-is-emdr-therapy/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">What Is EMDR Therapy?</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">EMDR therapy has gained increasing popularity, 35 years after it was developed by Francine Shapiro, PhD, for the treatment of post-traumatic stress disorder. Licensed psychotherapist Luz Kyncl discusses how she uses EMDR therapy in her practice.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--							derde carousel-->

                            <div class="carousel-item">
                                <div class="m-auto max-width-1140">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/06/Recognizing-Postpartum-Depression-in-Dads_Stocksy_txp75e9a6879Uy100_Medium_1969044-1-1024x781.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span><a href="https://goop.com/wellness/parenthood/postpartum-depression-in-men/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Recognizing Postpartum Depression in Dads</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">There isn’t a clear set of diagnostic criteria for dads experiencing major mental health shifts after the birth of their baby. But Alan-Michael Graves, EdD, who heads up learning and capacity building programs at Good+ Foundation in Los Angeles, says he sees new fathers struggling in silence with unrecognized postpartum depression.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--										tweede card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/05/Fertility-QA-with-Dr.-Bendikson-KindBody_jamiestreetphotography_katya-5-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span><a href="https://goop.com/wellness/health/at-home-fertility-test-results/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">What Can an At-Home Fertility Test Tell You?</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Reproductive endocrinologist Kristin Bendikson, MD, talks fertility and explains why it’s important to take a holistic approach to reproductive health and family planning.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--											derde card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/05/Connecting-Trans-Youth-with-Gender-Affirming-Medical-Care-Stocksy_txp7a053c66NfP300_Medium_4388644-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span><a href="https://goop.com/wellness/health/gender-affirming-care-for-trans-youth/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Connecting Trans Youth with Gender-Affirming Medical Care</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Medical care for trans and nonbinary people isn’t rocket science, says Izzy Lowell, MD, who specializes in transgender medicine. But a dearth of gender-affirming, accessible health care threatens their long-term well-being.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--										vierde carousel-->

                            <div class="carousel-item">

                                <div class="m-auto max-width-1140">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/3-1-1024x782.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span>
                                                        <br>
                                                        <a href="https://goop.com/beauty/skin/goopgenes-clean-nourishing-lip-balm-trio-new-colors/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Chic New Balm Colors—Wear Them Everywhere</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">We reimagined our bestselling clean lip balm trio in new colors—one clear, one a translucent pink-nude, and the other a sheer bright red. With their silky texture, exquisite pigments, and nourishing ingredients, these balms are the ultimate luxury for lips.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--										tweede card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/How-to-Pick-an-Effective-Exfoliating-Cleanser_20211201_EDITORIAL_BEAUTY_GOOPGLOW_JELLY_CLEANSER_476-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span>
                                                        <br>
                                                        <a href="https://goop.com/beauty/skin/how-to-pick-an-exfoliating-cleanser/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">How to Pick the Best Exfoliating Cleanser for Your Skin</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Adding a bit of exfoliation into your daily cleanse delivers serious benefits for almost every type of skin, helping to soften, clear, brighten, and smooth—day by day.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--											derde card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/08/Goop-Holiday_Editorial-Select_058-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Style</span>
                                                        <br>
                                                        <a href="https://goop.com/style/gift-guides/gwyneth-reveals-how-we-bring-gift-guide-to-life/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Gwyneth’s Version of the North Pole</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">A behind-the-scenes look at our unconventional holiday workshop.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--									vijfde carousel-->

                            <div class="carousel-item">
                                <!--							tweed carousel-->
                                <div class="m-auto max-width-1140">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Can-Bondage-Help-You-Understand-Your-Sexual-Boundaries_TLP-NAMA-0079-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Wellness</span>
                                                        <br>
                                                        <a href="https://goop.com/wellness/sexual-health/bdsm-boundaries-and-consent/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Can Bondage Help You Understand Your Sexual Boundaries?</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Liz Goldwyn, author of Sex, Health &amp; Consciousness, discusses bondage as a tool for understanding and voicing our sexual boundaries.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--										tweede card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Droplette-ad-unit-slot-A-New-High-Tech-Skin-Trick-for-Winter-Glow-1-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Beauty</span><a href="https://goop.com/beauty/skin/a-high-tech-skin-trick-for-glowing-skin/" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">A New High-Tech Skin Trick for Winter Glow</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">Walk out the door in the morning with skin that’s fresh, plumped with moisture, and glowing and you move through the entire day differently. The secret is layering your skin care so it really sinks in; now a brilliant at-home device called Droplette makes it easier than ever to see radiant results.</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--											derde card-->
                                        <div class="col-4">
                                            <div class="card w-100">
                                                <img alt="" src="https://goop-img.com/wp-content/uploads/2022/11/Stutz_00_03_12_17-1024x780.jpg" srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                                <div class="card-body">
                                                    <div class="ContentCardstyles__TextWrapper-sc-1u4zv99-9 eETzzy"><span class="ContentCardstyles__Category-sc-1u4zv99-4 pNwqG">Podcast</span><a href="https://goop.com/the-goop-podcast/gwyneth-paltrow-x-phil-stutz-the-power-of-small-things" class="ContentCardstyles__Title-sc-1u4zv99-5 gSiZQX">Gwyneth Paltrow x Phil Stutz: The Power of Small Things</a><span class="ContentCardstyles__Caption-sc-1u4zv99-6 cABIUA">“Non-attachment says I can go for this thing, I can work as hard as I want to on it, but I’m also willing not to have it,” says legendary psychiatrist Phil Stutz. Stutz is known for his visualization exercises (called the tools) which he uses to help people overcome blocks to create lasting change. He joins GP to talk about why the tools work and how to tap into the invisible forces that collectively and individually move us forward. (After listening to this episode, be sure to watch Stutz, a new Netflix documentary directed by Jonah Hill about Stutz’s work.)</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--									einde carousels-->
                        </div>
                        <!--				pijltjes naast carousel-->
                        <button class="carousel-control-prev pijl" type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next pijl" type="button" data-bs-target="#carouselExampleIndicators6" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </article>
            <!--		10% off-->
            <article class="bg-grey d-flex justify-content-center align-items-center mb-lg-4">
                <div class="col-9 max-width-1140 m-3">
                    <div class="justify-content-center m-auto row">
                        <div class="col-3" >
                            <p>Enjoy 10% off your first purchase</p>
                            <p>when you subscribe to our newsletter</p>
                        </div>
                        <div class="col-5">
                            <div class="input-group">
                                <input id="subscribe" type="text" class="form-control" placeholder="Your Email" aria-label="Username" aria-describedby="basic-addon1">
                                <button class="btn btn-dark border-0">SUBSCRIBE NOW</button>
                            </div>
                        </div>
                        <div class="col-3">
                            <p>By clicking 'submit', you agree to receive emails from goop and accept our <a target="_blank" href="https://goop.com/web-terms-of-use/" style="color:#858585;">web terms</a> of use and <a target="_blank" href="https://goop.com/privacy-cookies-policy/" style="color:#858585;"> privacy</a>and <a target="_blank" href="https://goop.com/privacy-cookies-policy/" style="color:#858585;">cookie policy</a>. &ast;<a target="_blank" href="https://goop.com/subscription-terms-conditions/" style="color:#858585;">Terms apply*</a>.</p>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </section>

    <section id="FeaturedShops" class="row align-items-center justify-content-evenly max-width-1140 m-auto p-0">

        <article class="p-0">
            <div class="LazyImagestyles__Wrapper-sc-1pcwm2t-0 iCoAmh" title="000000-featuredshop-02-tablet" src="https://goop-img.com/wp-content/uploads/2023/05/000000-featuredShop-02-desktop.jpg"><img alt="000000-featuredshop-02-desktop" src="https://goop-img.com/wp-content/uploads/2023/05/000000-featuredShop-02-desktop.jpg" srcset="" class="col-12 col-lg-6 ps-lg-3 p-3 p-lg-0 float-start jkexpC"></div>
            <a href="{{route('getaway')}}">
            <img alt="000000-featuredshop-01-desktop" src="https://goop-img.com/wp-content/uploads/2023/05/000000-featuredShop-01-desktop.jpg" srcset="" class="col-12 col-lg-6 ps-lg-3 p-3 p-lg-0 float-end jkexpC"></a>


        </article>
    </section>

    <section id="Discover" class="d-flex flex-column align-items-lg-center justify-content-lg-center text-start p-0 m-0">

        <article class="max-width-1140 text-lg-center ps-3 p-lg-0 row">
            <div class="text-start styles__StyledHeader-sc-1i7onw4-0 gzZwdw Homestyles__CategoryCarouselHeader-sc-1v1uqy-2 gWWWgY"><h1 class=" gcByNx">Read. Shop. Discover.</h1><p class="fnukYw"></p></div>
        </article>

        <!--			mobile-->
        <article class="row d-lg-none">
            <div class="scrollmenu d-flex ps-4 row-cols-8">
                <a class="col-8 p-1" href="#">
                    <div class="card" >
                        <div class="filter">
                            <img alt="beauty" src="https://goop-img.com/wp-content/uploads/2021/04/beauty.jpg" srcset="" class="card-img">
                        </div>
                        <p class="centered text-uppercase space-3 text-title text-gl">BEAUTY</p>
                    </div>
                </a>
                <a class="col-8 p-1" href="#">
                    <div class="card">
                        <div class="filter">
                            <img alt="food &amp; home" src="https://goop-img.com/wp-content/uploads/2021/04/food.jpg" srcset="" class="card-img">
                        </div>
                        <p class="centered text-uppercase space-3 text-title text-gl">FOOD & HOME</p>
                    </div>
                </a>
                <a class="col-8 p-1" href="#">
                    <div class="card">
                        <div class="filter">
                            <img alt="wellness" src="https://goop-img.com/wp-content/uploads/2021/04/wellness.jpg" srcset="" class="card-img">
                        </div>
                        <p class="centered text-uppercase space-3 text-title text-gl">WELLNESS</p>
                    </div>
                </a>
                <a class="col-8 p-1" href="#">
                    <div class="card">
                        <div class="filter">
                            <img alt="style" src="https://goop-img.com/wp-content/uploads/2022/04/style.jpg" srcset="" class="card-img">
                        </div>
                        <div class="centered text-uppercase space-3 text-title text-gl">STYLE</div>
                    </div>
                </a>
                <a class="col-8 p-1" href="#">
                    <div class="card">
                        <div class="filter">
                            <img alt="travel" src="https://goop-img.com/wp-content/uploads/2021/04/travel.jpg" srcset="" class="card-img">
                        </div>
                        <div class="centered text-uppercase space-3 text-title text-gl">TRAVEL</div>
                    </div>
                </a>
            </div>
        </article>

        <!--			pc-->
        <article class="row p-0 d-none d-lg-block">
            <div class="d-flex align-items-center justify-content-evenly gap-lg-4">
                <div class="d-flex max-width-1140 p-0 gap-3">
                    <div class="card col">
                        <div class="filter">
                            <img alt="beauty" src="https://goop-img.com/wp-content/uploads/2021/04/beauty.jpg" srcset="" class="card-img">
                        </div>
                        <p class="centered text-uppercase space-3 text-title text-gl">BEAUTY</p>
                    </div>
                    <div class="card col">
                        <div class="filter">
                            <img alt="food &amp; home" src="https://goop-img.com/wp-content/uploads/2021/04/food.jpg" srcset="" class="card-img">
                        </div>
                        <p class="centered text-uppercase space-3 text-title text-gl">FOOD & HOME</p>
                    </div>
                    <div class="card col">
                        <div class="filter">
                            <img alt="wellness" src="https://goop-img.com/wp-content/uploads/2021/04/wellness.jpg" srcset="" class="card-img">
                        </div>
                        <p class="centered text-uppercase space-3 text-title text-gl">WELLNESS</p>
                    </div>
                    <div class="card col">
                        <div class="filter">
                            <img alt="style" src="https://goop-img.com/wp-content/uploads/2022/04/style.jpg" srcset="" class="card-img">
                        </div>
                        <div class="centered text-uppercase space-3 text-title text-gl">STYLE</div>
                    </div>
                    <div class="card col">
                        <div class="filter">
                            <img alt="travel" src="https://goop-img.com/wp-content/uploads/2021/04/travel.jpg" srcset="" class="card-img">
                        </div>
                        <div class="centered text-uppercase space-3 text-title text-gl">TRAVEL</div>
                    </div>
                </div>
            </div>
        </article>

    </section>

    <section id="follow" class="mt-5">
        <!--		mobile-->
        <div id="carouselExampleControls" class="carousel slide  d-lg-none" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://www.instagram.com/goop/">
                        <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly p-2" style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/David-Maisel-Aerial-Photographs-4-2.png)">
                            <i class="bi bi-instagram">&#64; GOOP</i>
                            <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                            <link rel="stylesheet" href="https://www.instagram.com/goop/">
                            <p class="text-uppercase text-gl">follow us</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.instagram.com/goop/">
                        <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly p-2" style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/GOOP-1_Page_17-1.png)">
                            <i class="bi bi-instagram">	&#64;GOOP</i>
                            <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                            <link rel="stylesheet" href="https://www.instagram.com/goop/">
                            <p class="text-uppercase text-gl">follow us</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://www.instagram.com/goop/">
                        <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly p-2" style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/GOOP-1_Page_17-2.png)">
                            <i class="bi bi-instagram">	&#64;GOOP</i>
                            <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                            <link rel="stylesheet" href="https://www.instagram.com/goop/">
                            <p class="text-uppercase text-gl">follow us</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="carousel-indicators">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--		pc-->
        <article class="row p-0 m-0 d-none d-lg-block">
            <div class="vw-100 d-flex m-0 p-0">
                <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly ps-2 p-4" style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/David-Maisel-Aerial-Photographs-4-2.png)">
                    <i class="bi bi-instagram">	&#64;GOOP</i>
                    <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                    <link rel="stylesheet" href="https://www.instagram.com/goop/">
                    <a href="https://www.instagram.com/goop/" class="text-uppercase link-light">follow us</a>
                </div>
                <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly ps-2 p-4" style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/David-Maisel-Aerial-Photographs-4-4.png)">
                    <i class="bi bi-instagram">	&#64;GOOP</i>
                    <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                    <link rel="stylesheet" href="https://www.instagram.com/goop/">
                    <a href="https://www.instagram.com/goop/" class="text-uppercase link-light">follow us</a>
                </div>
                <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly ps-2 p-4" style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/GOOP-1_Page_17-1.png)">
                    <i class="bi bi-instagram">	&#64;GOOP</i>
                    <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                    <link rel="stylesheet" href="https://www.instagram.com/goop/">
                    <a href="https://www.instagram.com/goop/" class="text-uppercase link-light">follow us</a>
                </div>
                <div class="w-100 h-100 text-gl d-flex flex-column justify-content-evenly p-2 p-4"style="background-image: url(https://goop-img.com/wp-content/uploads/2021/02/GOOP-1_Page_17-2.png)">
                    <i class="bi bi-instagram">	&#64;GOOP</i>
                    <p>Exclusive workouts, office hours with expert, recipes and more.</p>
                    <link rel="stylesheet" href="https://www.instagram.com/goop/">
                    <a href="https://www.instagram.com/goop/" class="text-uppercase link-light">follow us</a>
                </div>
            </div>
        </article>
    </section>
</main>



@endsection
