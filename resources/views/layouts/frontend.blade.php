<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Goop</title>
    <!-- bootstrap-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- font-awesom icons-->
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          referrerpolicy="no-referrer" rel="stylesheet"/>
    <!--	bootstrap javascript-->
    <script crossorigin="anonymous"
            integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
            referrerpolicy="no-referrer"
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>


    <!-- eigen css-->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/styleBody.css" rel="stylesheet">
    <link href="./css/styleBreedtes.css" rel="stylesheet">
    <link href="./css/styleBtn.css" rel="stylesheet">
    <link href="./css/styleCarousel.css" rel="stylesheet">
    <link href="./css/styleColor.css" rel="stylesheet">
    <link href="./css/styleFooter.css" rel="stylesheet">
    <link href="./css/styleHtml.css" rel="stylesheet">
    <link href="./css/styleImages.css" rel="stylesheet">
    <link href="./css/styleNavbar.css" rel="stylesheet">
    <link href="./css/styleText.css" rel="stylesheet">
    <link href="./css/styleMobile.css" rel="stylesheet">
    <link href="./css/styleCarouselproducts.css" rel="stylesheet">


</head>

<body>

<!--header-->
<header>
    <svg style="display: none" version="2.0">
        <defs>
            <symbol id="goopLogo" viewBox="0 0 494 206">
                <desc>goop</desc><path fill="white" d="M41.14 72.79C41.14 94 45.28 104 57.94 104c13.15 0 17.53-10.47 17.53-33.35 0-20.94-4.38-31.16-17-31.16-12.47-.05-17.33 10.42-17.33 33.3m-27.51 97.14c0 13.63 13.88 22.64 40.41 22.64 28.24 0 42.61-8 42.61-20.94 0-8.52-6.57-13.15-19.23-14.36-20.94-1.95-39.42.73-53.32-3.41-6.82 3.65-10.47 9.49-10.47 16.07m93.49-98.6c0 20-16.31 33.84-48 37.49-18.26 1.95-29.22 3.89-29.22 12.41 0 8.76 16.07 7.3 42.61 8 29 .73 44.07 8.76 44.07 29.46 0 23.62-22.64 39-62.81 39-35.06 0-53.8-11-53.8-26.54 0-5.36 2.43-10 7.06-13.88a32.82 32.82 0 0 1 11.69-5.84c-7.03-4.14-10.44-10.43-10.44-18.5 0-16.07 12.66-25.08 38-26.54-24.35-4.38-37-16.07-37-33.6 0-19.72 18.5-36.27 47.72-37.74C59.16 12.9 70.36 0 82.78 0c8 0 13.39 5.6 13.39 12.66 0 8.28-5.6 14.12-13.15 14.12-4.63 0-7.79-2.92-11.44-2.92-6.09 0-9 3.41-9.74 11.44 28.24 1.46 45.28 16.31 45.28 36M150 92c0 35.06 8.52 52.34 26.78 52.34s27-17.28 27-52.34-9-52.59-27-52.59C158.56 39.44 150 57 150 92m86.91 0c0 33.11-24.59 57.21-60.14 57.21S116.92 125.38 116.92 92c0-33.11 24.34-57.21 59.89-57.21S236.95 58.91 236.95 92M280.7 92c0 35.06 8.52 52.34 26.78 52.34s27-17.28 27-52.34-9-52.59-27-52.59C289.22 39.44 280.7 57 280.7 92m86.91 0c0 33.11-24.59 57.21-60.13 57.21S247.59 125.38 247.59 92c0-33.11 24.34-57.21 59.89-57.21S367.62 58.91 367.62 92M434.26 143.15c16.55 0 29.21-16.8 29.21-47.72 0-28.73-13.63-45.77-28.73-45.77-7.3 0-13.64 3.17-20.21 9.25v52.34c0 20.94 5.36 31.89 19.72 31.89m-19.72 28c0 10 1.71 15.34 8 17.28 5.11 1.71 8.76 1 8.76 4.14 0 1.7-1.22 2.92-3.41 2.92h-56.19a2.88 2.88 0 0 1-3.17-2.92c0-2.92 3.41-2.19 7.55-3.89 6.57-2.68 8.28-7.06 8.28-17.53V72.31c0-10.47-2.19-14.37-9.74-17.53-3.89-1.71-7.06-1.46-7.06-4.14 0-4.14 15.1-3.16 47-15.09V52.1c14.36-11.44 26.29-17.29 39-17.29 23.37 0 40.9 19.48 40.9 49.18 0 37.73-25.56 64.27-62.57 64.27a65.5 65.5 0 0 1-17.29-2.44v25.32z"></path>
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
    <header class="bg-dark">
        <div class="container-fluid max-width-1220 ps-4 pe-4 pt-4">

            <div class="row ms-4 me-4">
                <div class="col-12 d-flex justify-content-between">
                    <ul class="list-unstyled d-flex">
                        <li class="ps-3 pe-3 mt-2 mb-2 d-inline-block">
                            <a class="headerLink" href="#">US</a>
                        </li>
                        <li class="ps-3 pe-3 mt-2 mb-2 d-inline-block headerListItemSeparator">
                            <a class="headerLink" href="#">Get $50</a>
                        </li>
                        <li class="ps-3 pe-3 mt-2 mb-2 d-inline-block headerListItemSeparator">
                            <a class="headerLink" href="#">About</a>
                        </li>
                        <li class="ps-3 mt-2 mb-2 d-inline-block headerListItemSeparator">
                            <a class="headerLink" href="#">Stores</a>
                        </li>
                    </ul>
                    <div class="pe-5 d-flex">
                        <a href="https://goop.com/">
                            <svg class="headerLogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494 206"><use href="#goopLogo" /></svg>
                        </a>
                    </div>
                    <ul class="list-unstyled d-flex">
                        <li class="ps-3 pe-3 mt-2">
                            <a class="headerLink" href="#">Log In</a>
                        </li>
                        <li class="ps-3 pe-3 mt-2 headerListItemSeparator">
                            <a class="headerLink" href="#">Sign Up</a>
                        </li>
                        <li class="ps-3 mt-2">
                            <a class="headerLink">
                                <svg viewBox="0 0 24 24" height="22" width="24" class="" aria-label="" fill="" type="big-bag"><path d="M17 6V5C17 3.67392 16.4732 2.40215 15.5355 1.46447C14.5979 0.526784 13.3261 0 12 0C10.6739 0 9.40215 0.526784 8.46447 1.46447C7.52678 2.40215 7 3.67392 7 5V6H0L3.313 22H20.687L24 6H17ZM9 5C9 4.20435 9.31607 3.44129 9.87868 2.87868C10.4413 2.31607 11.2044 2 12 2C12.7956 2 13.5587 2.31607 14.1213 2.87868C14.6839 3.44129 15 4.20435 15 5V6H9V5ZM19.058 20H4.942L2.457 8H7V10H9V8H15V10H17V8H21.543L19.058 20Z"></path></svg>
                                <span class="">3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex ms-3 pt-3">
                    <div id="leftHeaderPart" class="pe-5 invisible">
                        <a href="https://goop.com/">
                            <svg class="headerLogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494 206"><use href="#goopLogo" /></svg>
                        </a>
                    </div>
                    <div style="flex: 1 1 100%;">
                        <form class="input-group">
                            <input type="search" aria-label="Search" placeholder="What can we help you find?" aria-controls="" aria-autocomplete="list" id="BigSearchBarWebKit" autocomplete="off" class="searchInput" value="">
                            <span  id="search-icon" class=""><svg viewBox="0 0 24 24" height="24" width="24" class="searchIconContainer" aria-label="Submit Search" fill="" type="search" role="button"><path d="M23.712 22.368l-7.44-7.44a8.989 8.989 0 0 0 2.064-5.76C18.336 4.128 14.208 0 9.168 0 4.128 0 0 4.128 0 9.168c0 5.04 4.128 9.168 9.168 9.168 2.16 0 4.176-.768 5.76-2.064l7.44 7.44a.948.948 0 0 0 .672.288c.24 0 .48-.096.672-.288a.928.928 0 0 0 0-1.344zM1.92 9.168c0-3.984 3.264-7.248 7.248-7.248 3.984 0 7.248 3.264 7.248 7.248 0 1.92-.768 3.648-1.968 4.944-.048.048-.096.096-.192.144-.096.048-.096.096-.144.192-1.296 1.2-3.024 1.968-4.944 1.968-3.984 0-7.248-3.264-7.248-7.248z"></path></svg>
                            </span>
                        </form>
                    </div>
                    <ul id="rightHeaderPart" class="list-unstyled d-flex invisible">
                        <li class="ps-3 pe-3 mt-2">
                            <a class="headerLink" href="#">Log In</a>
                        </li>
                        <li class="ps-3 pe-3 mt-2 headerListItemSeparator">
                            <a class="headerLink" href="#">Sign Up</a>
                        </li>
                        <li class="ps-3 mt-2">
                            <a class="headerLink">
                                <svg viewBox="0 0 24 24" height="22" width="24" class="" aria-label="" fill="" type="big-bag"><path d="M17 6V5C17 3.67392 16.4732 2.40215 15.5355 1.46447C14.5979 0.526784 13.3261 0 12 0C10.6739 0 9.40215 0.526784 8.46447 1.46447C7.52678 2.40215 7 3.67392 7 5V6H0L3.313 22H20.687L24 6H17ZM9 5C9 4.20435 9.31607 3.44129 9.87868 2.87868C10.4413 2.31607 11.2044 2 12 2C12.7956 2 13.5587 2.31607 14.1213 2.87868C14.6839 3.44129 15 4.20435 15 5V6H9V5ZM19.058 20H4.942L2.457 8H7V10H9V8H15V10H17V8H21.543L19.058 20Z"></path></svg>
                                <span class="">3</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex pt-2 justify-content-center">
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="pe-3">
                            <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#">What's New</a>
                        </li>
                        <li class="ps-3 pe-3 d-flex">
                            <div class="dropdown hoverDropdown">
                                <a class="text-uppercase slideInEffect pb-1 categoryLink" href="#" role="button" id="MadeByGoop" data-bs-toggle="dropdown" aria-expanded="false">
                                    Made By goop
                                </a>

                                <div class="pt-4">
                                    <div class="dropdown-menu hoverDropdownMenu vw-100 position-fixed start-0" aria-labelledby="MadeByGoop">
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
                                                                <a href="https://goop.com/goop-beauty/c/?click_source=nav-3-madebygoop-goopbeauty-shopallgoopbeauty" class="headerDropdownMenuLink">Shop All goop Beauty</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/goop-skincare/?click_source=nav-3-madebygoop-goopbeauty-goopskincare" class="headerDropdownMenuLink">goop Skin Care</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/goopglow/?click_source=nav-3-madebygoop-goopbeauty-goopglow" class="headerDropdownMenuLink">GOOPGLOW</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/goop-genes/?click_source=nav-3-madebygoop-goopbeauty-goopgenes" class="headerDropdownMenuLink">GOOPGENES</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/g-tox/?click_source=nav-3-madebygoop-goopbeauty-gtox" class="headerDropdownMenuLink">G.Tox</a>
                                                            </li>
                                                            <li class="">
                                                                <a href="https://goop.com/goop-bath-soaks/?click_source=nav-3-madebygoop-goopbeauty-goopbathsoaks" class="headerDropdownMenuLink">goop Bath Soaks</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="list-unstyled pe-4">
                                                            <li class="mb-2">
                                                                <span class="text-uppercase fw-bolder">goop Fashion</span>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/g-label/c/?click_source=nav-3-madebygoop-goopfashion-shopallglabelbygoop" class="headerDropdownMenuLink">Shop All G. Label by goop</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/g-label/?click_source=nav-3-madebygoop-goopfashion-glabel" class="headerDropdownMenuLink">G. Label</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/g-label-core-collection/?click_source=nav-3-madebygoop-goopfashion-glabelcore" class="headerDropdownMenuLink">G. Label Core</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/g-label-jewelry/?click_source=nav-3-madebygoop-goopfashion-glabeljewelry" class="headerDropdownMenuLink">G. Label Jewelry</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/g-label-dresses/?click_source=nav-3-madebygoop-goopfashion-glabeldresses" class="headerDropdownMenuLink">G. Label Dresses</a>
                                                            </li>
                                                            <li class="">
                                                                <a href="https://goop.com/goop-x-lacoste?click_source=nav-3-madebygoop-goopfashion-goopxlacoste" class="headerDropdownMenuLink">goop x Lacoste</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="list-unstyled pe-4">
                                                            <li class="mb-2">
                                                                <span class="text-uppercase fw-bolder">goop Wellness</span>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/goop-wellness/c/?click_source=nav-3-madebygoop-goopwellness-shopallgoopwellness" class="headerDropdownMenuLink">Shop All goop Wellness</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/sexual-health/heartthrob-vibrator-review/?click_source=nav-3-madebygoop-goopwellness-heartthrobvibrator" class="headerDropdownMenuLink">Heartthrob Vibrator</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/sexual-health/viva-la-vulva-vibrator-review/?click_source=nav-3-madebygoop-goopwellness-vivalavulvavibrator" class="headerDropdownMenuLink">Viva La Vulva Vibrator</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/sexual-health/goop-double-sided-wand-vibrator-review/?click_source=nav-3-madebygoop-goopwellness-doublesidedwandvibrator" class="headerDropdownMenuLink">Double-Sided Wand Vibrator</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/sexual-health/ultraplush-self-heating-g-spot-vibrator/?click_source=nav-3-madebygoop-goopwellness-ultraplushselfheatinggspotvibrator" class="headerDropdownMenuLink">Ultraplush Self-Heating G-Spot Vibrator</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/sexual-health/dtf-supplement-for-sex-drive/?click_source=nav-3-madebygoop-goopwellness-dtf" class="headerDropdownMenuLink">DTF</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/detox/g-tox-7-day-reset-kit/?click_source=nav-3-madebygoop-goopwellness-gtox7dayresetkit" class="headerDropdownMenuLink">G.Tox 7-Day Reset Kit</a>
                                                            </li>
                                                            <li class="mb-2">
                                                                <a href="https://goop.com/wellness/health/metabolism-boosting-superpowder/?click_source=nav-3-madebygoop-goopwellness-metabolismboostingsuperpowder" class="headerDropdownMenuLink">Metabolism-Boosting Superpowder</a>
                                                            </li>
                                                            <li class="">
                                                                <a href="https://goop.com/wellness/health/goop-wellness-gut-microbiome-superpowder/?click_source=nav-3-madebygoop-goopwellness-gutmicrobiomesuperpowder" class="headerDropdownMenuLink">Gut Microbiome Superpowder</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex">
                                                <a href="https://goop.com/early-access-sign-up/?click_source=nav-2-madebygoop-merchabletile1" class="headerDropdownMenuImageLink">
                                                    <img src="https://goop-img.com/wp-content/uploads/2022/06/beauty-tile-3.29-630x479.jpeg" class="pl-5 headerDropdownMenuImage" />
                                                    <div class="">
                                                        <p class="mt-2">Get Early Access to Our Next Product</p>
                                                    </div>
                                                </a>
                                                <a href="https://goop.com/goop-home/c/?click_source=nav-2-madebygoop-merchabletile2" class="headerDropdownMenuImageLink">
                                                    <img src="https://goop-img.com/wp-content/uploads/2021/10/20210108_EDITORIAL_HOME_GOOP-COOKWARE-10-PIECE-SET_SHOT-01_106-1-1-599x950.jpg" class="pl-5 headerDropdownMenuImage" />
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
                    </ul>
                </div>
            </div>
        </div>
    </header>

</header>
<!--main-->
<main class="container-fluid p-0">
    <!--			hero-->
    <section
        class="ContextualCommerceHeaderstyles__Container-sc-1mqwtsv-0 ContexturlCommerceHeaderstyles__StyledCCHeader-sc-1h62xwr-0 max-width-1680 m-0 px-md-2 py-md-1 row d-flex justify-content-lg-center m-auto p-0"
        data-acsb-main="true" role="main">
        <div class="ContextualCommerceHeaderstyles__TitleWrapper-sc-1mqwtsv-3 d-flex align-items-center m-lg-0 p-0 col-lg-6">
            <img alt="style icon"
                 class="Imagestyles__StyledImage-fduzzi-0 CategoryIconstyles__StyledCategoryIcon-sc-19oix4f-0 col-3"
                 src="https://assets.goop-img.com/client-apps/icons/category/icon-cat-style-2x.png">
            <h1 aria-level="1"
                class="Headingstyles__H1-sc-1gmsk6i-0 jHuvxg ContextualCommerceHeaderstyles__Title-sc-1mqwtsv-2 col-9 col-lg-10 htfZLy"
                role="heading">Designer Clothing</h1>
        </div>

        <ul aria-label="Page Menu"
            class="List__StyledList-sc-1d0tmc3-0 pPHcI ContextualCommerceHeaderstyles__Tabs-sc-1mqwtsv-4 text-decoration-none p-0 m-0 iMXFXb col-12 col-lg-6 d-flex justify-content-center justify-content-md-start justify-content-lg-end m-0 p-0"
            data-acsb-menu="ul" role="navigation">
            <li class="ListItemstyles__StyledListItem-sc-17oosbk-0 ContextualCommerceHeaderstyles__Tab-sc-1mqwtsv-5 lnekFT"
                data-acsb-menu="li" data-acsb-menu-root="true">
                <a class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 ContextualCommerceHeaderstyles__TabLink-sc-1mqwtsv-6 ddILIm"
                   data-acsb-clickable="true"
                   data-acsb-menu="a" data-acsb-menu-root-link="true" data-acsb-navigable="true"
                   data-acsb-now-navigable="true" data-acsb-tooltip="Use ←/→ to navigate"
                   data-analytics-name="cc-nav-content-shop"
                   data-isactive="false" href="index.html">Read + Shop</a>
            </li>
            <li class="ListItemstyles__StyledListItem-sc-17oosbk-0 ContextualCommerceHeaderstyles__Tab-sc-1mqwtsv-5 lnekFT"
                data-acsb-menu="li" data-acsb-menu-root="true">
                <a class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 ContextualCommerceHeaderstyles__TabLink-sc-1mqwtsv-6 ddILIm"
                   data-acsb-clickable="true"
                   data-acsb-menu="a" data-acsb-menu-root-link="true" data-acsb-navigable="true"
                   data-acsb-now-navigable="true" data-analytics-name="cc-nav-content" data-isactive="false"
                   href="index.html">Read Now</a>
            </li>
            <li class="ListItemstyles__StyledListItem-sc-17oosbk-0 ContextualCommerceHeaderstyles__Tab-sc-1mqwtsv-5 lnekFT"
                data-acsb-menu="li" data-acsb-menu-root="true">
                <a class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 ContextualCommerceHeaderstyles__TabLink-sc-1mqwtsv-6 ddILIm"
                   data-acsb-clickable="true"
                   data-acsb-menu="a" data-acsb-menu-root-link="true" data-acsb-navigable="true"
                   data-acsb-now-navigable="true" data-analytics-name="cc-nav-shop" data-isactive="true"
                   href="index.html">Shop Now</a>
            </li>
        </ul>

    </section>
    <!--			option carousel-->
    <p class="bg-grey text-center p-2 d-none d-lg-flex" id="backgroud-grey">h</p>
    <div class="max-width-1680 m-auto carousel carousel-9 carousel-dark row row-cols-9 d-none d-lg-block slide"
         data-bs-ride="false"
         id="optionsCarousel">
        <div class="carousel-inner px-2 overflow-visible" role="listbox">
            <div class="carousel-item active">
                <div class="col-1 text-nowrap">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe" href="#">All
                                Clothing</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="#">Dresses</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="#">Sweaters</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="#">Sweaters</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--                dropdown-->
            <div class="carousel-item">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-0 krKgn">
                            <div class="dropdown-center bg-grey py-2">
                                <button aria-expanded="false"
                                        class="dropdown-toggle-change ikrKgn kWfyGM underline-carousel"
                                        data-bs-toggle="dropdown" type="button">
                                    <span class="CollectionsNavstyles__CollectionTitle-sc-16wrtf8-4 dZeHdq" href="#">Swimwear</span>
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
            <div class="carousel-item">
                <div class="col">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel underline-carousel kWfyGM krKgn ">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="/sleepwear/c/">Sleepwear</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe" href="/tops/c/">Tops</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--                dropdown-->
            <div class="carousel-item">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-0 krKgn">
                            <div class="dropdown-center bg-grey py-2">
                                <button aria-expanded="false"
                                        class="dropdown-toggle-change ikrKgn kWfyGM underline-carousel"
                                        data-bs-toggle="dropdown" type="button">
                                    <span class="CollectionsNavstyles__CollectionTitle-sc-16wrtf8-4 dZeHdq"
                                          href="/bottoms/c/">Bottoms</span>
                                </button>
                                <ul class="CollectionsNavstyles__SubItems-sc-16wrtf8-5 gIFbDq dropdown-menu shadow rounded-0 border-0 p-2"
                                    data-acsb-menu="ul">
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/bottoms/c/">
                                                All Bottoms
                                            </a>
                                        </p>
                                    </li>
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/pants/c/">
                                                Pants
                                            </a>
                                        </p>
                                    </li>
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/denim/c/">
                                                Denim
                                            </a>
                                        </p>
                                    </li>
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/skirts/c/">
                                                Skirts
                                            </a>
                                        </p>
                                    </li>
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz"
                                        data-acsb-menu="li" data-acsb-menu-root="true">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/shorts/c/">
                                                Shorts
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                dropdown-->
            <div class="carousel-item">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-0 krKgn">
                            <div class="dropdown-center bg-grey py-2">
                                <button aria-expanded="false"
                                        class="dropdown-toggle-change ikrKgn kWfyGM underline-carousel"
                                        data-bs-toggle="dropdown" type="button">
                                    <span class="CollectionsNavstyles__CollectionTitle-sc-16wrtf8-4 dZeHdq"
                                          href="/intimates/c/">Intimates</span>
                                </button>
                                <ul class="CollectionsNavstyles__SubItems-sc-16wrtf8-5 hxkfQM dropdown-menu shadow rounded-0 border-0 p-2">
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/intimates/c/">
                                                All Intimates
                                            </a>
                                        </p>
                                    </li>
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/bras/c/">
                                                Bras
                                            </a>
                                        </p>
                                    </li>
                                    <li class="CollectionNavSubItemstyles__SubItem-sc-19hf82t-0 djwyXz">
                                        <p>
                                            <a class="CollectionsNavstyles__SubItemsLink-sc-16wrtf8-6 KhMfA"
                                               href="/panties/c/">
                                                Panties
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="/jumpsuits/c/">Jumpsuits</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-2 text-nowrap">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="/activewear-and-loungewear/c/">Activewear &amp;
                                Loungewear</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-1 text-nowrap">
                    <div class="card bg-grey py-2">
                        <div class="ard-body underline-carousel kWfyGM krKgn">
                            <a class="CollectionsNavstyles__CollectionTitleLink-sc-16wrtf8-3 iOkQPe"
                               href="/jackets-and-coats/c/">Jackets &amp;
                                Coats</a>
                        </div>
                    </div>
                </div>
            </div>
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
                <stong>brand</stong>
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

<!-- footer -->
<footer class="bg-dark">
    <div class="container-fluid pt-4 pb-5 footer">
        <div class="row mb-3">
            <div class="col-12">
                <svg class="logo text-white" viewBox="0 0 494 206" xmlns="http://www.w3.org/2000/svg">
                    <desc>goop</desc>
                    <path d="M41.14 72.79C41.14 94 45.28 104 57.94 104c13.15 0 17.53-10.47 17.53-33.35 0-20.94-4.38-31.16-17-31.16-12.47-.05-17.33 10.42-17.33 33.3m-27.51 97.14c0 13.63 13.88 22.64 40.41 22.64 28.24 0 42.61-8 42.61-20.94 0-8.52-6.57-13.15-19.23-14.36-20.94-1.95-39.42.73-53.32-3.41-6.82 3.65-10.47 9.49-10.47 16.07m93.49-98.6c0 20-16.31 33.84-48 37.49-18.26 1.95-29.22 3.89-29.22 12.41 0 8.76 16.07 7.3 42.61 8 29 .73 44.07 8.76 44.07 29.46 0 23.62-22.64 39-62.81 39-35.06 0-53.8-11-53.8-26.54 0-5.36 2.43-10 7.06-13.88a32.82 32.82 0 0 1 11.69-5.84c-7.03-4.14-10.44-10.43-10.44-18.5 0-16.07 12.66-25.08 38-26.54-24.35-4.38-37-16.07-37-33.6 0-19.72 18.5-36.27 47.72-37.74C59.16 12.9 70.36 0 82.78 0c8 0 13.39 5.6 13.39 12.66 0 8.28-5.6 14.12-13.15 14.12-4.63 0-7.79-2.92-11.44-2.92-6.09 0-9 3.41-9.74 11.44 28.24 1.46 45.28 16.31 45.28 36M150 92c0 35.06 8.52 52.34 26.78 52.34s27-17.28 27-52.34-9-52.59-27-52.59C158.56 39.44 150 57 150 92m86.91 0c0 33.11-24.59 57.21-60.14 57.21S116.92 125.38 116.92 92c0-33.11 24.34-57.21 59.89-57.21S236.95 58.91 236.95 92M280.7 92c0 35.06 8.52 52.34 26.78 52.34s27-17.28 27-52.34-9-52.59-27-52.59C289.22 39.44 280.7 57 280.7 92m86.91 0c0 33.11-24.59 57.21-60.13 57.21S247.59 125.38 247.59 92c0-33.11
				24.34-57.21 59.89-57.21S367.62 58.91 367.62 92M434.26 143.15c16.55 0 29.21-16.8 29.21-47.72 0-28.73-13.63-45.77-28.73-45.77-7.3 0-13.64 3.17-20.21 9.25v52.34c0 20.94 5.36 31.89 19.72 31.89m-19.72 28c0 10 1.71 15.34 8 17.28 5.11 1.71 8.76 1 8.76 4.14 0 1.7-1.22 2.92-3.41 2.92h-56.19a2.88 2.88 0 0 1-3.17-2.92c0-2.92 3.41-2.19 7.55-3.89 6.57-2.68 8.28-7.06 8.28-17.53V72.31c0-10.47-2.19-14.37-9.74-17.53-3.89-1.71-7.06-1.46-7.06-4.14 0-4.14 15.1-3.16 47-15.09V52.1c14.36-11.44 26.29-17.29 39-17.29 23.37 0 40.9 19.48 40.9 49.18 0 37.73-25.56 64.27-62.57 64.27a65.5 65.5 0 0 1-17.29-2.44v25.32z"
                          fill="#fff"></path>
                </svg>
                <sup class="text-white">®</sup>
            </div>
        </div>
        <div class="row mb-2 mb-lg-5">
            <div class="d-flex flex-column flex-lg-row justify-content-between">
                <div class="text-white pt-3 pt-lg-0 expandableSection">
                    <button class="w-100 text-start text-uppercase text-white mb-4 ps-0 heading expandableButton"
                            id="company"
                            value="Company">
                        Company
                    </button>
                    <ul class="list-unstyled d-none d-lg-block" id="companyList">
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/whats-goop/">About goop</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/privacy-cookies-policy/">Policies</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/careers/">Careers</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/goop-press/">goop Press</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/goop-retail-store-locations/">Stores</a>
                        </li>
                    </ul>
                </div>
                <div class="text-white pt-3 pt-lg-0 expandableSection">
                    <button class="w-100 text-start text-uppercase text-white mb-4 ps-0 heading expandableButton"
                            id="customerService"
                            value="Customer Service">
                        Customer Service
                    </button>
                    <ul class="list-unstyled d-none d-lg-block" id="customerServiceList">
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/contact/">Contact Us</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://shop.goop.com/account/">My Account</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://shop.goop.com/order_tracking/new">Track My Order</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/shipping-returns/">Shipping &amp; Returns</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/refer-a-friend/">Give and Get $50</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/faqs/">FAQs</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/subscription-terms-conditions/">Subscription
                                Terms</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/faqs/#donorschoose/">DonorsChoose.org</a>
                        </li>
                    </ul>
                </div>
                <div class="text-white pt-3 pt-lg-0 expandableSection">
                    <button class="w-100 text-start text-uppercase text-white mb-4 ps-0 heading expandableButton"
                            id="explore"
                            value="Explore">
                        Explore
                    </button>
                    <ul class="list-unstyled d-none d-lg-block" id="exploreList">
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/whats-new/c/">Shop</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/beauty/">Beauty</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/food/">Food</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/style/">Style</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/travel/">Travel</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="https://goop.com/wellness/">Wellness</a>
                        </li>
                    </ul>
                </div>
                <div class="pt-3 pt-lg-0">
                    <div class="text-uppercase text-white mb-4 ps-0 heading">Connect with goop</div>
                    <ul class="list-unstyled d-flex d-lg-block flex-row flex-lg-column justify-content-between max-width-600 flex-wrap">
                        <li class="mb-3">
                            <a class="footerLink" href="http://applepodcasts.com/Goop"><i
                                    class="fa-solid fa-podcast fa-lg fa-fw me-1"></i><span class="d-none d-lg-inline">Apple Podcast</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="https://www.facebook.com/goop/"><i
                                    class="fa-brands fa-facebook-f fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Facebook</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="https://twitter.com/goop"><i
                                    class="fa-brands fa-twitter fa-lg fa-fw me-1"></i><span class="d-none d-lg-inline">Twitter</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="https://instagram.com/goop"><i
                                    class="fa-brands fa-instagram fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Instagram</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="https://www.youtube.com/user/goop"><i
                                    class="fa-brands fa-youtube fa-lg fa-fw me-1"></i><span class="d-none d-lg-inline">YouTube</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="https://www.pinterest.com/goop"><i
                                    class="fa-brands fa-pinterest fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Pinterest</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink"
                               href="https://play.spotify.com/user/gooptunes?play=true&amp;utm_source=open.spotify.com&amp;utm_medium=open"><i
                                    class="fa-brands fa-spotify fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Spotify</span></a>
                        </li>
                    </ul>
                </div>
                <div class="separator"></div>
                <div class="order-first order-lg-last pb-4 pb-lg-0 expandableSection">
                    <div class="text-uppercase mb-2 mb-lg-4 text-white heading">Subscribe to our newsletter</div>
                    <div>
                        <div class="">
                            <input aria-label="Enter your email address" class="ps-2 pe-2 me-2 signUpInput"
                                   placeholder="Email Address"
                                   type="email" value="">
                            <button class="text-uppercase text-white ps-2 pe-2 signUpButton" type="submit" value="">Sign
                                Up
                            </button>
                        </div>
                    </div>
                    <span class="mt-2 signUpDisclaimer">By clicking "submit," you agree to receive emails from goop and accept our <a
                            class="footerLinkNoEffect" href="https://goop.com/web-terms-of-use/">web terms of use</a> and <a
                            class="footerLinkNoEffect" href="https://goop.com/privacy-cookies-policy/">privacy and cookie policy</a>.
						<a class="footerLinkNoEffect" href="https://goop.com/the-fine-print-6/">*Terms apply.</a>
					</span>
                    <div class="d-none d-lg-block">
                        <div class="text-uppercase text-white mt-5 mb-2">City Guides</div>
                        <ul class="list-unstyled d-flex">
                            <li class="pe-2">
                                <a class="footerLink" href="https://goop.com/city-guides/los-angeles-itineraries/">Los
                                    Angeles</a>
                            </li>
                            <li class="ps-2 pe-2 listItemSeparator">
                                <a class="footerLink" href="https://goop.com/city-guides/new-york-itineraries/">New
                                    York</a>
                            </li>
                            <li class="ps-2 pe-2 listItemSeparator">
                                <a class="footerLink" href="https://goop.com/city-guides/london-itineraries/">London</a>
                            </li>
                            <li class="ps-2 listItemSeparator">
                                <a class="footerLink" href="https://goop.com/city-guides/paris-itineraries/">Paris</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="list-unstyled d-lg-flex justify-content-lg-center">
                <li class="pe-3 mt-2 d-inline-block">
                    <a class="footerLink" href="https://goop.com/privacy-cookies-policy/">Privacy &amp; Cookies
                        Policy</a>
                </li>
                <li class="ps-3 pe-3 mt-2 d-inline-block listItemSeparator">
                    <a class="footerLink" href="https://goop.com/web-terms-of-use/">Web Terms of Use</a>
                </li>
                <li class="ps-3 pe-3 mt-2 d-inline-block listItemSeparator">
                    <a class="footerLink" href="https://goop.com/data-rights-request-form/">Do Not Sell My
                        Information</a>
                </li>
                <li class="ps-3 mt-2 d-inline-block listItemSeparator">
                    <a class="footerLink" href="https://goop.com/accessibility/">Accessibility</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <span class="text-lg-center fst-italic">©2008-2022 Goop, Inc. All Rights Reserved. goop® is a registered trademark of Goop, Inc. and is registered with the U.S. Patent and Trademark Office.</span>
        </div>
    </div>
</footer>

</body>
</html>
<!--js-->
<script src="./index.js"></script>
<script src="./product.js"></script>
