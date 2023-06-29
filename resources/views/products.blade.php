@extends('layouts.frontend')
@section('content')
    <!--main-->

    @isset($title)
        <div class="px-5"><h1 class="line d-flex align-items-center title___1Ikv6">{{$title}}</h1></div>
    @endif
    @isset($hero)
        @livewire('searchbox', ['originalProducts'=> $products, 'products'=> $products, 'hero'=>$hero, 'brands'=>$brands, 'sizes'=>$sizes, 'colors'=>$colors])
    @else
        <!--	producten-->
        <section class="row row-cols-2 row-cols-lg-3 mt-5 dgWCVK">
            @foreach($products as $product)
                <div class="card col ejylGK">
                    <a href="{{route('product.show', $product->slug)}}">
                        <div class="carousel slide dotscarouselproduct carouselproductsgsm" data-bs-ride="false"
                             id="carouselproductsgsm3">

                            <div class="carousel-inner p-lg-2 pb-5">
                                @foreach($product->images as $key=>$image)
                                    <div class="carousel-item {{$key == 0 ? 'active': ''}} img">
                                        @foreach($product->images as $subimage)
                                            @if($loop->first)
                                                <img alt="{{$product->name}}"
                                                     class="d-block w-100"
                                                     src="{{$subimage->file ? $subimage->file : "/assets/img.png"}}">
                                            @endif
                                            @if($loop->last)
                                                <img alt="{{$product->name}}" class=" w-100 hover_img" src="{{$subimage->file ? $subimage->file : "/assets/img.png"}}">@endif
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                            <div class="carousel-indicators d-lg-none">
                                @foreach($product->images as $key=>$image)
                                    <button aria-current="true" aria-label="Slide 1" class="{{$key == 0 ? 'active': ''}}" data-bs-slide-to="{{$key}}" data-bs-target="#carouselproductsgsm3" type="button"></button>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <div class=" kxzyWr">
                                @foreach($product->brand as $brand)
                                    <a href="{{route('productsPerBrand', $brand->slug)}}">
                                        <span class=" bRYfZP">{{$brand->name}}</span>
                                    </a>
                                @endforeach
                                <a class="dNoHTw"
                                   data-acsb-clickable="true" data-acsb-navigable="true"
                                   data-acsb-now-navigable="true"
                                   href="{{route('product.show', $product->slug)}}">’{{$product->name}}
                                    Jeans</a>
                                <div class="gMRwgT"><span
                                        class="jdPKXS NTnhi">€{{$product->price}}</span>
                                </div>
                            </div>
                            <span class="cKUVkS">{{Str::limit($product->description,45)}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
        <!--    textbox onderaan-->
        <section class="OutlinedBoxstyles__Container-ut42sb-1 p-3 pb-lg-5 px-lg-3">
            <div class="OutlinedBoxstyles__TitleWrapper-ut42sb-2 jJgnlL"><h2
                    aria-level="1" class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG OutlinedBoxstyles__Title-ut42sb-3 bxYpsV"
                    role="heading">The Designer Dress Shop</h2></div>
            <p class="OutlinedBoxstyles__Description-ut42sb-4 hejtQp">The need for new dresses is directly correlated to the
                busyness of your social calendar, what with all the dinners, parties, and weddings you said you’d go to. But
                it’s not always about need—there are also days when you want put on a pretty dress, just because. We curated
                our dress shop for all the situations, with easy shifts for your day-to-day, occasion-worthy numbers, and
                everything in between.<br><br>

                Shop designer picks from the goop-favorite brands you know and love, plus the up-and-coming designers on our
                radar. For chic options that you can buy now and wear forever, may we suggest our <a
                    data-acsb-clickable="true" data-acsb-navigable="true" data-acsb-now-navigable="true"
                    data-acsb-tooltip="New Window" href="{{route('new')}}" target="_blank"><span
                        aria-hidden="false" aria-label=" New Window " class="acsb-sr-only"
                        data-acsb-force-visible="true" data-acsb-hidden="false" data-acsb-sr-only="true"></span>latest G.
                    Label
                    drop</a>?</p></section>
        <!--    scroll naar boven gsm-->
        <button aria-hidden="false"
                class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 emilXf dUTcMc BackToTopstyles__StyledButton-vbyh05-0 hfHwMs scrollBtn"
                data-acsb-clickable="true" data-acsb-hidden="false" data-acsb-navigable="true" data-acsb-now-navigable="true"
                data-analytics-name="back-to-top" role="button" type="button" value=""><span
                aria-hidden="false" aria-label=" back to top " class="acsb-sr-only" data-acsb-force-visible="true"
                data-acsb-hidden="false" data-acsb-sr-only="true"></span>
            <div class="styles__Arrow-z8r72s-0 cLYNbP BackToTopstyles__StyledArrow-vbyh05-1 nUGXJ" color="white"
                 direction="up"></div>
        </button>
    @endif

@endsection
