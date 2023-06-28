@extends('layouts.frontend')

@section('content')
    <main class="container-fluid">
        <div class="row py-lg-3">
            <section class="col-12 col-lg-7 pb-5 order-1 order-lg-0">
                @if (session('alert'))
                    <x-alert :type="session('alert')['type']" :message="session('alert')['message']">
                        <x-slot name="title">Users</x-slot>
                    </x-alert>
                @endif
                <!--			carousel gsm-->
                <article id="carouselExampleDarkgsm" class="carousel carousel-dark slide col-10 offset-1 p-3 d-lg-none"
                         data-bs-ride="false">

                    <div class="carousel-inner mb-4">

                        @foreach($product->images as $key=>$image)
                            <div class="carousel-item {{$key == 0 ? 'active':'' }}">
                                <img alt="{{$product->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="d-block w-100">
                            </div>
                        @endforeach
                    </div>
                    <!--				previeuw gsm-->
                    <div class="carousel-indicators previewgsm d-flex justify-content-evenly m-auto px-3">
                        <div class="imggsm d-flex justify-content-evenly mb-5">
                            @foreach($product->images as $key=>$image)
                                <img data-bs-target="#carouselExampleDarkgsm" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}"
                                     aria-current="true" aria-label="Slide 1" alt="{{$product->name}}"
                                     src="{{$image->file ? $image->file : "/assets/img.png"}}">
                            @endforeach
                        </div>
                    </div>
                    <button class="pijl carousel-control-prev" type="button" data-bs-target="#carouselExampleDarkgsm"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="pijl carousel-control-next" type="button" data-bs-target="#carouselExampleDarkgsm"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </article>

                <!--detail laptop-->
                <article id="detail" class="d-none d-lg-block px-lg-5 vh-100 ">
                    <!--			carousel laptop-->
                    <article id="carouselExampleDark" class="carousel carousel-dark slide rechts" data-bs-ride="false">
                        <div class="carousel-inner mb-4">

                            @foreach($product->images as $key=>$image)
                                <div class="carousel-item {{$key == 0 ? 'active':'' }}">
                                    <img alt="{{$product->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="d-block w-100">
                                </div>
                            @endforeach
                        </div>

                        <!--				previeuw laptaop-->
                        <div
                            class="carousel-indicators previewLG d-flex flex-column justify-content-evenly row links col-2">
                            <div class="imglg d-flex col-12 flex-column justify-content-evenly">
                                @foreach($product->images as $key=>$image)
                                    <img data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$key}}" class="{{ $key == 0 ? 'active':'' }}"
                                         aria-current="true" aria-label="Slide 1" alt="{{$product->name}}"
                                         src="{{$image->file ? $image->file : "/assets/img.png"}}">
                                @endforeach

                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bigArrow" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon bigArrow" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </article>
                </article>
            </section>

            <!--				omschrijving laptop-->
            <section id="omschrijvingLg" class="col-12 col-lg-5  vh-100 order-0 order-lg-1 pt-3 pt-lg-1">
                <article class="text-start col-12 col-lg-11 offset-lg-1 p-0">
                    @foreach($product->brand as $brand)
                    <a href="{{route('productsPerBrand', $brand->slug)}}"
                       class=" p-0 T bLYPWY iICCXR  hwMBsm bYxLCt"
                       target="">{{$brand->name}}</a>
                        @endforeach
                    <h1 class=" p-0  jHuvxg fgVCbT">
                        {{$product->name}}</h1>
                    <div class="fDkzrM d-flex align-items-center">
                        <div class=" fBWBhP"><p
                                class=" iMOrFR">€ {{$product->price}}</p></div>
                        <span class=" dqISby">Free Shipping!</span></div>
                </article>
                <form method="POST"
                      action="{{route('addToCart', $product->id)}}"
                      enctype='multipart/form-data'>
                    @csrf
                    @method('POST')
                    <article class="text-start col-11 offset-1 bjaWAm">
                        <div>
                            <p class="kgeFzw">Select Options</p>
                            @foreach($product->brand as $brand)
                             <input type="hidden" name="brand" value="{{$brand->name}}">
                            @endforeach
                            @foreach($product->color as $color)
                            <p class="ddqQTz text-uppercase">Color<span class="text-capitalize jMqIvg">
                                     <input type="hidden" name="color" value="{{$color->name}}">{{$color->name}}</span></p>
                            @endforeach
                            <div class=" gOPwLh">
                                <!--						size-->
                                @foreach($product->sizes as $size)

                                        <input type="checkbox" class="btn-check p-5" value="{{$size->id}}" name="sizes[]" id="size{{$size->id}}" autocomplete="off" @checked(in_array($size->id, old('sizes', [])))>
                                        <label class="button btn-outline-purple fs-2 p-2 px-3  border border-1" for="size{{$size->id}}">{{$size->name}}</label><br>

                                @endforeach
                            </div>
                        </div>


                                <label for="quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width: 100px">
                                    <button class="input-group-text bg-white rounded-0 decrement-btn">-</button>
                                    <input type="number" name="quantity" class="form-control text-center qty-input" value="1">
                                    <button class="input-group-text bg-white rounded-0 increment-btn">+</button>
                                </div>
                                @error('quantity')
                                    <span class="drwJIz">
                                      {{ $message }}
                                    </span>
                                @enderror

                    </article>
                    <div class="text-start col-11 offset-1 mt-3">
                        <div data-cy="add-to-btn-container"
                             class="hTTyJb">
                            <button type="submit" class="lgLNaJ jaXJCb cZinvQ">Add to bag</button>
                            <br>
                        </div>
                    </div>
                </form>
                <article class="text-start col-11 offset-1 mt-3">
                    <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample">
                        <div class="accordion-item border-start-0 border-end-0 ">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h2 class=" fYdWWG  ffPZmP">
                                        Product Details</h2>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF"><p>{{$product->description}}</p>
                                    <ul>
                                        <li>{{$product->info}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <h2 class="fYdWWG ffPZmP"
                                        role="heading" aria-level="2">About The Brand</h2>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    @foreach($product->brand as $brand)
                                        <div class="Drawerstyles__AdminHTML-sc-1c4yude-4">
                                                <p>{{$brand->description}}</p>
                                        </div>
                                        <span class="DTTpg">Browse more <a
                                                href="{{route('productsPerBrand', $brand->slug)}}"
                                                class="bLYPWY hwMBsm"
                                                target="" data-acsb-clickable="true" data-acsb-navigable="true"
                                                data-acsb-now-navigable="true" data-acsb-textual-ops="null">{{$brand->name}}</a>
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <h2 class=" fYdWWG  ffPZmP"
                                        role="heading" aria-level="2">Shipping &amp; Returns</h2>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse hmhmhU"
                                 aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Returns are accepted
                                    ​on this product <strong>within 30 days</strong> of receipt. Item must be returned
                                    unused, with tags, in its original packaging, along with a completed return
                                    form.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>

        <section id="tabbrand" class="row mt-5 p-0">
            <ul class="nav nav-tabs max-width-1140 m-auto p-0" id="myTab" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link active text-dark dUTcMc BUVMf" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true" aria-label="Gwyneth's Gift List" value="">More {{$brand->name}}
                    </button>

                </li>

            </ul>
            <div class="tab-content p-0" id="myTabContent">
                <!--		eerste tab-->
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="false">

                        <!--				carousel-->

                        @foreach($product->brand as $brand)
                            <div id="newCarousel" class="dotscarousel carousel slide" data-bs-ride="false">
                                <div class="carousel-inner carousel-4 Items_container mb-5 px-5">
                                    @foreach($brand->products as $key=>$more)

                                        <div class="carousel-item {{$key == 0 ? 'active':'' }} w-100 justify-content-center gap-5" style="padding-left: 24px; padding-right: 24px">
                                            <div class="card h-auto">
                                                <div class="img">
                                                    <a href="{{route('product.show', $more->slug)}}">
                                                        @foreach($more->images as $key=>$image)
                                                            @if($loop->first)
                                                                <img alt="{{$more->name}}"
                                                                     class="card-img-top rounded-0"
                                                                     src="{{$image->file ? $image->file : "/assets/img.png"}}">
                                                            @endif
                                                            @if($loop->last)
                                                                <img alt="{{$more->name}}" src="{{$image->file ? $image->file : "/assets/img.png"}}" class="hover_img card-img-top rounded-0">
                                                            @endif
                                                        @endforeach
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <p class="text-g1">{{$more->id}}</p>

                                                    <p class="text-g1">{{$brand->name}}</p>
                                                    <a class="nav-link" href="{{route('productsPerBrand',$brand->slug)}}">{{$more->name}}</a>

                                                    <p class="text-g3">€ {{$more->price}}</p>
                                                </div>
                                            </div>
                                            <!--							einde inhoud tweede carousel-->
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
                        @endforeach
                    </div>
                </div>
            </div>

        </section>
    </main>

@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
            $('.increment-btn').click(function (e){
                e.preventDefault();
                var inc_value =$('.qty-input').val();
                var value = parseInt(inc_value,10)
                value = isNaN(value) ? 1 : value;
                if(value < 10 )
                {
                    value++;
                    $('.qty-input').val(value);
                }
            });
            $('.decrement-btn').click(function (e){
                e.preventDefault();
                var inc_value =$('.qty-input').val();
                var value = parseInt(inc_value,0)
                value = isNaN(value) ? 1 : value;
                if(value > 1 )
                {
                    value--;
                    $('.qty-input').val(value);
                }
            });
        });
    </script>
@endsection
