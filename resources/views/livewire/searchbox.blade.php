<div>
    {{-- Be like water. --}}
<div class="card bg-danger">
    <p>test</p>
    <p>test</p>
</div>


{{--    @foreach($products as $product)--}}
{{--        <div class="card col ejylGK">--}}
{{--            <a href="{{route('product.show', $product->slug)}}">--}}
{{--                <div class="carousel slide dotscarouselproduct carouselproductsgsm" data-bs-ride="false"--}}
{{--                     id="carouselproductsgsm3">--}}

{{--                    <div class="carousel-inner p-lg-2 pb-5">--}}
{{--                        @foreach($product->images as $key=>$image)--}}
{{--                            <div class="carousel-item {{$key == 0 ? 'active': ''}} img">--}}
{{--                                @foreach($product->images as $subimage)--}}
{{--                                    @if($loop->first)--}}
{{--                                        <img alt="{{$product->name}}"--}}
{{--                                             class="d-block w-100"--}}
{{--                                             src="{{$subimage->file ? $subimage->file : "/assets/img.png"}}">--}}
{{--                                    @endif--}}
{{--                                    @if($loop->last)--}}
{{--                                        <img alt="{{$product->name}}" class=" w-100 hover_img" src="{{$subimage->file ? $subimage->file : "/assets/img.png"}}">@endif--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}

{{--                    <div class="carousel-indicators d-lg-none">--}}
{{--                        @foreach($product->images as $key=>$image)--}}
{{--                            <button aria-current="true" aria-label="Slide 1" class="{{$key == 0 ? 'active': ''}}" data-bs-slide-to="{{$key}}" data-bs-target="#carouselproductsgsm3" type="button"></button>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class=" kxzyWr">--}}
{{--                        @foreach($product->brand as $brand)--}}
{{--                            <a href="{{route('productsPerBrand', $brand->slug)}}">--}}
{{--                                <span class=" bRYfZP">{{$brand->name}}</span>--}}
{{--                            </a>--}}
{{--                        @endforeach--}}
{{--                        <a class="dNoHTw"--}}
{{--                           data-acsb-clickable="true" data-acsb-navigable="true"--}}
{{--                           data-acsb-now-navigable="true"--}}
{{--                           href="{{route('product.show', $product->slug)}}">’{{$product->name}}--}}
{{--                            Jeans</a>--}}
{{--                        <div class="gMRwgT"><span--}}
{{--                                class="jdPKXS NTnhi">€{{$product->price}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <span class="cKUVkS">{{Str::limit($product->description,45)}}</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    @endforeach--}}
</div>
