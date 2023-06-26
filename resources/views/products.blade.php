@extends('layouts.frontend')
@section('content')
    <!--main-->
<main class="container-fluid p-0">

    @if($heros)
        @foreach($heros as $hero)
            <div class="px-5"><h1 class="line d-flex align-items-center title___1Ikv6">{{$hero->name}}</h1></div>
        @endforeach
    @endif
        @foreach($heros as $categorie)
            @if(!empty($categorie->subcategories))
            <!--			option carousel-->
                @if($categorie->getTable() != 'brands')
                    <section id="categories">
                    <p class="bg-grey text-center p-2 d-lg-flex w-100" id="backgroud-grey"><span class="opacity-0">hallo</span></p>
                    <div class="max-width-1680 m-auto carousel carousel-9 carousel-dark d-none d-lg-flex slide"
                         data-bs-ride="false"
                         id="optionsCarousel">
                        <div class="carousel-inner px-4 overflow-visible" role="listbox">
                                @foreach($categorie->subcategories as $key=>$sub)
                                    <div class="carousel-item {{$key == 0 ? 'active':'' }}">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body p-0 krKgn">
                                                    <div class="dropdown-center bg-grey py-2">
                                                        <button aria-expanded="false"
                                                                class="dropdown-toggle-change ikrKgn kWfyGM underline-carousel"
                                                                data-bs-toggle="dropdown" type="button">
                                                            <span class="CollectionsNavstyles__CollectionTitle-sc-16wrtf8-4 dZeHdq" href="#">{{$sub->name}}</span>
                                                        </button>
                                                        <ul class="CollectionsNavstyles__SubItems-sc-16wrtf8-5 WZQTr dropdown-menu shadow rounded-0 border-0 p-2">
                                                            <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                                                <p>
                                                                    <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA" href="#">All
                                                                        Swimwear</a>
                                                                </p>
                                                            </li>
                                                            <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                                                <p>
                                                                    <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA" href="#">One-Piece
                                                                    </a>
                                                                </p>
                                                            </li>
                                                            <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                                                <p>
                                                                    <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA" href="#">Two-Piece
                                                                    </a>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#optionsCarousel" type="button">
                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#optionsCarousel" type="button">
                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
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
                <div class="dropdown">
                    <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                        <strong>brand</strong>
                    </button>
                    <ul class="FiltersDropdownstyles__OptionsList-sc-1qgkt1w-2 dropdown-menu p-2 border-0">
                        <div class="input-group w-50 col-5 m-auto">
                            <input aria-describedby="addon-wrapping" aria-label="Username" class="form-control" id="findABrand"
                                   placeholder="Find a brand" type="text">
                            <span class="input-group-text bg-white border-start-0" id="addon-wrapping"><i
                                    class="bi text-dark bi-search"></i></span>
                        </div>
                        <div class="d-flex row row-cols-5 p-4">
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                        </div>
                        <div class="d-flex justify-content-center align-items-center m-3">
                            <button class="lgLNaJ m-1">show more</button>
                            <button class="lgLNaJ m-1">apply</button>
                        </div>
                    </ul>
                </div>
                <div class="separator my-2"></div>
                <!--				color-->
                <div class="dropdown">
                    <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                        <strong>color</strong>
                    </button>
                    <ul class="FiltersDropdownstyles__OptionsList-sc-1qgkt1w-2 dropdown-menu w-auto border-0 p-2">
                        <div class="input-group w-50 col-5 m-auto">
                            <input aria-describedby="addon-wrapping2" aria-label="color" class="form-control" id="findAColor"
                                   placeholder="Find a color" type="text">
                            <span class="input-group-text bg-white border-start-0" id="addon-wrapping2"><i
                                    class="bi text-dark bi-search"></i></span>
                        </div>
                        <div class="d-flex row row-cols-5 p-4">
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                        </div>
                        <div class="d-flex justify-content-center align-items-center m-3">
                            <button class="lgLNaJ m-1">show more</button>
                            <button class="lgLNaJ m-1">apply</button>
                        </div>
                    </ul>

                </div>
                <div class="separator my-2"></div>
                <!--				size-->
                <div class="dropdown">
                    <button aria-expanded="false" class="dropdown-toggle-change lgLNaJ" data-bs-toggle="dropdown" type="button">
                        <strong>size</strong>
                    </button>
                    <ul class="FiltersDropdownstyles__OptionsList-sc-1 qgkt1w-2 dropdown-menu p-2 border-0">
                        <div class="input-group w-50 col-5 m-auto">
                            <input aria-describedby="addon-wrapping3" aria-label="size" class="form-control" id="findASize"
                                   placeholder="Find a size"
                                   type="text">
                            <span class="input-group-text bg-white border-start-0" id="addon-wrapping3"><i
                                    class="bi text-dark bi-search"></i></span>
                        </div>
                        <div class="d-flex row row-cols-5 p-4">
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Alemais</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                            <li class="col d-flex justify-content-start jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">108 Sportif</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(1)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Adidas by Stella McCartney</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(9)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">AGOLDE</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(23)</span>
                            </li>
                            <li class="col jrrhLu">
                                <input aria-label="Checkbox for following text input" class="form-check-input mt-0"
                                       type="checkbox"
                                       value="">
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY">Agua by Agua Bendita</span>
                                <span class="Text__BaseText-vs2pg6-0 bLYPWY InputLabelWithSecondaryTextstyles__Subtext-bvh17g-2 hUTJAh">(4)</span>
                            </li>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="lgLNaJ m-1">show more</button>
                            <button class="lgLNaJ m-1">apply</button>
                        </div>
                    </ul>

                </div>
                <div class="separator my-2"></div>
                <!--				sort-->
                <div class="dropdown">
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
        @endforeach


@foreach($products as $product)
    <p class="text-center text-danger">{{$product->name}}</p>
        @endforeach
        <!--	producten-->

        <section class="row row-cols-2 row-cols-lg-3 mt-5 dgWCVK">

            <div class="card col ejylGK">
                <a href="detailpage.html">
                    <div class="carousel slide dotscarousel carouselproductsgsm mb-lg-2"
                         id="carouselproductsgsm1">

                        <div class="carousel-inner">
                            <div class="carousel-item active img">
                                <img alt="RIVET UTILITY Unisex Jumpsuit"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 d-block w-100"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/022/large/open-uri20230104-8884-1bycesh?1672861824.webp"
                                     srcset="
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/022/large/open-uri20230104-8884-1bycesh?1672861824.webp 324w,
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/022/large/open-uri20230104-8884-1bycesh?1672861824.webp 648w,
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/022/large/open-uri20230104-8884-1bycesh?1672861824.webp 972w
                ">
                                <img alt="RIVET UTILITY Unisex Jumpsuit"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 ProductListCardstyles__StyledSecondaryImage-g09iyn-5 w-100 hover_img"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp"
                                     srcset="
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp 324w,
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp 648w,
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp 972w
                ">
                            </div>
                            <div class="carousel-item">
                                <img alt="RIVET UTILITY Unisex Jumpsuit"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 ProductListCardstyles__StyledSecondaryImage-g09iyn-5 d-block w-100"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp"
                                     srcset="
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp 324w,
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp 648w,
                  https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/023/large/open-uri20230104-8884-mza0ab?1672861828.webp 972w
                ">
                            </div>
                        </div>
                        <div class="carousel-indicators d-lg-none">
                            <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                                    data-bs-target="#carouselproductsgsm1" type="button"></button>
                            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselproductsgsm1"
                                    type="button"></button>
                        </div>
                    </div>
                    <div>
                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-11 kxzyWr">
                            <span class="ProductListCardstyles__Brand-g09iyn-9 bRYfZP">RIVET UTILITY</span>
                            <a class="ProductListCardstyles__Title-g09iyn-16 dNoHTw"
                               data-acsb-clickable="true" data-acsb-navigable="true"
                               data-acsb-now-navigable="true" href="detailpage.html">Unisex
                                Jumpsuit</a>
                            <div class="ProductListCardstyles__PriceWrapper-g09iyn-10 gMRwgT">
						<span class="ProductListCardstyles__BasePrice-g09iyn-12 ProductListCardstyles__Price-g09iyn-13 jdPKXS NTnhi">
							US $390.00
						</span>
                            </div>
                        </div>
                        <span class="ProductListCardstyles__Caption-g09iyn-17 cKUVkS">The oversize unisex fit is straight-up cool.</span>
                    </div>
                </a>
            </div>
            <div class="card col ejylGK">
                <a href="detailpage.html">
                    <div class="carousel slide dotscarousel carouselproductsgsm" data-bs-ride="false"
                         id="carouselproductsgsm2">

                        <div class="carousel-inner pb-lg-2">
                            <div class="carousel-item img active">
                                <img alt="LISA YANG Mila Sweater"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 d-block w-100"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/021/large/open-uri20230104-9188-sy26bv?1672861758.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/021/large/open-uri20230104-9188-sy26bv?1672861758.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/021/large/open-uri20230104-9188-sy26bv?1672861758.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/021/large/open-uri20230104-9188-sy26bv?1672861758.webp 972w
        "> <img alt="LISA YANG Mila Sweater"
                class="ProductListCardstyles__StyledImage-g09iyn-4 hover_img w-100 "
                src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp"
                srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp 972w
        ">
                            </div>
                            <div class="carousel-item">
                                <img alt="LISA YANG Mila Sweater"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 d-block w-100 "
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/048/large/open-uri20230104-24232-wbfp2a?1672874399.webp 972w
        ">
                            </div>
                        </div>
                        <div class="carousel-indicators d-lg-none">
                            <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                                    data-bs-target="#carouselproductsgsm2" type="button"></button>
                            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselproductsgsm2"
                                    type="button"></button>
                        </div>
                    </div>
                    <div>
                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-11 kxzyWr"><span
                                class="ProductListCardstyles__Brand-g09iyn-9 bRYfZP">LISA YANG</span><a
                                class="ProductListCardstyles__Title-g09iyn-16 dNoHTw"
                                data-acsb-clickable="true" data-acsb-navigable="true"
                                data-acsb-now-navigable="true" href="detailpage.html">Mila
                                Sweater</a>
                            <div class="ProductListCardstyles__PriceWrapper-g09iyn-10 gMRwgT"><span
                                    class="ProductListCardstyles__BasePrice-g09iyn-12 ProductListCardstyles__Price-g09iyn-13 jdPKXS NTnhi">US $504.00</span>
                            </div>
                        </div>
                        <span class="ProductListCardstyles__Caption-g09iyn-17 cKUVkS">The soft, sumptuous 100 percent cashmere will steal your heart.</span>
                    </div>
                </a>
            </div>
            <div class="card col ejylGK">
                <a href="detailpage.html">
                    <div class="carousel slide dotscarousel carouselproductsgsm" data-bs-ride="false"
                         id="carouselproductsgsm3">

                        <div class="carousel-inner p-lg-2">
                            <div class="carousel-item active img">
                                <img alt="RE/DONE ’70s Stove Pipe Jeans"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 d-block w-100"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/027/large/open-uri20230104-9188-vrx6wy?1672861903.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/027/large/open-uri20230104-9188-vrx6wy?1672861903.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/027/large/open-uri20230104-9188-vrx6wy?1672861903.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/027/large/open-uri20230104-9188-vrx6wy?1672861903.webp 972w
        "> <img alt="RE/DONE ’70s Stove Pipe Jeans"
                class="ProductListCardstyles__StyledImage-g09iyn-4 w-100 hover_img"
                src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp"
                srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp 972w
        ">
                            </div>
                            <div class="carousel-item">
                                <img alt="RE/DONE ’70s Stove Pipe Jeans"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 w-100 d-block"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/028/large/open-uri20230104-9188-1o2jx5e?1672861907.webp 972w
        ">
                            </div>
                        </div>
                        <div class="carousel-indicators d-lg-none">
                            <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                                    data-bs-target="#carouselproductsgsm3" type="button"></button>
                            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselproductsgsm3"
                                    type="button"></button>
                        </div>
                    </div>
                    <div>
                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-11 kxzyWr"><span
                                class="ProductListCardstyles__Brand-g09iyn-9 bRYfZP">RE/DONE</span><a
                                class="ProductListCardstyles__Title-g09iyn-16 dNoHTw"
                                data-acsb-clickable="true" data-acsb-navigable="true"
                                data-acsb-now-navigable="true"
                                href="detailpage.html">’70s Stove Pipe
                                Jeans</a>
                            <div class="ProductListCardstyles__PriceWrapper-g09iyn-10 gMRwgT"><span
                                    class="ProductListCardstyles__BasePrice-g09iyn-12 ProductListCardstyles__Price-g09iyn-13 jdPKXS NTnhi">US $285.00</span>
                            </div>
                        </div>
                        <span class="ProductListCardstyles__Caption-g09iyn-17 cKUVkS">Cut from an extra-stretchy denim blend that hugs the figure in all the right places.  </span>
                    </div>
                </a>
            </div>
            <div class="card col ejylGK">
                <a href="detailpage.html">
                    <div class="carousel slide dotscarousel carouselproductsgsm p-lg-2" data-bs-ride="false"
                         id="carouselproductsgsm4">

                        <div class="carousel-inner">
                            <div class="carousel-item img active">
                                <img alt="TOTEME A-Line Wool Cotton Dress"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 d-block w-100"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/033/large/open-uri20230104-9045-1adefel?1672861959.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/033/large/open-uri20230104-9045-1adefel?1672861959.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/033/large/open-uri20230104-9045-1adefel?1672861959.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/033/large/open-uri20230104-9045-1adefel?1672861959.webp 972w
        ">
                                <img alt="TOTEME A-Line Wool Cotton Dress"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 w-100 hover_img"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp 972w
        ">
                            </div>
                            <div class="carousel-item">
                                <img alt="TOTEME A-Line Wool Cotton Dress"
                                     class="ProductListCardstyles__StyledImage-g09iyn-4 w-100 d-block"
                                     src="https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp"
                                     srcset="
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp 324w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp 648w,
          https://shop.goop-img.com/cdn-cgi/image/height=324,width=324,dpr=3,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/086/034/large/open-uri20230104-9045-13lnqur?1672861964.webp 972w
        ">
                            </div>
                        </div>
                        <div class="carousel-indicators d-lg-none">
                            <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0"
                                    data-bs-target="#carouselproductsgsm4" type="button"></button>
                            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselproductsgsm4"
                                    type="button"></button>
                        </div>
                    </div>
                    <div>
                        <div class="ProductListCardstyles__RequiredDetails-g09iyn-11 kxzyWr"><span
                                class="ProductListCardstyles__Brand-g09iyn-9 bRYfZP">TOTEME</span><a
                                class="ProductListCardstyles__Title-g09iyn-16 dNoHTw"
                                data-acsb-clickable="true" data-acsb-navigable="true"
                                data-acsb-now-navigable="true" href="detailpage.html">A-Line
                                Wool Cotton Dress</a>
                            <div class="ProductListCardstyles__PriceWrapper-g09iyn-10 gMRwgT"><span
                                    class="ProductListCardstyles__BasePrice-g09iyn-12 ProductListCardstyles__Price-g09iyn-13 jdPKXS NTnhi">US $680.00</span>
                            </div>
                        </div>
                        <span class="ProductListCardstyles__Caption-g09iyn-17 cKUVkS">Folded neckline, fitted waist, flared skirt—this dress is expertly proportioned.</span>
                    </div>
                </a>
            </div>
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
                    data-acsb-tooltip="New Window" href="detailpage.html" target="_blank"><span
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

@endsection
