<div>
    {{-- Be like water. --}}

    <main class="container-fluid p-0">

        @isset($hero)
            @if($hero)
                <div class="px-5"><h1 class="line d-flex align-items-center title___1Ikv6">{{$hero->name}}</h1></div>
            @endif
            @if(!empty($hero->subcategories))
                <!--			option carousel-->

                    <section id="categories">

                        <div class="max-width-1680 m-auto carousel carousel-9 carousel-dark d-none d-lg-flex slide bg-grey"
                             data-bs-ride="false"
                             id="optionsCarousel">
                            <div class="carousel-inner px-4 overflow-visible" role="listbox">
                                @foreach($hero->subcategories as $key=>$sub)

                                    <div class="carousel-item {{$key == 0 ? 'active':'' }}">
                                        @if ($sub->children->count() == 0)
                                            <div class="w-100 bg-grey py-2 mx-3 text-nowrap">
                                                <div class="underline-carousel kWfyGM krKgn">
                                                    <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                                                       href="{{route('productsPerSubCategory', $sub->slug)}}">{{$sub->name}}</a>
                                                </div>
                                            </div>
                                        @else

                                            <div class="p-0 krKgn w-100">
                                                <div class="dropdown-center bg-grey py-2 text-nowrap">
                                                    <button aria-expanded="false"
                                                            class="dropdown-toggle-change ikrKgn kWfyGM underline-carousel"
                                                            data-bs-toggle="dropdown" type="button">
                                                        <span class="CollectionsNavstyles__CollectionTitle-sc-16wrtf8-4 dZeHdq"   href="{{route('productsPerSubCategory', $sub->slug)}}">{{$sub->name}}</span>

                                                    </button>

                                                    <ul class="CollectionsNavstyles__SubItems-sc-16wrtf8-5 WZQTr dropdown-menu shadow rounded-0 border-0 p-2">
                                                        @foreach($sub->children as $child)
                                                            <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                                                <p>
                                                                    <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"   href="{{route('productsPerSubCategory', $sub->slug)}}">{{$child->name}}</a>
                                                                </p>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev optionsCarousel-control-prev" data-bs-slide="prev" data-bs-target="#optionsCarousel" type="button">
                                <span aria-hidden="true" class="carousel-control-prev-icon optionsCarousel-control-prev-icon"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next optionsCarousel-control-next" data-bs-slide="next" data-bs-target="#optionsCarousel" type="button">
                                <span aria-hidden="true" class="carousel-control-next-icon optionsCarousel-control-next-icon"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </section>

                    <!--filter gsm-->
                    <section class="cffkFG d-lg-none" id="modalfiltersgsm">
                        <!-- Button trigger filters modal -->
                        <button class="eRdOTX lgLNaJ border-0" data-bs-target="#filtersmodal" data-bs-toggle="modal" type="button">
                            filters
                        </button>
                        <!-- Button trigger sort modal -->
                        <button class="eRdOTX lgLNaJ border-0" data-bs-target="#sortmodal" data-bs-toggle="modal" type="button">
                            sort
                        </button>
                        <!-- Modal filters -->
                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal" data-bs-backdrop="false"
                             id="filtersmodal"
                             tabindex="-1">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="row p-2 justify-content-between ps-3">
                                        <h2 class="col-6">Filters</h2>
                                        <button aria-label="Close" class="col-4 lgLNaJ gHNavB" data-bs-dismiss="modal" type="button">
                                            Done
                                        </button>
                                    </div>
                                    <div class="accordion accordion-flush accordionMulti" id="accordionfilters">
                                        <!--						brand-->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="filters-headingOne">
                                                <button aria-controls="filters-collapseOne" aria-expanded="false"
                                                        class="accordion-button collapsed cbGfCo dzbKSV"
                                                        data-bs-target="#filters-collapseOne"
                                                        data-bs-toggle="collapse" type="button">
                                                    Brand
                                                </button>
                                            </h2>
                                            <div aria-labelledby="filters-headingOne" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionfilters" id="filters-collapseOne">
                                                <div class="input-group p-3  m-auto">
                                                    <input aria-describedby="addon-wrapping" aria-label="Username" class="form-control"
                                                           id="findABrandmodal" placeholder="Find a brand"
                                                           type="text">
                                                    <span class="input-group-text bg-white border-start-0" id="addon-wrappingmodal1"><i
                                                            class="bi text-dark bi-search"></i></span>
                                                </div>
                                                <ul class="p-4">
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col d-flex justify-content-start jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                    <li class="col jrrhLu">
                                                        <input aria-label="Checkbox for following text input"
                                                               class="form-check-input mt-0" type="checkbox"
                                                               value="">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="filters-headingTwo">
                                                <button aria-controls="filters-collapseTwo" aria-expanded="false"
                                                        class="accordion-button collapsed cbGfCo dzbKSV"
                                                        data-bs-target="#filters-collapseTwo"
                                                        data-bs-toggle="collapse" type="button">
                                                    Color
                                                </button>
                                            </h2>
                                            <!--							color-->
                                            <div aria-labelledby="filters-headingTwo" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionfilters" id="filters-collapseTwo">
                                                <div class="accordion-body">
                                                    <div class="input-group p-3">
                                                        <input aria-describedby="addon-wrapping" aria-label="Username"
                                                               class="form-control"
                                                               id="findABrandmodal2" placeholder="Find a color"
                                                               type="text">
                                                        <span class="input-group-text bg-white border-start-0"
                                                              id="addon-wrappingmodal2"><i class="bi text-dark bi-search"></i></span>
                                                    </div>
                                                    <ul class="p-4">
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="filters-headingThree">
                                                <button aria-controls="filters-collapseThree" aria-expanded="false"
                                                        class="accordion-button collapsed cbGfCo dzbKSV"
                                                        data-bs-target="#filters-collapseThree"
                                                        data-bs-toggle="collapse" type="button">
                                                    size
                                                </button>
                                            </h2>
                                            <div aria-labelledby="filters-headingThree" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionfilters" id="filters-collapseThree">
                                                <div class="accordion-body">
                                                    <ul class="p-4">
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col d-flex justify-content-start jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                        <li class="col jrrhLu">
                                                            <input aria-label="Checkbox for following text input"
                                                                   class="form-check-input mt-0" type="checkbox"
                                                                   value="">
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                                            <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Modal sort -->
                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal" data-bs-backdrop="false"
                             id="sortmodal"
                             tabindex="-1">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="sortmodallabel">Modal title</h1>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!--			filter laptop-->
                    <section class="bg-dark d-none d-lg-flex justify-content-center text-center" id="filter">
                        <!--				brand-->
                        <div class="dropdown position-static">
                            <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                                <strong>brand</strong>
                            </button>
                            <ul class="dropdown-menu w-100 mt-0 rounded-0">
                                <li class="input-group w-50 col-5 m-auto">
                                    <input aria-describedby="addon-wrapping" aria-label="Username" class="form-control" id="findABrand"
                                           placeholder="Find a brand" type="text">
                                    <span class="input-group-text bg-white border-start-0" id="addon-wrapping"><i
                                            class="bi text-dark bi-search"></i></span>
                                </li>
                                <div class="row row-cols-5 m-5">
                                    @foreach($brands as $brand)
                                        <li class="col d-flex justify-content-start jrrhLu">
                                            <input wire:model="filters.brand" aria-label="Checkbox for following text input" class="jaoyAT" type="checkbox" value="{{ $brand['name'] }}">
                                            <span class=" bLYPWY mx-1">{{$brand['name']}}</span>
                                        </li>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                        <div class="separator my-2"></div>
                        <!--				color-->
                        <div class="dropdown position-static">
                            <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                                <strong>color</strong>
                            </button>
                            <ul class="dropdown-menu w-100 mt-0 rounded-0">
                                <div class="row row-cols-5 m-5 ">
                                    @foreach($colors as $color)
                                        <li class="col d-flex justify-content-start jrrhLu">
                                            <input wire:model="filters.color" aria-label="Checkbox for following text input" class="jaoyAT" type="checkbox" value="{{ $color['name'] }}">
                                            <span class=" bLYPWY mx-1">{{$color['name']}}</span>
                                        </li>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                        <div class="separator my-2 d-none"></div>
                        <!--				size-->
                        <div class="dropdown position-static d-none">
                            <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                                <strong>size</strong>
                            </button>
                            <ul class="dropdown-menu w-100 mt-0 rounded-0">
                                <div class="row row-cols-5 m-5 ">
                                    @foreach($sizes as $size)
                                        <li class="col d-flex justify-content-start jrrhLu">
                                            <input wire:model="filters.size" aria-label="Checkbox for following text input" class="jaoyAT" type="checkbox" value="{{ $size['name'] }}">
                                            <span class=" bLYPWY mx-1">{{$size['name']}}</span>
                                        </li>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                        <div class="separator my-2 d-none"></div>
                        <!--				sort-->
                        <div class="dropdown d-none">
                            <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                                <strong>sort</strong>
                            </button>
                            <ul class="FiltersDropdownstyles__OptionsList-sc-1qgkt1w-2 dropdown-menu w-100 text-center p-2 border-0">
                                <div class="w-50 text-start m-auto">
                                    <form action="" class="row row-cols-2" id="filterclas">
                                        <div class="col">
                                            <input id="featured" name="best selling" type="radio" value="featured">
                                            <label for="featured">featured</label><br>
                                        </div>
                                        <div class="col">
                                            <input id="option2" name="best selling" type="radio" value="best_selling">
                                            <label for="option2">best selling</label><br>
                                        </div>
                                        <div class="col">
                                            <input id="option3" name="best selling" type="radio" value="best_selling">
                                            <label for="option3">Price low-high</label><br>
                                        </div>
                                        <div class="col">
                                            <input id="option4" name="best selling" type="radio" value="best_selling">
                                            <label for="option4">Price high-low</label><br>
                                        </div>
                                        <div class="col">
                                            <input id="option5" name="best selling" type="radio" value="best_selling">
                                            <label for="option5">newest arrivals</label><br>
                                        </div>
                                    </form>
                                </div>
                                <div class="p-3 d-flex justify-content-center">
                                    <button class="lgLNaJ ">close</button>
                                </div>
                            </ul>

                        </div>
                    </section>

            @endif

        @endif


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
    </main>
</div>
