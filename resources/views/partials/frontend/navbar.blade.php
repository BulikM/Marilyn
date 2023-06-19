<body>
<svg style="display: none" version="2.0">
    <defs>
        <symbol id="goopLogo" viewBox="0 0 494 206">
            <desc>goop</desc>
            <path fill="white"
                  d="M41.14 72.79C41.14 94 45.28 104 57.94 104c13.15 0 17.53-10.47 17.53-33.35 0-20.94-4.38-31.16-17-31.16-12.47-.05-17.33 10.42-17.33 33.3m-27.51 97.14c0 13.63 13.88 22.64 40.41 22.64 28.24 0 42.61-8 42.61-20.94 0-8.52-6.57-13.15-19.23-14.36-20.94-1.95-39.42.73-53.32-3.41-6.82 3.65-10.47 9.49-10.47 16.07m93.49-98.6c0 20-16.31 33.84-48 37.49-18.26 1.95-29.22 3.89-29.22 12.41 0 8.76 16.07 7.3 42.61 8 29 .73 44.07 8.76 44.07 29.46 0 23.62-22.64 39-62.81 39-35.06 0-53.8-11-53.8-26.54 0-5.36 2.43-10 7.06-13.88a32.82 32.82 0 0 1 11.69-5.84c-7.03-4.14-10.44-10.43-10.44-18.5 0-16.07 12.66-25.08 38-26.54-24.35-4.38-37-16.07-37-33.6 0-19.72 18.5-36.27 47.72-37.74C59.16 12.9 70.36 0 82.78 0c8 0 13.39 5.6 13.39 12.66 0 8.28-5.6 14.12-13.15 14.12-4.63 0-7.79-2.92-11.44-2.92-6.09 0-9 3.41-9.74 11.44 28.24 1.46 45.28 16.31 45.28 36M150 92c0 35.06 8.52 52.34 26.78 52.34s27-17.28 27-52.34-9-52.59-27-52.59C158.56 39.44 150 57 150 92m86.91 0c0 33.11-24.59 57.21-60.14 57.21S116.92 125.38 116.92 92c0-33.11 24.34-57.21 59.89-57.21S236.95 58.91 236.95 92M280.7 92c0 35.06 8.52 52.34 26.78 52.34s27-17.28 27-52.34-9-52.59-27-52.59C289.22 39.44 280.7 57 280.7 92m86.91 0c0 33.11-24.59 57.21-60.13 57.21S247.59 125.38 247.59 92c0-33.11 24.34-57.21 59.89-57.21S367.62 58.91 367.62 92M434.26 143.15c16.55 0 29.21-16.8 29.21-47.72 0-28.73-13.63-45.77-28.73-45.77-7.3 0-13.64 3.17-20.21 9.25v52.34c0 20.94 5.36 31.89 19.72 31.89m-19.72 28c0 10 1.71 15.34 8 17.28 5.11 1.71 8.76 1 8.76 4.14 0 1.7-1.22 2.92-3.41 2.92h-56.19a2.88 2.88 0 0 1-3.17-2.92c0-2.92 3.41-2.19 7.55-3.89 6.57-2.68 8.28-7.06 8.28-17.53V72.31c0-10.47-2.19-14.37-9.74-17.53-3.89-1.71-7.06-1.46-7.06-4.14 0-4.14 15.1-3.16 47-15.09V52.1c14.36-11.44 26.29-17.29 39-17.29 23.37 0 40.9 19.48 40.9 49.18 0 37.73-25.56 64.27-62.57 64.27a65.5 65.5 0 0 1-17.29-2.44v25.32z"></path>
        </symbol>
    </defs>
    <!-- to make the svg file also usable as image: -->
    <use href="#goopLogo"/>
</svg>
<div class="container-fluid ps-5 pe-5 pt-2 pb-2 advertisement">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="" class="advertisementLink">
                <span>THE GOOP SALE</span>
                <span class="emphasizedAdvertisement">NOW UP TO 60% OFF</span>
            </a>
        </div>
    </div>
</div>
<!--header-->
<header class="bg-dark sticky-top" id="header">
    <nav class="container-fluid max-width-1220 ps-4 pe-4 pt-lg-4" id="navbar">

        <div class="row ms-md-4 me-md-4">
            <div class="col-12 d-flex justify-content-lg-between justify-content-evenly">
                <ul class="list-unstyled d-none d-lg-flex align-items-center">
                    <li class="px-3 py-2 d-inline-block headerListItemSeparator">
                        <a class="headerLink" href="#">US</a>
                    </li>
                    <li class="px-3 py-2 d-inline-block headerListItemSeparator">
                        <a class="headerLink" href="#">Get $50</a>
                    </li>
                    <li class="px-3 py-2 d-inline-block headerListItemSeparator">
                        <a class="headerLink" href="#">About</a>
                    </li>
                    <li class="px-3 py-2 d-inline-block headerListItemSeparator">
                        <a class="headerLink" href="#">Stores</a>
                    </li>
                </ul>
                <div class="d-lg-none">
                    <i class="bi bi-list text-white modalnavbar m-auto"></i>
                </div>
                <div class="w-md-100 p-0 d-flex justify-content-center" id="logoTop">
                    <div>
                        <a href="{{route('home')}}">
                            <svg class="headerLogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494 206">
                                <use href="#goopLogo"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <ul class="list-unstyled d-flex justify-content-evenly">
                    @guest
                        @if (Route::has('login'))
                            <li class="navbarRightOptions px-3 py-2 headerListItemSeparator d-none d-lg-flex">
                                <a class="headerLink" href="#" data-bs-toggle="modal" data-bs-target="#loginmodal">Log
                                    In</a>
                            </li>
                        @endif
                    @else
                        <li class="navbarRightOptions px-3 py-2 headerListItemSeparator d-none d-lg-flex">
                            <a class="headerLink" href="#">
                                {{ Auth::user()->name ? Auth::user()->name : "account" }}
                            </a>
                        </li>
                    @endguest
{{--wishlist--}}
                    <li class="ps-3 mt-2 navbarRightOptions d-none d-lg-flex">
                        <a href="https://shop.goop.com/account/wish_list" aria-label="wishlist heart"
                           class="headerLink iconHeader">
                            <svg viewBox="0 0 32 32" height="32" width="32"
                                 class="hart" aria-label="heart icon"
                                 fill="#111">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M4.84862 6.35758C8.85695 2.71364 13.9999 5.25513 15.9998 9.25503C17.9999 4.58844 23.9999 3.25515 27.1509 6.35758C29.8753 8.83429 29.8657 12.9708 27.5994 15.775C25.5129 18.3567 17.4366 26.4801 16.1679 27.7532C16.0715 27.85 15.9269 27.851 15.829 27.7556C14.5518 26.5109 6.48519 18.6168 4.40017 15.775C2.13387 12.6861 2.12424 8.83429 4.84862 6.35758Z"
                                      stroke-width="1.25" stroke-linecap="round"></path>
                            </svg>
                        </a></li>
{{--cart--}}
                    <li class="ps-lg-3 mt-2 navbarRightOptions">
                        <a href="{{route('cart')}}" class="headerLink iconHeader">
                            <svg viewBox="0 0 32 32" height="32" width="32" class="iconHeaderSVG"
                                 aria-label="bag icon" fill="#fff">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.3095 8.42102H20.6905C20.4816 6.01383 18.4614 4.12512 16 4.12512C13.5386 4.12512 11.5184 6.01383 11.3095 8.42102ZM21.9443 8.42102H28.0128C28.8356 8.42102 29.462 9.15889 29.3284 9.97075L26.3716 27.948C26.2656 28.5922 25.7088 29.0649 25.0559 29.0649H6.94701C6.29415 29.0649 5.73731 28.5922 5.63135 27.948L2.67449 9.97075C2.54096 9.15889 3.16738 8.42102 3.99015 8.42102H10.0557C10.2675 5.32272 12.8479 2.87512 16 2.87512C19.1521 2.87512 21.7325 5.32272 21.9443 8.42102ZM3.99015 9.67102H28.0128C28.0642 9.67102 28.1034 9.71714 28.095 9.76788L25.1382 27.7451C25.1315 27.7854 25.0967 27.8149 25.0559 27.8149H6.94701C6.90621 27.8149 6.8714 27.7854 6.86478 27.7451L3.90792 9.76788C3.89958 9.71714 3.93873 9.67102 3.99015 9.67102Z"
                                      fill="#fff"></path>
                            </svg>
                            <span class="totalbasket totalbasketText">{{Session::has('cart') ? Session::get('cart')->totalQuantity:'0'}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="py-3">
            <div class="d-flex justify-content-center" id="scrollSearch">
                <div id="leftHeaderPart" class="pe-5 d-none">
                    <a href="{{route('home')}}">
                        <svg class="headerLogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494 206">
                            <use href="#goopLogo"/>
                        </svg>
                    </a>
                </div>
                <div class="col-12 w-md-75" id="searchNavbar">
                    <form class="input-group">
                        <input type="search" aria-label="Search" placeholder="What can we help you find?"
                               aria-controls="" aria-autocomplete="list" id="BigSearchBarWebKit" autocomplete="off"
                               class="searchInput" value="">
                        <span id="search-icon" class=""><svg viewBox="0 0 24 24" height="24" width="24"
                                                             class="searchIconContainer" aria-label="Submit Search"
                                                             fill="" type="search" role="button"><path
                                    d="M23.712 22.368l-7.44-7.44a8.989 8.989 0 0 0 2.064-5.76C18.336 4.128 14.208 0 9.168 0 4.128 0 0 4.128 0 9.168c0 5.04 4.128 9.168 9.168 9.168 2.16 0 4.176-.768 5.76-2.064l7.44 7.44a.948.948 0 0 0 .672.288c.24 0 .48-.096.672-.288a.928.928 0 0 0 0-1.344zM1.92 9.168c0-3.984 3.264-7.248 7.248-7.248 3.984 0 7.248 3.264 7.248 7.248 0 1.92-.768 3.648-1.968 4.944-.048.048-.096.096-.192.144-.096.048-.096.096-.144.192-1.296 1.2-3.024 1.968-4.944 1.968-3.984 0-7.248-3.264-7.248-7.248z"></path></svg>
                            </span>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="row bg-dark">
    <div class="col-12 d-flex pt-2 justify-content-center">
        <ul class="list-unstyled d-flex mb-0">
            <li class="pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">What's New</a>
            </li>
            <li class="ps-3 pe-3 d-flex">
                <div class="dropdown hoverDropdown">
                    <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#" role="button" id="MadeByGoop"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Made By goop
                    </a>

                    <div class="pt-4">
                        <div class="dropdown-menu hoverDropdownMenu vw-100 position-fixed start-0"
                             aria-labelledby="MadeByGoop">
                            <div class="d-flex m-4">
                                <div>
                                    <span style="font: 700 1.5rem caslon, georgia, serif;">Made By goop</span>
                                    <ul class="list-unstyled d-flex justify-content-between pt-4 pe-5 pb-3">
                                        <li>
                                            <ul class="list-unstyled pe-4">
                                                <li class="mb-2">
                                                    <span class="text-uppercase fw-bolder">goop Beauty</span>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/goop-beauty/c/?click_source=nav-3-madebygoop-goopbeauty-shopallgoopbeauty"
                                                       class="headerDropdownMenuLink">Shop All goop Beauty</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/goop-skincare/?click_source=nav-3-madebygoop-goopbeauty-goopskincare"
                                                       class="headerDropdownMenuLink">goop Skin Care</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/goopglow/?click_source=nav-3-madebygoop-goopbeauty-goopglow"
                                                       class="headerDropdownMenuLink">GOOPGLOW</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/goop-genes/?click_source=nav-3-madebygoop-goopbeauty-goopgenes"
                                                       class="headerDropdownMenuLink">GOOPGENES</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/g-tox/?click_source=nav-3-madebygoop-goopbeauty-gtox"
                                                       class="headerDropdownMenuLink">G.Tox</a>
                                                </li>
                                                <li class="">
                                                    <a href="https://goop.com/goop-bath-soaks/?click_source=nav-3-madebygoop-goopbeauty-goopbathsoaks"
                                                       class="headerDropdownMenuLink">goop Bath Soaks</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="list-unstyled pe-4">
                                                <li class="mb-2">
                                                    <span class="text-uppercase fw-bolder">goop Fashion</span>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/g-label/c/?click_source=nav-3-madebygoop-goopfashion-shopallglabelbygoop"
                                                       class="headerDropdownMenuLink">Shop All G. Label by goop</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/g-label/?click_source=nav-3-madebygoop-goopfashion-glabel"
                                                       class="headerDropdownMenuLink">G. Label</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/g-label-core-collection/?click_source=nav-3-madebygoop-goopfashion-glabelcore"
                                                       class="headerDropdownMenuLink">G. Label Core</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/g-label-jewelry/?click_source=nav-3-madebygoop-goopfashion-glabeljewelry"
                                                       class="headerDropdownMenuLink">G. Label Jewelry</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/g-label-dresses/?click_source=nav-3-madebygoop-goopfashion-glabeldresses"
                                                       class="headerDropdownMenuLink">G. Label Dresses</a>
                                                </li>
                                                <li class="">
                                                    <a href="https://goop.com/goop-x-lacoste?click_source=nav-3-madebygoop-goopfashion-goopxlacoste"
                                                       class="headerDropdownMenuLink">goop x Lacoste</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="list-unstyled pe-4">
                                                <li class="mb-2">
                                                    <span class="text-uppercase fw-bolder">goop Wellness</span>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/goop-wellness/c/?click_source=nav-3-madebygoop-goopwellness-shopallgoopwellness"
                                                       class="headerDropdownMenuLink">Shop All goop Wellness</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/sexual-health/heartthrob-vibrator-review/?click_source=nav-3-madebygoop-goopwellness-heartthrobvibrator"
                                                       class="headerDropdownMenuLink">Heartthrob Vibrator</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/sexual-health/viva-la-vulva-vibrator-review/?click_source=nav-3-madebygoop-goopwellness-vivalavulvavibrator"
                                                       class="headerDropdownMenuLink">Viva La Vulva Vibrator</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/sexual-health/goop-double-sided-wand-vibrator-review/?click_source=nav-3-madebygoop-goopwellness-doublesidedwandvibrator"
                                                       class="headerDropdownMenuLink">Double-Sided Wand Vibrator</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/sexual-health/ultraplush-self-heating-g-spot-vibrator/?click_source=nav-3-madebygoop-goopwellness-ultraplushselfheatinggspotvibrator"
                                                       class="headerDropdownMenuLink">Ultraplush Self-Heating G-Spot
                                                        Vibrator</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/sexual-health/dtf-supplement-for-sex-drive/?click_source=nav-3-madebygoop-goopwellness-dtf"
                                                       class="headerDropdownMenuLink">DTF</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/detox/g-tox-7-day-reset-kit/?click_source=nav-3-madebygoop-goopwellness-gtox7dayresetkit"
                                                       class="headerDropdownMenuLink">G.Tox 7-Day Reset Kit</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="https://goop.com/wellness/health/metabolism-boosting-superpowder/?click_source=nav-3-madebygoop-goopwellness-metabolismboostingsuperpowder"
                                                       class="headerDropdownMenuLink">Metabolism-Boosting
                                                        Superpowder</a>
                                                </li>
                                                <li class="">
                                                    <a href="https://goop.com/wellness/health/goop-wellness-gut-microbiome-superpowder/?click_source=nav-3-madebygoop-goopwellness-gutmicrobiomesuperpowder"
                                                       class="headerDropdownMenuLink">Gut Microbiome Superpowder</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex">
                                    <a href="https://goop.com/early-access-sign-up/?click_source=nav-2-madebygoop-merchabletile1"
                                       class="headerDropdownMenuImageLink">
                                        <img src="https://goop-img.com/wp-content/uploads/2022/06/beauty-tile-3.29-630x479.jpeg"
                                             class="pl-5 headerDropdownMenuImage"/>
                                        <div class="">
                                            <p class="mt-2">Get Early Access to Our Next Product</p>
                                        </div>
                                    </a>
                                    <a href="https://goop.com/goop-home/c/?click_source=nav-2-madebygoop-merchabletile2"
                                       class="headerDropdownMenuImageLink">
                                        <img src="https://goop-img.com/wp-content/uploads/2021/10/20210108_EDITORIAL_HOME_GOOP-COOKWARE-10-PIECE-SET_SHOT-01_106-1-1-599x950.jpg"
                                             class="pl-5 headerDropdownMenuImage"/>
                                        <div class="">
                                            <p class="mt-2">goop Home</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="ps-3 pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Beauty</a>
            </li>
            <li class="ps-3 pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Fashion</a>
            </li>
            <li class="ps-3 pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Wellness</a>
            </li>
            <li class="ps-3 pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Food &amp; Home</a>
            </li>
            <li class="ps-3 pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Travel</a>
            </li>
            <li class="ps-3 pe-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Featured</a>
            </li>
            <li class="ps-3">
                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">Sale</a>
            </li>

                <li class="ps-3">
                    <a class="text-uppercase slideInEffect pb-1 categoryLink" href="{{route('dashboard')}}">Dashboard</a>
                </li>

        </ul>
    </div>
</div>
