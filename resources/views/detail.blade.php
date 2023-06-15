@extends('layouts.frontend')

@section('content')
    <main class="container-fluid">
        <div class="row py-lg-3">
            <section class="col-12 col-lg-7 pb-5">
                <!--			links-->
                <article id="link">
                    <ul class="d-flex ps-1">
                        <li class=" Breadcrumbsstyles__Crumb-sc-1gml41e-2 eXwgoR">
                            <a href="./index.js"
                               class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY iICCXR dPeUZv">Shop</a>
                        </li>
                        <li class=" Breadcrumbsstyles__Crumb-sc-1gml41e-2 eXwgoR">
                            <a href="/clothing/c/"
                               class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY iICCXR dPeUZv">Clothing</a>
                        </li>
                        <li class="Breadcrumbsstyles__Crumb-sc-1gml41e-2 eXwgoR">
                            <a href="/dresses/c/"
                               class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY iICCXR dPeUZv">Dresses</a>
                        </li>
                    </ul>
                </article>

                <!--		omschrijving gsm-->
                <article class="col-12 d-lg-none text-center justify-content-center d-flex p-0 m-0 mb-3">

                    <!--			gsm omschrijving art-->
                    <div class="text-center row m-auto">
                        <a href="/mara-hoffman/c/"
                           class=" p-0 Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY iICCXR styles__Brand-gvy2cl-0 hwMBsm Productstyles__StyledBrand-jw9a2y-18 bYxLCt"
                           target="">{{$product->brand->name}}</a>
                        <h1 class=" p-0 Headingstyles__H1-sc-1gmsk6i-0 jHuvxg styles__ProductTitle-sc-98vcgp-0 fgVCbT">
                            Marilyn Dress</h1>
                        <div
                            class="styles__PriceContainer-sc-40crr6-0 fDkzrM d-flex justify-content-center align-items-center">
                            <div class="styles__PriceWrapper-sc-40crr6-3 fBWBhP"><p
                                    class="styles__PriceStyling-sc-40crr6-2 iMOrFR">US $575.00</p></div>
                            <span class="styles__FreeShippingContainer-sc-40crr6-6 dqISby">Free Shipping!</span></div>
                        <p class="afterpay-paragraph"><span class="afterpay-main-text">or 4 interest-free payments of $143.75 with </span>
                            <br>
                            !-- afterpay-->
                            <span class="afterpay-logo-link"><button class="btn border-0 p-1"
                                                                     aria-label="Afterpay logo - Opens a dialog"
                                                                     title="Afterpay logo - Opens a dialog"><svg
                                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet"
                                        width="104" height="36" viewBox="14 12 76 12">
                    <path class="afterpay-logo-badge-background" fill="white"
                          d="m86.00173,35.9321l-68.00064,0c-9.90375,0 -17.93101,-8.02726 -17.93101,-17.93101l0,0c0,-9.90375 8.02726,-17.93101 17.93101,-17.93101l68.00064,0c9.90375,0 17.931,8.02726 17.931,17.93101l0,0c0.00652,9.89724 -8.02725,17.93101 -17.931,17.93101z"></path>
                    <g class="afterpay-logo-badge-lockup">
                      <path
                          d="m88.23074,13.52071l-2.25928,-1.29288l-2.29193,-1.31247c-1.51489,-0.86845 -3.40851,0.22201 -3.40851,1.97197l0,0.29384c0,0.16324 0.08489,0.31342 0.22854,0.39178l1.06435,0.60726c0.29383,0.16978 0.6595,-0.0457 0.6595,-0.38525l0,-0.69868c0,-0.34607 0.37219,-0.56155 0.67256,-0.39178l2.0895,1.20147l2.08298,1.19493c0.30037,0.16977 0.30037,0.60727 0,0.77704l-2.08298,1.19494l-2.0895,1.20146c-0.30037,0.16978 -0.67256,-0.0457 -0.67256,-0.39178l0,-0.34607c0,-1.74997 -1.89362,-2.84696 -3.40851,-1.97198l-2.29193,1.31247l-2.25928,1.29289c-1.52142,0.87498 -1.52142,3.07549 0,3.95047l2.25928,1.29289l2.29193,1.31247c1.51489,0.86845 3.40851,-0.22201 3.40851,-1.97198l0,-0.29383c0,-0.16325 -0.08489,-0.31343 -0.22854,-0.39179l-1.06435,-0.60726c-0.29383,-0.16977 -0.6595,0.04571 -0.6595,0.38525l0,0.69868c0,0.34608 -0.37219,0.56156 -0.67256,0.39179l-2.0895,-1.20147l-2.08298,-1.19494c-0.30037,-0.16977 -0.30037,-0.60726 0,-0.77703l2.08298,-1.19494l2.0895,-1.20147c0.30037,-0.16977 0.67256,0.04571 0.67256,0.39179l0,0.34607c0,1.74996 1.89362,2.84695 3.40851,1.97197l2.29193,-1.31247l2.25928,-1.29288c1.52142,-0.88151 1.52142,-3.0755 0,-3.95048z"></path>
                      <path
                          d="m73.4083,13.95167l-5.28907,10.92421l-2.19398,0l1.9785,-4.08107l-3.11467,-6.84314l2.25275,0l1.99809,4.58386l2.18092,-4.58386l2.18746,0z"></path>
                      <path
                          d="m20.52416,17.83032c0,-1.30594 -0.9468,-2.2201 -2.10909,-2.2201s-2.1091,0.93375 -2.1091,2.2201c0,1.2733 0.94681,2.2201 2.1091,2.2201s2.10909,-0.91416 2.10909,-2.2201m0.01959,3.87865l0,-1.00558c-0.57461,0.69868 -1.43,1.12964 -2.44864,1.12964c-2.12869,0 -3.74152,-1.70425 -3.74152,-4.00271c0,-2.27887 1.67813,-4.01577 3.78723,-4.01577c0.99251,0 1.82832,0.43749 2.40293,1.11658l0,-0.97946l1.90668,0l0,7.7573l-1.90668,0z"></path>
                      <path
                          d="m31.72262,19.98513c-0.66603,0 -0.85539,-0.24813 -0.85539,-0.9011l0,-3.44116l1.22758,0l0,-1.6912l-1.22758,0l0,-1.89361l-1.95239,0l0,1.89361l-2.52047,0l0,-0.7705c0,-0.65297 0.24813,-0.9011 0.93375,-0.9011l0.43096,0l0,-1.50184l-0.94027,0c-1.61284,0 -2.37682,0.52891 -2.37682,2.14175l0,1.03822l-1.08393,0l0,1.68467l1.08393,0l0,6.0661l1.95238,0l0,-6.0661l2.52047,0l0,3.80029c0,1.58019 0.60727,2.26581 2.18746,2.26581l1.00557,0l0,-1.72384l-0.38525,0z"></path>
                      <path
                          d="m38.73553,17.13164c-0.13713,-1.00557 -0.95987,-1.61284 -1.92627,-1.61284c-0.95986,0 -1.75649,0.58768 -1.95238,1.61284l3.87865,0zm-3.89824,1.208c0.13712,1.14923 0.95987,1.8022 2.00462,1.8022c0.82275,0 1.45613,-0.38525 1.82832,-1.00558l2.00462,0c-0.46361,1.64549 -1.93932,2.69677 -3.87865,2.69677c-2.34416,0 -3.98965,-1.64548 -3.98965,-3.98965c0,-2.34417 1.7369,-4.03536 4.03536,-4.03536c2.31152,0 3.98965,1.70425 3.98965,4.03536c0,0.16977 -0.01305,0.33955 -0.0457,0.49626l-5.94857,0z"></path>
                      <path
                          d="m53.26414,17.83032c0,-1.2537 -0.94681,-2.2201 -2.1091,-2.2201c-1.16229,0 -2.1091,0.93375 -2.1091,2.2201c0,1.2733 0.94681,2.2201 2.1091,2.2201c1.16229,0 2.1091,-0.95986 2.1091,-2.2201m-6.14446,7.04556l0,-10.92421l1.90667,0l0,1.00558c0.57462,-0.71174 1.43001,-1.14923 2.44865,-1.14923c2.09603,0 3.74152,1.72384 3.74152,4.00271s-1.67814,4.01578 -3.78723,4.01578c-0.97946,0 -1.78261,-0.38526 -2.34417,-1.03823l0,4.08107l-1.96544,0l0,0.00653z"></path>
                      <path
                          d="m62.09231,17.83032c0,-1.30594 -0.94681,-2.2201 -2.1091,-2.2201c-1.16229,0 -2.1091,0.93375 -2.1091,2.2201c0,1.2733 0.94681,2.2201 2.1091,2.2201c1.16229,0 2.1091,-0.91416 2.1091,-2.2201m0.01959,3.87865l0,-1.00558c-0.57462,0.69868 -1.43001,1.12964 -2.44865,1.12964c-2.12868,0 -3.74152,-1.70425 -3.74152,-4.00271c0,-2.27887 1.67813,-4.01577 3.78723,-4.01577c0.99252,0 1.82832,0.43749 2.40294,1.11658l0,-0.97946l1.90667,0l0,7.7573l-1.90667,0z"></path>
                      <path
                          d="m43.67852,14.70912s0.4832,-0.9011 1.67814,-0.9011c0.50931,0 0.8358,0.1763 0.8358,0.1763l0,1.97851s-0.71827,-0.44402 -1.37777,-0.35261c-0.6595,0.09142 -1.0774,0.69215 -1.0774,1.50184l0,4.59038l-1.97197,0l0,-7.75076l1.90667,0l0,0.75744l0.00653,0z"></path>
                    </g>
                  </svg></button>
					<button id="logo-link2" class="afterpay-link btn p-1 align-text-bottom" tabindex="0"
                            aria-label="Learn More about Afterpay - Opens a dialog"
                            title="Learn More about Afterpay - Opens a dialog"><i
                            class="bi bi-info-circle"></i></button></span></p>
                    </div>
                </article>
                <!--			carousel gsm-->
                <article id="carouselExampleDarkgsm" class="carousel carousel-dark slide col-10 offset-1 d-lg-none p-3"
                         data-bs-ride="false">

                    <div class="carousel-inner mb-4">
                        <div class="carousel-item active">
                            <img alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=300,width=300,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/049/large/open-uri20221121-8145-78sep6?version=1669060795.webp"
                                 class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"
                                 class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"
                                 class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"
                                 class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"
                                 class="d-block w-100">
                        </div>
                        <!--						hart gsm-->
                        <button type="button" class="hartgsm btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModalgsm">
                            <i class="bi bi-heart heart-bold fs-4"></i>
                        </button>
                        <!--			zoom-->
                        <button type="button" class="zoomgsm btn p-0" data-bs-toggle="modal" data-bs-target="#modalgsm">
                            <i class="fs-4 p-2 fa fa-plus-circle"></i>
                        </button>
                    </div>
                    <!--				previeuw gsm-->
                    <div class="carousel-indicators previewgsm d-flex justify-content-evenly m-auto px-3">
                        <div class="imggsm d-flex justify-content-evenly mb-5">
                            <img data-bs-target="#carouselExampleDarkgsm" data-bs-slide-to="0" class="active"
                                 aria-current="true" aria-label="Slide 1" alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/049/large/open-uri20221121-8145-78sep6?version=1669060795.webp">
                            <img type="button" data-bs-target="#carouselExampleDarkgsm" data-bs-slide-to="1"
                                 aria-label="Slide 2" alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"
                                 srcset="">
                            <img type="button" data-bs-target="#carouselExampleDarkgsm" data-bs-slide-to="2"
                                 aria-label="Slide 3" alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"
                                 srcset="">
                            <img type="button" data-bs-target="#carouselExampleDarkgsm" data-bs-slide-to="3"
                                 aria-label="Slide 4" alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"
                                 srcset="">
                            <img type="button" data-bs-target="#carouselExampleDarkgsm" data-bs-slide-to="4"
                                 aria-label="Slide 5" alt="Mara Hoffman Marilyn Dress"
                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"
                                 srcset="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDarkgsm"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDarkgsm"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </article>

                <!-- Modal hart gsm-->
                <div class="modal fade" id="exampleModalgsm" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="text-end">
                                <button type="button" class="btn m-3" data-bs-dismiss="modal" aria-label="Close">
                                    <svg viewBox="0 0 24 24" height="20" width="20"
                                         class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr" aria-label="" fill=""
                                         type="close" aria-hidden="true" data-acsb-hidden="true"
                                         data-acsb-force-hidden="true">
                                        <g>
                                            <path d="M.05 1.04l.99-.99 22.98 22.98-.99.99z">
                                            </path>
                                            <path d="M.05 22.96L23.03-.02l.99.99L1.04 23.95z">
                                            </path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="AuthModalstyles__ModalBody-sko7ow-1 gdArMN">
                                    <h1 class="Headingstyles__H1-sc-1gmsk6i-0 jHuvxg AuthModalstyles__StyledHeading-sko7ow-2 hhZKHy"
                                        role="heading" aria-level="2">Log In
                                    </h1>
                                    <p class="AuthModalstyles__ModalText-sko7ow-3 eCFnju">Log in to your account to save
                                        items to your wish list.</p>
                                    <span class="Text__BaseText-vs2pg6-0 bLYPWY">Don’t have one?
								</span>
                                    <button
                                        class="InlineButtonstyles__BaseButton-b3iiqa-0 InlineButtonstyles__StyledInlineButton-b3iiqa-1 fABAeT AuthModalstyles__StyledInlineButton-sko7ow-11 hvEihu bg-body text-decoration-underline p-0"
                                        href="" type="button" data-acsb-clickable="true" data-acsb-navigable="true"
                                        data-acsb-now-navigable="true" role="button" data-acsb-textual-ops="scroll">Sign
                                        up
                                    </button>
                                    <form class="AuthModalstyles__StyledForm-sko7ow-6 gnqwzR mt-3" action=""
                                          data-acsb-form-uuid="atw5otesll4i" data-acsb-form-type="standard">
                                        <div class="AuthModalstyles__FormRow-sko7ow-9 iUqCEa">
                                            <input type="email" id="email2" placeholder="Email Address" required="true"
                                                   class="AuthModalstyles__InputField-sko7ow-7 jYrnUY" value=""
                                                   data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                   aria-hidden="false" data-acsb-hidden="false"
                                                   data-acsb-validation-uuid="email" data-acsb-field-visible="true"
                                                   aria-required="true" aria-invalid="true" aria-label="Email Address"
                                                   data-acsb-tooltip="Email Address | Required field">
                                        </div>
                                        <div class="AuthModalstyles__FormRow-sko7ow-9 iUqCEa">
                                            <input type="password" placeholder="Password" minlength="6" required="true"
                                                   class="AuthModalstyles__InputField-sko7ow-7 jYrnUY" value=""
                                                   data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                   aria-hidden="false" data-acsb-hidden="false"
                                                   data-acsb-validation-uuid="amybz4i41j9g"
                                                   data-acsb-field-visible="true" aria-required="true"
                                                   aria-invalid="true" aria-label="Password"
                                                   data-acsb-tooltip="Password | Required field">
                                        </div>
                                        <div class="AuthModalstyles__FormRow-sko7ow-9 geDKcO d-flex">
                                            <button
                                                class="InputLabelWithSecondaryTextstyles__Label-bvh17g-0 bWwxQF CheckboxWithLabelstyles__StyledInputLabelWithSecondaryText-sc-1lqy5if-0 gGlTKb AuthModalstyles__StyledCheckboxWithLabel-sko7ow-10 kLypQX"
                                                type="button" width="100" data-acsb-clickable="true"
                                                data-acsb-navigable="true" data-acsb-now-navigable="false"
                                                data-acsb-textual-ops="checkmark" tabindex="-1">
                                                <input type="checkbox" swatchcolor=""
                                                       class="Checkboxstyles__StyledCheckbox-sc-1m6v8xy-0 eFZXLa"
                                                       swatchbordercolor="" name="remember_me"
                                                       data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                       aria-hidden="false" data-acsb-hidden="false"
                                                       data-acsb-validation-uuid="araut0cw9fdj"
                                                       data-acsb-field-visible="true" aria-invalid="false"
                                                       aria-required="true" aria-label="Remember MeForgot Password?"
                                                       placeholder="Remember MeForgot Password?"
                                                       data-acsb-tooltip="Remember MeForgot Password?" required="true">
                                                <div
                                                    class="InputLabelWithSecondaryTextstyles__TextContainer-bvh17g-1 eFSHNl">
                                                    <span class="Text__BaseText-vs2pg6-0 bLYPWY">Remember Me</span>
                                                </div>
                                            </button>
                                            <br>
                                            <button
                                                class="InlineButtonstyles__BaseButton-b3iiqa-0 InlineButtonstyles__StyledInlineButton-b3iiqa-1 fABAeT dhpxAK AuthModalstyles__StyledInlineButton-sko7ow-11 hvEihu text-decoration-underline"
                                                href="" type="button" data-acsb-clickable="true"
                                                data-acsb-navigable="true" data-acsb-now-navigable="true" role="button"
                                                data-acsb-textual-ops="null">Forgot Password?
                                            </button>
                                        </div>
                                        <button type="submit" class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc
										PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ AuthModalstyles__StyledPrimaryButton-sko7ow-8 hIwozP"
                                                value="" data-acsb-clickable="true" data-acsb-navigable="true"
                                                data-acsb-now-navigable="true" role="button"
                                                data-acsb-textual-ops="null">Log In
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal zoom gsm -->
                <div class="modal p-0" id="modalgsm" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="text-end">
                                <button type="button" class="btn" data-bs-dismiss="modal">
                                    <svg viewBox="0 0 24 24" height="20" width="20"
                                         class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr" aria-label="" fill=""
                                         type="close">
                                        <g>
                                            <path d="M.05 1.04l.99-.99 22.98 22.98-.99.99z"></path>
                                            <path d="M.05 22.96L23.03-.02l.99.99L1.04 23.95z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-8 col-md-4 m-auto">
                                <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner col-10 mb-5">
                                        <div class="carousel-item active">
                                            <img alt="Mara Hoffman Marilyn Dress"
                                                 src="https://shop.goop-img.com/cdn-cgi/image/height=300,width=300,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/049/large/open-uri20221121-8145-78sep6?version=1669060795.webp"
                                                 class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img alt="Mara Hoffman Marilyn Dress"
                                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"
                                                 srcset="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img alt="Mara Hoffman Marilyn Dress"
                                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"
                                                 srcset="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img alt="Mara Hoffman Marilyn Dress"
                                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"
                                                 srcset="" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img alt="Mara Hoffman Marilyn Dress"
                                                 src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"
                                                 srcset="" class="d-block w-100">
                                        </div>
                                    </div>
                                    <div class="carousel-indicators d-flex justify-content-evenly m-0">
                                        <div
                                            class="btnmodalgsm d-flex align-items-baseline col-12 justify-content-evenly">
                                            <button data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0"
                                                    class="active bol-modal1 select-modal" aria-current="true"
                                                    aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators3"
                                                    data-bs-slide-to="1" class="bol-modal2"
                                                    aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators3"
                                                    data-bs-slide-to="2" class="bol-modal3"
                                                    aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators3"
                                                    data-bs-slide-to="3" class="bol-modal4"
                                                    aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators3"
                                                    data-bs-slide-to="4" class="bol-modal5"
                                                    aria-label="Slide 5"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--detail laptop-->
                <article id="detail" class="d-none d-lg-block px-lg-5 vh-100">
                    <!--			carousel laptop-->
                    <article id="carouselExampleDark" class="carousel carousel-dark slide rechts" data-bs-ride="false">

                        <div class="carousel-inner mb-4">
                            <div class="carousel-item active">
                                <img alt="{{$product->name}}"
                                     src="{{$product->image->file}}">
                            </div>
{{--                            <div class="carousel-item">--}}
{{--                                <img alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"--}}
{{--                                     class="d-block w-100">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <img alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"--}}
{{--                                     class="d-block w-100">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <img alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"--}}
{{--                                     class="d-block w-100">--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <img alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"--}}
{{--                                     class="d-block w-100">--}}
{{--                            </div>--}}
                        </div>
                        <!--				previeuw laptaop-->
                        <div
                            class="carousel-indicators previewLG d-flex flex-column justify-content-evenly row links col-2">
                            <div class="imglg d-flex col-12 flex-column justify-content-evenly">
                                <img alt="{{$product->name}}"
                                     src="{{$product->image->file}}">
{{--                                <img type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"--}}
{{--                                     aria-label="Slide 2" alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"--}}
{{--                                     srcset="">--}}
{{--                                <img type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"--}}
{{--                                     aria-label="Slide 3" alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"--}}
{{--                                     srcset="">--}}
{{--                                <img type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"--}}
{{--                                     aria-label="Slide 4" alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"--}}
{{--                                     srcset="">--}}
{{--                                <img type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"--}}
{{--                                     aria-label="Slide 5" alt="Mara Hoffman Marilyn Dress"--}}
{{--                                     src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"--}}
{{--                                     srcset="">--}}
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <!--		hart laptop-->
                        <button type="button" class="hartlg btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-heart heart-bold fs-4"></i>
                        </button>

                        <!-- zoom laptop -->
                        <button type="button" class="zoomlg d-none d-lg-block btn" data-bs-toggle="modal"
                                data-bs-target="#modallg">
                            <i class="plus fs-4 p-1 px-2 text-white bi bi-plus-circle"></i>
                        </button>
                    </article>


                    <!-- Modal hart-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="text-end">
                                    <button type="button" class="btn m-3" data-bs-dismiss="modal" aria-label="Close">
                                        <svg viewBox="0 0 24 24" height="20" width="20"
                                             class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr" aria-label=""
                                             fill="" type="close" aria-hidden="true" data-acsb-hidden="true"
                                             data-acsb-force-hidden="true">
                                            <g>
                                                <path d="M.05 1.04l.99-.99 22.98 22.98-.99.99z"></path>
                                                <path d="M.05 22.96L23.03-.02l.99.99L1.04 23.95z"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="AuthModalstyles__ModalBody-sko7ow-1 gdArMN">
                                        <h1 class="Headingstyles__H1-sc-1gmsk6i-0 jHuvxg AuthModalstyles__StyledHeading-sko7ow-2 hhZKHy"
                                            role="heading" aria-level="2">Log In</h1>
                                        <p class="AuthModalstyles__ModalText-sko7ow-3 eCFnju">Log in to your account to
                                            save items to your wish list.</p>
                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Don’t have one?</span>
                                        <button
                                            class="InlineButtonstyles__BaseButton-b3iiqa-0 InlineButtonstyles__StyledInlineButton-b3iiqa-1 fABAeT AuthModalstyles__StyledInlineButton-sko7ow-11 hvEihu bg-body text-decoration-underline p-0"
                                            href="" type="button" data-acsb-clickable="true" data-acsb-navigable="true"
                                            data-acsb-now-navigable="true" role="button" data-acsb-textual-ops="scroll">
                                            Sign up
                                        </button>
                                        <form class="AuthModalstyles__StyledForm-sko7ow-6 gnqwzR mt-3" action=""
                                              data-acsb-form-uuid="atw5otesll4i" data-acsb-form-type="standard">
                                            <div class="AuthModalstyles__FormRow-sko7ow-9 iUqCEa">
                                                <input type="email" id="email" placeholder="Email Address"
                                                       required="true"
                                                       class="AuthModalstyles__InputField-sko7ow-7 jYrnUY" value=""
                                                       data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                       aria-hidden="false" data-acsb-hidden="false"
                                                       data-acsb-validation-uuid="email" data-acsb-field-visible="true"
                                                       aria-required="true" aria-invalid="true"
                                                       aria-label="Email Address"
                                                       data-acsb-tooltip="Email Address | Required field">
                                            </div>
                                            <div class="AuthModalstyles__FormRow-sko7ow-9 iUqCEa">
                                                <input type="password" placeholder="Password" minlength="6"
                                                       required="true"
                                                       class="AuthModalstyles__InputField-sko7ow-7 jYrnUY" value=""
                                                       data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                       aria-hidden="false" data-acsb-hidden="false"
                                                       data-acsb-validation-uuid="amybz4i41j9g"
                                                       data-acsb-field-visible="true" aria-required="true"
                                                       aria-invalid="true" aria-label="Password"
                                                       data-acsb-tooltip="Password | Required field">
                                            </div>
                                            <div class="AuthModalstyles__FormRow-sko7ow-9 geDKcO d-flex">
                                                <button
                                                    class="InputLabelWithSecondaryTextstyles__Label-bvh17g-0 bWwxQF CheckboxWithLabelstyles__StyledInputLabelWithSecondaryText-sc-1lqy5if-0 gGlTKb AuthModalstyles__StyledCheckboxWithLabel-sko7ow-10 kLypQX"
                                                    type="button" width="100" data-acsb-clickable="true"
                                                    data-acsb-navigable="true" data-acsb-now-navigable="false"
                                                    data-acsb-textual-ops="checkmark" tabindex="-1">
                                                    <input type="checkbox" swatchcolor=""
                                                           class="Checkboxstyles__StyledCheckbox-sc-1m6v8xy-0 eFZXLa"
                                                           swatchbordercolor="" name="remember_me"
                                                           data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                           aria-hidden="false" data-acsb-hidden="false"
                                                           data-acsb-validation-uuid="araut0cw9fdj"
                                                           data-acsb-field-visible="true" aria-invalid="false"
                                                           aria-required="true" aria-label="Remember MeForgot Password?"
                                                           placeholder="Remember MeForgot Password?"
                                                           data-acsb-tooltip="Remember MeForgot Password?"
                                                           required="true">
                                                    <div
                                                        class="InputLabelWithSecondaryTextstyles__TextContainer-bvh17g-1 eFSHNl">
                                                        <span class="Text__BaseText-vs2pg6-0 bLYPWY">Remember Me</span>
                                                    </div>
                                                </button>
                                                <button
                                                    class="InlineButtonstyles__BaseButton-b3iiqa-0 InlineButtonstyles__StyledInlineButton-b3iiqa-1 fABAeT dhpxAK AuthModalstyles__StyledInlineButton-sko7ow-11 hvEihu text-decoration-underline"
                                                    href="" type="button" data-acsb-clickable="true"
                                                    data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                    role="button" data-acsb-textual-ops="null">Forgot Password?
                                                </button>
                                            </div>
                                            <button type="submit"
                                                    class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ AuthModalstyles__StyledPrimaryButton-sko7ow-8 hIwozP"
                                                    value="" data-acsb-clickable="true" data-acsb-navigable="true"
                                                    data-acsb-now-navigable="true" role="button"
                                                    data-acsb-textual-ops="null">Log In
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--					modal laptop-->
                    <div class="modal p-0 col-12" id="modallg" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content img-zoom-container">
                                <div class="text-center row">
                                    <div class="col-10 offset-1">
                                        <a href="{{route('productsPerBrand',$product->brand->id)}}"
                                           class=" p-0 Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY iICCXR styles__Brand-gvy2cl-0 hwMBsm Productstyles__StyledBrand-jw9a2y-18 bYxLCt"
                                           target="">{{$product->brand->name}}</a>
                                        <h1 class=" p-0 Headingstyles__H1-sc-1gmsk6i-0 jHuvxg styles__ProductTitle-sc-98vcgp-0 fgVCbT">
                                            {{$product->name}}</h1>
                                    </div>
                                    <button type="button" class="btn col-1" data-bs-dismiss="modal">
                                        <svg viewBox="0 0 24 24" height="20" width="20"
                                             class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr" aria-label=""
                                             fill="" type="close">
                                            <g>
                                                <path d="M.05 1.04l.99-.99 22.98 22.98-.99.99z"></path>
                                                <path d="M.05 22.96L23.03-.02l.99.99L1.04 23.95z"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div class="row mx-3 img-zoom-container">
                                    <div class="col-6">
                                        <div id="carouselExampleDarkmodal"
                                             class="carousel carousel-dark slide rechts fit_modal" data-bs-ride="false">


                                            <div class="carousel-inner fit_modal mb-4 ms-5 col-6">
                                                <div class="carousel-item active">
                                                    <img  alt="{{$product->brand->name}} {{$product->name}}"
                                                         src="{{$product->image->file}}"
                                                         class="d-block w-75">
                                                </div>
                                                <div class="carousel-item">
                                                    <img alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"
                                                         class="d-block w-75">
                                                </div>
                                                <div class="carousel-item">
                                                    <img alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"
                                                         class="d-block w-75">
                                                </div>
                                                <div class="carousel-item">
                                                    <img alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"
                                                         class="d-block w-75">
                                                </div>
                                                <div class="carousel-item">
                                                    <img alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"
                                                         class="d-block w-75">
                                                </div>
                                            </div>
                                            <!--				previeuw laptaop-->
                                            <button class="carousel-control-prev btn-top" type="button"
                                                    data-bs-target="#carouselExampleDarkmodal" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next btn btn-bottom" type="button"
                                                    data-bs-target="#carouselExampleDarkmodal" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                            <div
                                                class="carousel-indicators box previewLGmodal d-flex flex-column justify-content-evenly m-0 row links col-2">
                                                <div
                                                    class="imglgmodal d-flex col-12 flex-column justify-content-evenly">
                                                    <img data-bs-target="#carouselExampleDarkmodal" data-bs-slide-to="0"
                                                         class="active" aria-current="true" aria-label="Slide 1"
                                                         alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=2,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/049/large/open-uri20221121-8145-78sep6?version=1669060795.webp">
                                                    <img type="button" data-bs-target="#carouselExampleDarkmodal"
                                                         data-bs-slide-to="1" aria-label="Slide 2"
                                                         alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/050/large/open-uri20221121-8145-4nu3ng?version=1669060799.webp"
                                                         srcset="">
                                                    <img type="button" data-bs-target="#carouselExampleDarkmodal"
                                                         data-bs-slide-to="2" aria-label="Slide 3"
                                                         alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/051/large/open-uri20221121-8145-p2g21s?version=1669060805.webp"
                                                         srcset="">
                                                    <img type="button" data-bs-target="#carouselExampleDarkmodal"
                                                         data-bs-slide-to="3" aria-label="Slide 4"
                                                         alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/052/large/open-uri20221121-8145-2mlqcg?version=1669060811.webp"
                                                         srcset="">
                                                    <img type="button" data-bs-target="#carouselExampleDarkmodal"
                                                         data-bs-slide-to="4" aria-label="Slide 5"
                                                         alt="Mara Hoffman Marilyn Dress"
                                                         src="https://shop.goop-img.com/cdn-cgi/image/height=960,width=960,dpr=1,format=auto,onerror=redirect,metadata=copyright/spree/images/attachments/000/085/053/large/open-uri20221121-8145-1amqnfv?version=1669060818.webp"
                                                         srcset="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myresult" class="img-zoom-result col-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <!--		omschrijving gsm-->
            <div id="omschrijvinggsm" class="col-12 d-lg-none p-3 mt-5">
                <div class="text-start Productstyles__StyledAddToCartForm-jw9a2y-13 bjaWAm">
                    <div>
                        <p class="kgeFzw">Select Options</p>
                        <p class="ddqQTz text-uppercase">Color<span class="text-capitalize jMqIvg"> — Black</span></p>
                        <div class="VariantPickerstyles__StyledVariantOptionPicker-vvspn3-2 gOPwLh">
                            <p class="AddToCartFormstyles__Subhead-sc-17o2z77-0 VariantPickerstyles__StyledSubhead-vvspn3-9 ddqQTz d-flex justify-content-between">
                                Size
                                <button class="VariantPickerstyles__Button-vvspn3-8 bmHVqN" data-acsb-clickable="true"
                                        data-acsb-navigable="true" data-acsb-now-navigable="true" role="button">Size
                                    Guide
                                </button>
                            </p>
                            <!--						size-->
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 CSKuw" data-acsb-overflower="true"
                                    data-acsb-clickable="true" data-acsb-navigable="true" data-acsb-now-navigable="true"
                                    role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">XS</span>
                            </button>
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 jzSZMb"
                                    data-acsb-overflower="true" data-acsb-clickable="true" data-acsb-navigable="true"
                                    data-acsb-now-navigable="true" role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">S</span>
                            </button>
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 jzSZMb"
                                    data-acsb-overflower="true" data-acsb-clickable="true" data-acsb-navigable="true"
                                    data-acsb-now-navigable="true" role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">M</span>
                            </button>
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 gXMVwD"
                                    data-acsb-overflower="true" data-acsb-clickable="true" data-acsb-navigable="true"
                                    data-acsb-now-navigable="true" role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">L</span>
                            </button>
                        </div>
                    </div>
                    <!--				waitlist-->
                    <p class="AddToCartFormstyles__UnavailableText-sc-17o2z77-8 hujnzU"><b
                            class="AddToCartFormstyles__Bold-sc-17o2z77-9 gldpZt">
                            <strong>Color/Size unavailable?</strong>
                        </b>&nbsp;Select size to add to waitlist.</p>
                    <div class="AddToCartFormstyles__FlexContainer-sc-17o2z77-2 kiJDwz">
                        <div class="AddToCartFormstyles__QuantityContainer-sc-17o2z77-3 hSXeLi">
                            <p class="AddToCartFormstyles__Subhead-sc-17o2z77-0 ddqQTz">Quantity</p>
                            <div class="QuantityInputstyles__QuantityInputWrapper-sc-1mnnxw1-0 jJLARx">
                                <button type="button"
                                        class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc QuantityInputstyles__QuantityButton-sc-1mnnxw1-1 hheyrk"
                                        data-delta="-1" value="" disabled="" data-acsb-clickable="true"
                                        data-acsb-navigable="true" data-acsb-now-navigable="true" role="button">
                                    <span class="acsb-sr-only" data-acsb-sr-only="true" data-acsb-force-visible="true"
                                          aria-label=" Decrease quantity by 1 " aria-hidden="false"
                                          data-acsb-hidden="false"></span>
                                    <svg viewBox="0 0 24 24" height="24" width="24"
                                         class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr QuantityInputstyles__QuantityButtonIcon-sc-1mnnxw1-2 fMvPBf"
                                         aria-label="" fill="" type="minus" aria-hidden="true" data-acsb-hidden="true"
                                         data-acsb-force-hidden="true">
                                        <path d="M7,11.5h8v1H7V11.5z"></path>
                                    </svg>
                                </button>
                                <span aria-label="The current quantity is"
                                      class="QuantityInputstyles__Quantity-sc-1mnnxw1-4 kYDzoa">1</span>
                                <button type="button"
                                        class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc QuantityInputstyles__QuantityButton-sc-1mnnxw1-1 hheyrk"
                                        data-delta="1" value="" disabled="" data-acsb-clickable="true"
                                        data-acsb-navigable="true" data-acsb-now-navigable="true" role="button">
                                    <span class="acsb-sr-only" data-acsb-sr-only="true" data-acsb-force-visible="true"
                                          aria-label=" Increase quantity by 1 " aria-hidden="false"
                                          data-acsb-hidden="false"></span>
                                    <svg viewBox="0 0 24 24" height="24" width="24"
                                         class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr QuantityInputstyles__QuantityButtonIcon-sc-1mnnxw1-2 QuantityInputstyles__QuantityButtonIconPlus-sc-1mnnxw1-3 fMvPBf kKikUY"
                                         aria-label="" fill="" type="plus" aria-hidden="true" data-acsb-hidden="true"
                                         data-acsb-force-hidden="true">
                                        <g>
                                            <path d="M11 8h1v9h-1V8z"></path>
                                            <path d="M7 12h9v1H7v-1z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <!--						max aantal-->
                            <div class="QuantityInputstyles__QuantityNotification-sc-1mnnxw1-5 drwJIz">
                                <em>Maximum available</em>
                            </div>
                        </div>
                        <!--					ships to met vlaggen niet zichtbaar-->
                        <div class="AddToCartFormstyles__ShippingTargetsContainer-sc-17o2z77-4 gKzGnC"
                             style="display: none !important;" aria-hidden="true" data-acsb-hidden="true"><p
                                class="AddToCartFormstyles__Subhead-sc-17o2z77-0 ddqQTz">Ships to</p>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 gDBSQy"><img
                                        src="//cdn.goop-assets.com/assets/flags/us-6c02c98dcd25ac6a10c4f65106d5312c6a6dbb6c580cbae75b960610119b0d96.png"
                                        alt="United States"
                                        class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 epTHvL"></div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">US</div>
                            </div>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 gDBSQy"><img
                                        src="//cdn.goop-assets.com/assets/flags/ca-f4b41b03b0117cdb67fbb904f51c2e266bc6dcbf69f4f778a5f0791a0bda4613.png"
                                        alt="Canada" class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 epTHvL">
                                </div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">CA</div>
                            </div>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 dnGeei"><img
                                        src="//cdn.goop-assets.com/assets/flags/eu-ec9ddc96e35d169c6178949e6b78242645c6271e361dbd926ad94c09b26f607f.png"
                                        alt="Europe" class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 kecplJ">
                                </div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">EU</div>
                            </div>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 dnGeei"><img
                                        src="//cdn.goop-assets.com/assets/flags/uk-e0cf8e5dde0fa6ff12559411d55d4f7929b7b16e52098a300f64e46968f458e9.png"
                                        alt="United Kingdom"
                                        class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 kecplJ"></div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">UK</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--			btn div-->
                <div id="addToBagButtonOnPage" class="text-start col-12 mt-3">
                    <div data-cy="add-to-btn-container"
                         class="AddToCartBtnstyles__AddToBtnContainer-sc-1m28s06-0 hTTyJb">
                        <!--					add do bag-->
                        <button type="button"
                                class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ LoadingButtonstyles__StyledLoadingButton-sc-1bnpwr4-0 jaXJCb Productstyles__StyledLoadingButton-jw9a2y-15 cZinvQ m-0 lgLNaJ zUICG"
                                id="add-to-button-static1" value="" data-acsb-clickable="true"
                                data-acsb-navigable="true" data-acsb-now-navigable="true" role="button"><span
                                class="LoadingButtonstyles__ContentWrapper-sc-1bnpwr4-1 NbHNL">Add to Bag</span>
                        </button>
                        <!--					waitlist-->
                        <button type="submit"
                                class="d-none Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ Productstyles__AddToBtn-jw9a2y-16 cZinvQ m-0 lgLNaJ zUICG"
                                value="" data-acsb-clickable="true" data-acsb-navigable="true"
                                data-acsb-now-navigable="true" aria-hidden="false" data-acsb-hidden="false"
                                role="button">ADD TO WAITLIST
                        </button>
                    </div>
                </div>
                <!--					add to bag sticky bottom-->
                <div id="addToBagStickyButton" class="vast w-100 text-center bg-white p-2">
                    <button type="button"
                            class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ LoadingButtonstyles__StyledLoadingButton-sc-1bnpwr4-0 jaXJCb Productstyles__StyledLoadingButton-jw9a2y-15 cZinvQ m-0 lgLNaJ zUICG"
                            id="add-to-button-static2" value="" data-acsb-clickable="true" data-acsb-navigable="true"
                            data-acsb-now-navigable="true" role="button"><span
                            class="LoadingButtonstyles__ContentWrapper-sc-1bnpwr4-1 NbHNL">Add to Bag</span></button>
                </div>
                <div class="text-start col-11 offset-1 mt-3">
                    <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample1">
                        <div class="accordion-item border-start-0 border-end-0 ">
                            <h2 class="accordion-header border-0" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="true"
                                        aria-controls="collapseOne1">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP">
                                        Product Details</h2>
                                </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF"><p>Done in a
                                        blend of GOTS-certified organic cotton and Lycra in a thick ribbed knit, this
                                        sweaterdress hugs the body in all the right places. It has sculptural
                                        bracelet-length sleeves and a low-cut sweetheart neckline (play it up with a
                                        chain or two). And it’s done in an inky-black hue that handles the
                                        desk-to-dinner shuffle with ease.</p>
                                    <ul>
                                        <li>95% organic cotton, 5% lycra</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingTwo1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo1" aria-expanded="false"
                                        aria-controls="collapseTwo1">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">Fit &amp; Care</h2>
                                </button>
                            </h2>
                            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample1">
                                <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    <div class="Drawerstyles__AdminHTML-sc-1c4yude-4">
                                        <ul>
                                            <li>Hand wash</li>
                                            <li>Model is 5’11” with 34” bust, 25” waist, 37” hips, and is wearing a size
                                                S
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingThree1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree1" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">About The Brand</h2>
                                </button>
                            </h2>
                            <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                                 data-bs-parent="#accordionExample1">
                                <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    <div class="Drawerstyles__AdminHTML-sc-1c4yude-4">Mara Hoffman founded her eponymous
                                        beachwear label in 2002 after graduating from the Parsons School of Design.
                                        Known for bold hues, color-blocking, and wanderlust-inducing designs, her
                                        eclectic suits and fashion-forward cover-ups not only push the envelope
                                        sartorially speaking, but sustainability-wise, too—from eco-conscious materials,
                                        right down to the fabric scraps she repurposes for trimmings and add-ons.
                                    </div>
                                    <span class="Accordionstyles__BrowseMore-sc-1me492j-2 DTTpg">Browse more <a
                                            href="/mara-hoffman/c/"
                                            class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY styles__Brand-gvy2cl-0 hwMBsm Accordionstyles__StyledBrand-sc-1me492j-3 text-decoration-underline"
                                            target="" data-acsb-clickable="true" data-acsb-navigable="true"
                                            data-acsb-now-navigable="true" data-acsb-textual-ops="null">Mara Hoffman</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingFour1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour1" aria-expanded="false"
                                        aria-controls="collapseFour1">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">Shipping &amp; Returns</h2>
                                </button>
                            </h2>
                            <div id="collapseFour1" class="accordion-collapse collapse hmhmhU"
                                 aria-labelledby="headingFour1" data-bs-parent="#accordionExample">
                                <div class="accordion-body Drawerstyles__AdminHTML-sc-1c4yude-4 ">Returns are accepted
                                    ​on this product <strong>within 30 days</strong> of receipt. Item must be returned
                                    unused, with tags, in its original packaging, along with a completed return
                                    form.<br><a href="http://goop.com/shipping-returns/" data-acsb-clickable="true"
                                                data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                data-acsb-textual-ops="address"><em><u>View complete return details
                                                »</u></em></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--				omschrijving laptop-->
            <div id="omschrijvingLg" class="col-5 d-none d-lg-block p-0 vh-100 ">
                <div class="text-start col-11 offset-1 p-0">
                    <a href="{{route('productsPerBrand', $product->brand->id)}}"
                       class=" p-0 Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY iICCXR styles__Brand-gvy2cl-0 hwMBsm Productstyles__StyledBrand-jw9a2y-18 bYxLCt"
                       target="">{{$product->brand->name}}</a>
                    <h1 class=" p-0 Headingstyles__H1-sc-1gmsk6i-0 jHuvxg styles__ProductTitle-sc-98vcgp-0 fgVCbT">
                        {{$product->name}}</h1>
                    <div class="styles__PriceContainer-sc-40crr6-0 fDkzrM d-flex align-items-center">
                        <div class="styles__PriceWrapper-sc-40crr6-3 fBWBhP"><p
                                class="styles__PriceStyling-sc-40crr6-2 iMOrFR">€ {{$product->price}}</p></div>
                        <span class="styles__FreeShippingContainer-sc-40crr6-6 dqISby">Free Shipping!</span></div>

                </div>
                <div class="text-start col-11 offset-1  Productstyles__StyledAddToCartForm-jw9a2y-13 bjaWAm">
                    <div>
                        <p class="kgeFzw">Select Options</p>
                        <p class="ddqQTz text-uppercase">Color<span class="text-capitalize jMqIvg"> {{$product->color->name}}</span></p>
                        <div class="VariantPickerstyles__StyledVariantOptionPicker-vvspn3-2 gOPwLh">
                            <p class="AddToCartFormstyles__Subhead-sc-17o2z77-0 VariantPickerstyles__StyledSubhead-vvspn3-9 ddqQTz d-flex justify-content-between">
                                Size
                                <button class="VariantPickerstyles__Button-vvspn3-8 bmHVqN" data-acsb-clickable="true"
                                        data-acsb-navigable="true" data-acsb-now-navigable="true" role="button">Size
                                    Guide
                                </button>
                            </p>
                            <!--						size-->
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 CSKuw" data-acsb-overflower="true"
                                    data-acsb-clickable="true" data-acsb-navigable="true" data-acsb-now-navigable="true"
                                    role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">XS</span>
                            </button>
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 jzSZMb"
                                    data-acsb-overflower="true" data-acsb-clickable="true" data-acsb-navigable="true"
                                    data-acsb-now-navigable="true" role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">S</span>
                            </button>
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 jzSZMb"
                                    data-acsb-overflower="true" data-acsb-clickable="true" data-acsb-navigable="true"
                                    data-acsb-now-navigable="true" role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">M</span>
                            </button>
                            <button class="VariantPickerstyles__SwatchButton-vvspn3-3 gXMVwD"
                                    data-acsb-overflower="true" data-acsb-clickable="true" data-acsb-navigable="true"
                                    data-acsb-now-navigable="true" role="button"><span
                                    class="VariantPickerstyles__SwatchText-vvspn3-6 hjXHYX">L</span>
                            </button>
                        </div>
                    </div>
                    <!--				waitlist-->
                    <p class="AddToCartFormstyles__UnavailableText-sc-17o2z77-8 hujnzU"><b
                            class="AddToCartFormstyles__Bold-sc-17o2z77-9 gldpZt">
                            <strong>Color/Size unavailable?</strong>
                        </b>&nbsp;Select size to add to waitlist.</p>
                    <div class="AddToCartFormstyles__FlexContainer-sc-17o2z77-2 kiJDwz">
                        <div class="AddToCartFormstyles__QuantityContainer-sc-17o2z77-3 hSXeLi">
                            <p class="AddToCartFormstyles__Subhead-sc-17o2z77-0 ddqQTz">Quantity</p>
                            <div class="QuantityInputstyles__QuantityInputWrapper-sc-1mnnxw1-0 jJLARx">
                                <button type="button"
                                        class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc QuantityInputstyles__QuantityButton-sc-1mnnxw1-1 hheyrk"
                                        data-delta="-1" value="" disabled="" data-acsb-clickable="true"
                                        data-acsb-navigable="true" data-acsb-now-navigable="true" role="button">
                                    <span class="acsb-sr-only" data-acsb-sr-only="true" data-acsb-force-visible="true"
                                          aria-label=" Decrease quantity by 1 " aria-hidden="false"
                                          data-acsb-hidden="false"></span>
                                    <svg viewBox="0 0 24 24" height="24" width="24"
                                         class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr QuantityInputstyles__QuantityButtonIcon-sc-1mnnxw1-2 fMvPBf"
                                         aria-label="" fill="" type="minus" aria-hidden="true" data-acsb-hidden="true"
                                         data-acsb-force-hidden="true">
                                        <path d="M7,11.5h8v1H7V11.5z"></path>
                                    </svg>
                                </button>
                                <span aria-label="The current quantity is"
                                      class="QuantityInputstyles__Quantity-sc-1mnnxw1-4 kYDzoa">1</span>
                                <button type="button"
                                        class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc QuantityInputstyles__QuantityButton-sc-1mnnxw1-1 hheyrk"
                                        data-delta="1" value="" disabled="" data-acsb-clickable="true"
                                        data-acsb-navigable="true" data-acsb-now-navigable="true" role="button">
                                    <span class="acsb-sr-only" data-acsb-sr-only="true" data-acsb-force-visible="true"
                                          aria-label=" Increase quantity by 1 " aria-hidden="false"
                                          data-acsb-hidden="false"></span>
                                    <svg viewBox="0 0 24 24" height="24" width="24"
                                         class="SvgIconstyles__StyledSvgIcon-sc-1h1x60g-0 hqtITr QuantityInputstyles__QuantityButtonIcon-sc-1mnnxw1-2 QuantityInputstyles__QuantityButtonIconPlus-sc-1mnnxw1-3 fMvPBf kKikUY"
                                         aria-label="" fill="" type="plus" aria-hidden="true" data-acsb-hidden="true"
                                         data-acsb-force-hidden="true">
                                        <g>
                                            <path d="M11 8h1v9h-1V8z"></path>
                                            <path d="M7 12h9v1H7v-1z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <!--						max aantal-->
                            <div class="QuantityInputstyles__QuantityNotification-sc-1mnnxw1-5 drwJIz">
                                <em>Maximum available</em>
                            </div>
                        </div>
                        <!--					ships to met vlaggen niet zichtbaar-->
                        <div class="AddToCartFormstyles__ShippingTargetsContainer-sc-17o2z77-4 gKzGnC"
                             style="display: none !important;" aria-hidden="true" data-acsb-hidden="true"><p
                                class="AddToCartFormstyles__Subhead-sc-17o2z77-0 ddqQTz">Ships to</p>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 gDBSQy"><img
                                        src="//cdn.goop-assets.com/assets/flags/us-6c02c98dcd25ac6a10c4f65106d5312c6a6dbb6c580cbae75b960610119b0d96.png"
                                        alt="United States"
                                        class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 epTHvL"></div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">US</div>
                            </div>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 gDBSQy"><img
                                        src="//cdn.goop-assets.com/assets/flags/ca-f4b41b03b0117cdb67fbb904f51c2e266bc6dcbf69f4f778a5f0791a0bda4613.png"
                                        alt="Canada" class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 epTHvL">
                                </div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">CA</div>
                            </div>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 dnGeei"><img
                                        src="//cdn.goop-assets.com/assets/flags/eu-ec9ddc96e35d169c6178949e6b78242645c6271e361dbd926ad94c09b26f607f.png"
                                        alt="Europe" class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 kecplJ">
                                </div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">EU</div>
                            </div>
                            <div class="ShippingFlagstyles__ShippingFlagContainer-vfhz03-2 geSrDp">
                                <div class="ShippingFlagstyles__ShippingFlagImageWrapper-vfhz03-3 dnGeei"><img
                                        src="//cdn.goop-assets.com/assets/flags/uk-e0cf8e5dde0fa6ff12559411d55d4f7929b7b16e52098a300f64e46968f458e9.png"
                                        alt="United Kingdom"
                                        class="ShippingFlagstyles__ShippingFlagImage-vfhz03-0 kecplJ"></div>
                                <div class="ShippingFlagstyles__ShippingFlagLabel-vfhz03-1 kindOh">UK</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-start col-11 offset-1 mt-3">
                    <div data-cy="add-to-btn-container"
                         class="AddToCartBtnstyles__AddToBtnContainer-sc-1m28s06-0 hTTyJb">
                        <!--					add do bag-->
                        <a href="{{route('addToCart', $product->id)}}" class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ LoadingButtonstyles__StyledLoadingButton-sc-1bnpwr4-0 jaXJCb Productstyles__StyledLoadingButton-jw9a2y-15 cZinvQ m-0 text-centered"> <span
                                class="LoadingButtonstyles__ContentWrapper-sc-1bnpwr4-1 NbHNL">Add to Bag</span>
                        </a>
                        <br>
{{--                        <button type="button"--}}
{{--                                class="Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ LoadingButtonstyles__StyledLoadingButton-sc-1bnpwr4-0 jaXJCb Productstyles__StyledLoadingButton-jw9a2y-15 cZinvQ m-0"--}}
{{--                                id="add-to-button-static" value="" data-acsb-clickable="true" data-acsb-navigable="true"--}}
{{--                                data-acsb-now-navigable="true" role="button"><span--}}
{{--                                class="LoadingButtonstyles__ContentWrapper-sc-1bnpwr4-1 NbHNL">Add to Bag</span>--}}
{{--                        </button>--}}
                        <!--					waitlist-->
                        <button type="submit"
                                class="d-none Button__ButtonBase-sc-1f89saf-0 Button__StyledButton-sc-1f89saf-1 dUTcMc PrimaryButtonstyles__StyledButton-sc-19dqr27-0 lgLNaJ Productstyles__AddToBtn-jw9a2y-16 cZinvQ m-0"
                                value="" data-acsb-clickable="true" data-acsb-navigable="true"
                                data-acsb-now-navigable="true" aria-hidden="false" data-acsb-hidden="false"
                                role="button">ADD TO WAITLIST
                        </button>
                    </div>
                </div>
                <div class="text-start col-11 offset-1 mt-3">
                    <div class="accordion border-0 mb-5 accordionArrow" id="accordionExample">
                        <div class="accordion-item border-start-0 border-end-0 ">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP">
                                        Product Details</h2>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body ProductDetailsstyles__Text-sc-1osiovg-2 ckoXeF"><p>Done in a
                                        blend of GOTS-certified organic cotton and Lycra in a thick ribbed knit, this
                                        sweaterdress hugs the body in all the right places. It has sculptural
                                        bracelet-length sleeves and a low-cut sweetheart neckline (play it up with a
                                        chain or two). And it’s done in an inky-black hue that handles the
                                        desk-to-dinner shuffle with ease.</p>
                                    <ul>
                                        <li>95% organic cotton, 5% lycra</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">Fit &amp; Care</h2>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    <div class="Drawerstyles__AdminHTML-sc-1c4yude-4">
                                        <ul>
                                            <li>Hand wash</li>
                                            <li>Model is 5’11” with 34” bust, 25” waist, 37” hips, and is wearing a size
                                                S
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">About The Brand</h2>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body Drawerstyles__DrawerContent-sc-1c4yude-5 ckoXeF"
                                     data-acsb-overflower="true" aria-hidden="false" data-acsb-hidden="false">
                                    <div class="Drawerstyles__AdminHTML-sc-1c4yude-4">Mara Hoffman founded her eponymous
                                        beachwear label in 2002 after graduating from the Parsons School of Design.
                                        Known for bold hues, color-blocking, and wanderlust-inducing designs, her
                                        eclectic suits and fashion-forward cover-ups not only push the envelope
                                        sartorially speaking, but sustainability-wise, too—from eco-conscious materials,
                                        right down to the fabric scraps she repurposes for trimmings and add-ons.
                                    </div>
                                    <span class="Accordionstyles__BrowseMore-sc-1me492j-2 DTTpg">Browse more <a
                                            href="/mara-hoffman/c/"
                                            class="Text__BaseText-vs2pg6-0 Link__StyledLink-sc-7p0xb2-0 bLYPWY styles__Brand-gvy2cl-0 hwMBsm Accordionstyles__StyledBrand-sc-1me492j-3 text-decoration-underline"
                                            target="" data-acsb-clickable="true" data-acsb-navigable="true"
                                            data-acsb-now-navigable="true" data-acsb-textual-ops="null">Mara Hoffman</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-start-0 border-end-0">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <h2 class="Headingstyles__H2-sc-1gmsk6i-1 fYdWWG Drawerstyles__DrawerHeader-sc-1c4yude-2 ffPZmP"
                                        role="heading" aria-level="2">Shipping &amp; Returns</h2>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse hmhmhU"
                                 aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body Drawerstyles__AdminHTML-sc-1c4yude-4 ">Returns are accepted
                                    ​on this product <strong>within 30 days</strong> of receipt. Item must be returned
                                    unused, with tags, in its original packaging, along with a completed return
                                    form.<br><a href="http://goop.com/shipping-returns/" data-acsb-clickable="true"
                                                data-acsb-navigable="true" data-acsb-now-navigable="true"
                                                data-acsb-textual-ops="address"><em><u>View complete return details
                                                »</u></em></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="tabmerk" class="row mt-5 p-0">
            <ul class="nav nav-tabs max-width-1140 m-auto p-0" id="myTab" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link active text-dark dUTcMc BUVMf" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true" aria-label="Gwyneth's Gift List" value="">More Mara Hoffman
                    </button>

                </li>

            </ul>
            <div class="tab-content p-0" id="myTabContent">
                <!--		eerste tab-->
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="false">

                        <!--				carousel-->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner Items_container">
                            <div class="carousel-item active">
                                <!--							eerste carousel-->
                                <!--									eerste card-->
                                <div class="d-flex justify-content-evenly mb-4 pb-5">
                                    <div class="card flex-column">
                                        <span class="text-end">New</span>
                                        <img alt="Dr. Barbara Sturm The Serum House"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/475/large/open-uri20221013-13527-ustlxo?version=1665687700"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Dr. Barbara Sturm</span>
                                                <a href="https://goop.com/dr-barbara-sturm-the-serum-house/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">The Serum
                                                    House</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $470.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card">
                                        <span class="ProductListCardstyles__Badge-g09iyn-13 jisFkc">Exclusive</span>
                                        <img alt="LYMA LYMA Laser Starter Kit"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/080/110/large/open-uri20220708-31495-1lt0yp0?version=1657297496"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">LYMA</span>
                                                <br>
                                                <a href="https://goop.com/lyma-lyma-laser-starter-kit/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">LYMA Laser
                                                    Starter Kit</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $2,700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card">
                                        <img alt="Caddis Hooper Glasses"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/684/large/open-uri20221019-14-ytvs5d?version=1666208981"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Caddis</span>
                                                <br>
                                                <a href="https://goop.com/caddis-hooper-glasses/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Hooper
                                                    Glasses</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--												vierde card-->
                                    <div class="card">
                                        <img alt="LUXTON Down Jumpsuit No. 2.1"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/723/large/open-uri20221019-10-8x2svw?version=1666209864"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">LUXTON</span><a
                                                    href="https://goop.com/luxton-down-jumpsuit-no-2-1/p/"
                                                    class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Down Jumpsuit
                                                    No. 2.1</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $1,295.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--							einde inhoud eerste carousel-->
                            </div>
                            <div class="carousel-item">
                                <!--							tweed carousel-->
                                <!--									eerste card-->
                                <div class="d-flex justify-content-evenly mb-4 pb-5">
                                    <div class="card">
                                        <img alt="Moonsisters Moon Calendar 2023"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/084/256/large/open-uri20221026-23-aqv0lx?version=1666759672"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Moonsisters</span>
                                                <br>
                                                <a href="https://goop.com/moonsisters-moon-calendar-2023/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Moon Calendar
                                                    2023</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $39.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card">
                                        <img alt="Loftie Loftie Lamp"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/019/large/open-uri20221006-12930-cc4i73?version=1665081436"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Loftie</span>
                                                <br>
                                                <a href="https://goop.com/loftie-lamp/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Loftie Lamp</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $275.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card">
                                        <img alt="Ven Store Essential Cashmere Travel Set"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/804/large/open-uri20221019-10-6mnahr?version=1666211420"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Ven Store</span>
                                                <br>
                                                <a href="https://goop.com/ven-store-essential-cashmere-travel-set/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Essential
                                                    Cashmere Travel Set</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--												vierde card-->
                                    <div class="card">
                                        <img alt="Toteme Signature Monogram Silk Scarf"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/795/large/open-uri20221019-32193-op0275?version=1666211239"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Toteme</span>
                                                <br>
                                                <a href="https://goop.com/toteme-signature-monogram-silk-scarf/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Signature
                                                    Monogram Silk Scarf</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $220.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--						einde tweede carousel-->
                            <div class="carousel-item">
                                <!--							derde carousel-->
                                <!--									eerste card-->
                                <div class="d-flex justify-content-evenly mb-4 pb-5">
                                    <div class="card">
                                        <img alt="POJ Studio DIY Incense Kit"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/073/082/large/open-uri20211022-14612-91h1t2?version=1634927516"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">POJ Studio</span>
                                                <br>
                                                <a href="https://goop.com/poj-studio-diy-incense-kit/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">DIY Incense
                                                    Kit</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $52.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card">
                                        <img alt="J. Hannah Nail Polish Set"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/084/248/large/open-uri20221026-14-10v4uvp?version=1666759175"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">J. Hannah</span>
                                                <br>
                                                <a href="https://goop.com/j-hannah-nail-polish-set/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Nail Polish
                                                    Set</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $56.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card">
                                        <img alt="Ga.Ma. Italy Professional IQ Perfetto Hair Dryer"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/071/938/large/open-uri20211008-14033-1d5bnp7?version=1633729599"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Ga.Ma. Italy Professional</span>
                                                <br>
                                                <a href="https://goop.com/ga-ma-italy-professional-iq-perfetto/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">IQ Perfetto
                                                    Hair Dryer</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $399.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--												vierde card-->
                                    <div class="card">
                                        <img alt="Dr. Dennis Gross DRx SpectraLite™ FaceWare Pro"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/084/343/large/open-uri20221026-31981-179f60w?version=1666808127"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Dr. Dennis Gross</span>
                                                <br>
                                                <a href="https://goop.com/dr-dennis-gross-drx-spectralite-faceware-pro/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">DRx
                                                    SpectraLite™ FaceWare Pro</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $435.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--							einde inhoud eerste carousel-->
                            </div>
                        </div>
                        <!--				pijltjes naast carousel-->
                        <button class="carousel-control-prev pijl d-none d-lg-block" type="button"
                                data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next pijl d-none d-lg-block" type="button"
                                data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        </section>
        <section id="tabrecently" class="row p-0">
            <ul class="nav nav-tabs max-width-1140 m-auto p-0" id="myTab2" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link active text-dark dUTcMc BUVMf" id="home-tab2" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true" aria-label="Gwyneth's Gift List" value="">Recently Viewed
                    </button>
                </li>

            </ul>
            <div class="tab-content p-0" id="myTabContent2">
                <!--		eerste tab-->
                <div class="tab-pane fade show active" id="home-tab-pane2" role="tabpanel" aria-labelledby="home-tab"
                     tabindex="0">
                    <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="false">

                        <!--				carousel-->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner Items_container">
                            <div class="carousel-item active">
                                <!--							eerste carousel-->
                                <!--									eerste card-->
                                <div class="d-flex justify-content-evenly mb-4 pb-5">
                                    <div class="card flex-column">
                                        <span class="text-end">New</span>
                                        <img alt="Dr. Barbara Sturm The Serum House"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/475/large/open-uri20221013-13527-ustlxo?version=1665687700"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Dr. Barbara Sturm</span>
                                                <a href="https://goop.com/dr-barbara-sturm-the-serum-house/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">The Serum
                                                    House</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $470.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card">
                                        <span class="ProductListCardstyles__Badge-g09iyn-13 jisFkc">Exclusive</span>
                                        <img alt="LYMA LYMA Laser Starter Kit"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/080/110/large/open-uri20220708-31495-1lt0yp0?version=1657297496"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">LYMA</span>
                                                <br>
                                                <a href="https://goop.com/lyma-lyma-laser-starter-kit/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">LYMA Laser
                                                    Starter Kit</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $2,700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card">
                                        <img alt="Caddis Hooper Glasses"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/684/large/open-uri20221019-14-ytvs5d?version=1666208981"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Caddis</span>
                                                <br>
                                                <a href="https://goop.com/caddis-hooper-glasses/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Hooper
                                                    Glasses</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $105.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--												vierde card-->
                                    <div class="card">
                                        <img alt="LUXTON Down Jumpsuit No. 2.1"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/723/large/open-uri20221019-10-8x2svw?version=1666209864"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">LUXTON</span><a
                                                    href="https://goop.com/luxton-down-jumpsuit-no-2-1/p/"
                                                    class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Down Jumpsuit
                                                    No. 2.1</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $1,295.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--							einde inhoud eerste carousel-->
                            </div>
                            <div class="carousel-item">
                                <!--							tweed carousel-->
                                <!--									eerste card-->
                                <div class="d-flex justify-content-evenly mb-4 pb-5">
                                    <div class="card">
                                        <img alt="Moonsisters Moon Calendar 2023"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/084/256/large/open-uri20221026-23-aqv0lx?version=1666759672"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Moonsisters</span>
                                                <br>
                                                <a href="https://goop.com/moonsisters-moon-calendar-2023/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Moon Calendar
                                                    2023</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $39.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card">
                                        <img alt="Loftie Loftie Lamp"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/019/large/open-uri20221006-12930-cc4i73?version=1665081436"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Loftie</span>
                                                <br>
                                                <a href="https://goop.com/loftie-lamp/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Loftie Lamp</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $275.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card">
                                        <img alt="Ven Store Essential Cashmere Travel Set"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/804/large/open-uri20221019-10-6mnahr?version=1666211420"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Ven Store</span>
                                                <br>
                                                <a href="https://goop.com/ven-store-essential-cashmere-travel-set/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Essential
                                                    Cashmere Travel Set</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--												vierde card-->
                                    <div class="card">
                                        <img alt="Toteme Signature Monogram Silk Scarf"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/083/795/large/open-uri20221019-32193-op0275?version=1666211239"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Toteme</span>
                                                <br>
                                                <a href="https://goop.com/toteme-signature-monogram-silk-scarf/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Signature
                                                    Monogram Silk Scarf</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $220.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--						einde tweede carousel-->
                            <div class="carousel-item">
                                <!--							derde carousel-->
                                <!--									eerste card-->
                                <div class="d-flex justify-content-evenly mb-4 pb-5">
                                    <div class="card">
                                        <img alt="POJ Studio DIY Incense Kit"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/073/082/large/open-uri20211022-14612-91h1t2?version=1634927516"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">POJ Studio</span>
                                                <br>
                                                <a href="https://goop.com/poj-studio-diy-incense-kit/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">DIY Incense
                                                    Kit</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $52.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--										tweede card-->
                                    <div class="card">
                                        <img alt="J. Hannah Nail Polish Set"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/084/248/large/open-uri20221026-14-10v4uvp?version=1666759175"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">J. Hannah</span>
                                                <br>
                                                <a href="https://goop.com/j-hannah-nail-polish-set/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">Nail Polish
                                                    Set</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $56.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--											derde card-->
                                    <div class="card">
                                        <img alt="Ga.Ma. Italy Professional IQ Perfetto Hair Dryer"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/071/938/large/open-uri20211008-14033-1d5bnp7?version=1633729599"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Ga.Ma. Italy Professional</span>
                                                <br>
                                                <a href="https://goop.com/ga-ma-italy-professional-iq-perfetto/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">IQ Perfetto
                                                    Hair Dryer</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $399.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--												vierde card-->
                                    <div class="card">
                                        <img alt="Dr. Dennis Gross DRx SpectraLite™ FaceWare Pro"
                                             src="https://shop.goop-img.com/spree/images/attachments/000/084/343/large/open-uri20221026-31981-179f60w?version=1666808127"
                                             srcset="" class="LazyImagestyles__LazyFadeImage-sc-1pcwm2t-1 jKWSwJ">
                                        <div class="card-body">
                                            <div class="ProductListCardstyles__RequiredDetails-g09iyn-6 dkGnft"><span
                                                    class="ProductListCardstyles__Brand-g09iyn-4 foMESO">Dr. Dennis Gross</span>
                                                <br>
                                                <a href="https://goop.com/dr-dennis-gross-drx-spectralite-faceware-pro/p/"
                                                   class="ProductListCardstyles__Title-g09iyn-11 fnXcnP">DRx
                                                    SpectraLite™ FaceWare Pro</a>
                                                <div class="ProductListCardstyles__PriceWrapper-g09iyn-5 etZzrn"><span
                                                        class="ProductListCardstyles__BasePrice-g09iyn-7 ProductListCardstyles__Price-g09iyn-8 fnHOyu gUHGHk">US $435.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--							einde inhoud eerste carousel-->
                            </div>
                        </div>
                        <!--				pijltjes naast carousel-->
                        <button class="carousel-control-prev pijl d-none d-lg-block" type="button"
                                data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next pijl d-none d-lg-block" type="button"
                                data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

        </section>
    </main>

@endsection
