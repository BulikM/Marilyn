@extends('layouts.frontend')
@section('content')

<div class="container-fluid p-0">
    @if (session('alert'))
        <x-alert :type="session('alert')['type']" :message="session('alert')['message']">
            <x-slot name="title">Users</x-slot>
        </x-alert>
    @endif
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
                <div class="carousel-inner carousel-4 Items_container mb-5 px-md-5">
                    @foreach($new_products as $key=>$product)

                        <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center px-md-2 gap-md-5">
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
                <div class="d-none d-lg-block">
                <button class="pijl-bg carousel-control-prev" type="button" data-bs-target="#newCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="pijl-bg carousel-control-next" type="button" data-bs-target="#newCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
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
                <button class="nav-link text-dark text-dark emilXf dUTcMc BUVMf" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" aria-label="The 2022 goop Gift Guides" value="">Products we love</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <!--		eerste tab-->
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <div id="skin" class="dotscarousel carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        @foreach($products_skin as $key=>$skin)
                            <button type="button" data-bs-target="#skin" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}" aria-current="true" aria-label="Slide 1"></button>
                        @endforeach
                    </div>

                    <div class="m-lg-5">
                    <div class="carousel-inner carousel4 Items_container mb-5">
                        @foreach($products_skin as $key=>$skin)

                            <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center">
                                <div class="card h-auto">
                                    <div class="img">
                                        <a href="{{route('product.show', $skin->slug)}}">
                                            @foreach($skin->images as $key=>$image)
                                                @if($loop->first)
                                                    <img alt="{{$product->name}}"
                                                         class="card-img-top rounded-0"
                                                         src="{{$image->file ? $image->file : "/assets/img.png"}}">
                                                @endif
                                                @if($loop->last)
                                                    <img alt="{{$skin->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="hover_img card-img-top rounded-0">
                                                @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-g1">{{$skin->id}}</p>
                                        @foreach($skin->brand as $brand)
                                            <p class="text-g1">{{$brand->name}}</p>
                                            <a class="nav-link" href="{{route('productsPerBrand',$brand->slug)}}">{{$skin->name}}</a>
                                        @endforeach
                                        <p class="text-g3">€ {{$skin->price}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    </div>
                    <div class="d-none d-lg-block">
                    <button class="pijl-bg carousel-control-prev" type="button" data-bs-target="#skin" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="pijl-bg carousel-control-next" type="button" data-bs-target="#skin" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>


            </div>
            <!--		tweede tab-->
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <!--				carousel-->
                <div id="random" class="dotscarousel carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        @foreach($products_love as $key=>$love)
                            <button type="button" data-bs-target="#random" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}" aria-current="true" aria-label="Slide 1"></button>
                        @endforeach
                    </div>

                    <div class="m-lg-5">
                        <div class="carousel-inner carousel2 Items_container mb-5">
                            @foreach($products_love as $key=>$love)

                                <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center">
                                    <div class="card h-auto">
                                        <div class="img">
                                            <a href="{{route('product.show', $love->slug)}}">
                                                @foreach($love->images as $key=>$image)
                                                    @if($loop->first)
                                                        <img alt="{{$love->name}}"
                                                             class="card-img-top rounded-0"
                                                             src="{{$image->file ? $image->file : "/assets/img.png"}}">
                                                    @endif
                                                    @if($loop->last)
                                                        <img alt="{{$love->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="hover_img card-img-top rounded-0">
                                                    @endif
                                                @endforeach
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-g1">{{$love->id}}</p>
                                            @foreach($love->brand as $brand)
                                                <p class="text-g1">{{$brand->name}}</p>
                                                <a class="nav-link" href="{{route('productsPerBrand',$brand->slug)}}">{{$love->name}}</a>
                                            @endforeach
                                            <p class="text-g3">€ {{$love->price}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="pijl-bg carousel-control-prev" type="button" data-bs-target="#random" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="pijl-bg carousel-control-next" type="button" data-bs-target="#random" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
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
                    <a href="{{route('productsPerSubCategory', 'marilyn-skin-care')}}">
                    <button type="button" class="btn btn-outline-light text-uppercase btn-lg px-5 rounded-0 ">Read more</button></a>
                </div>
            </article>


         <article id="more_new">
             <h2 class="dUTcMc BUVMf mt-lg-5 ms-lg-5 ps-1 text-decoration-underline">More New Products</h2>
             <div id="newCarousel2" class="dotscarousel carousel slide" data-bs-ride="false">
                 <div class="carousel-indicators">
                     @foreach($new_products as $key=>$new)
                         <button type="button" data-bs-target="#newCarousel2" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}" aria-current="true" aria-label="Slide 1"></button>
                     @endforeach
                 </div>
                 <div class="carousel-inner carousel-3 Items_container mb-5 px-md-5">
                     @foreach($new_products as $key=>$product)

                         <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center px-md-2 gap-md-5">
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
                 <div class="d-none d-lg-block">
                     <button class="pijl-bg carousel-control-prev" type="button" data-bs-target="#newCarousel2" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="pijl-bg carousel-control-next" type="button" data-bs-target="#newCarousel2" data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                     </button>
                 </div>
             </div>
         </article>

        </div>
    </section>

    <section id="FeaturedShops" class="row align-items-center justify-content-evenly max-width-1140 m-auto p-0">

        <article class="p-0">
            <div class="iCoAmh" title="000000-featuredshop-02-tablet">
                <a href="{{route('occasion')}}">
                <img alt="000000-featuredshop-02-desktop" src="https://goop-img.com/wp-content/uploads/2023/05/000000-featuredShop-02-desktop.jpg" srcset="" class="col-12 col-lg-6 ps-lg-3 p-3 p-lg-0 float-start jkexpC">
                </a>
            </div>
            <a href="{{route('occasion')}}">
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
@section('scripts')
    <script>
    let items4 = document.querySelectorAll('.carousel4 .carousel-item')

    items4.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
    if (!next) {
    // wrap carousel by using first child
    next = items[0]
    }
    let cloneChild = next.cloneNode(true)
    el.appendChild(cloneChild.children[0])
    next = next.nextElementSibling
    }
    })
    </script>
    <script>
        let items2 = document.querySelectorAll('.carousel2 .carousel-item')

        items2.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    <script>
        let items3 = document.querySelectorAll('.carousel-3 .carousel-item')

        items3.forEach((el) => {
            const minPerSlide = 3
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
@endsection
