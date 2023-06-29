
<!-- footer -->
<footer class="bg-dark">
    <div class="container-fluid pt-4 pb-5 footer">
        <div class="row mb-3">
            <div class="col-12">
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494 206">
                    <use href="#goopLogo"/>
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
                            <a class="footerLink" href="#">About goop</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Policies</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Careers</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">goop Press</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Stores</a>
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
                            <a class="footerLink" href="{{route('contact')}}">Contact Us</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">My Account</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Track My Order</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Shipping &amp; Returns</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Give and Get $50</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">FAQs</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">Subscription
                                Terms</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="#">DonorsChoose.org</a>
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
                            <a class="footerLink" href="h{{route('home')}}">Shop</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="{{route('productsPerCategory', 'beauty')}}">Beauty</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="{{route('productsPerCategory', 'food-home')}}">Food</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="{{route('productsPerCategory', 'fashion')}}}">Style</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="{{route('productsPerCategory', 'wellness')}}">Travel</a>
                        </li>
                        <li class="mb-2">
                            <a class="footerLink" href="{{route('productsPerCategory', 'wellness')}}">Wellness</a>
                        </li>
                    </ul>
                </div>
                <div class="pt-3 pt-lg-0">
                    <div class="text-uppercase text-white mb-4 ps-0 heading">Connect with goop</div>
                    <ul class="list-unstyled d-flex d-lg-block flex-row flex-lg-column justify-content-between max-width-600 flex-wrap">
                        <li class="mb-3">
                            <a class="footerLink" href="#"><i
                                    class="fa-solid fa-podcast fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Apple Podcast</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="#"><i
                                    class="fa-brands fa-facebook-f fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Facebook</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="#"><i
                                    class="fa-brands fa-twitter fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Twitter</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="#"><i
                                    class="fa-brands fa-instagram fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Instagram</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="#"><i
                                    class="fa-brands fa-youtube fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">YouTube</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink" href="#"><i
                                    class="fa-brands fa-pinterest fa-lg fa-fw me-1"></i><span
                                    class="d-none d-lg-inline">Pinterest</span></a>
                        </li>
                        <li class="mb-3">
                            <a class="footerLink"
                               href="#"><i
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
                                   type="email" value="" disabled>
                            <button class="text-uppercase text-white ps-2 pe-2 signUpButton" type="submit" value="">Sign
                                Up
                            </button>
                        </div>
                    </div>
                    <span class="mt-2 signUpDisclaimer">By clicking "submit," you agree to receive emails from goop and accept our <a
                            class="footerLinkNoEffect"
                            href="https://goop.com/web-terms-of-use/">web terms of use</a> and <a
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
@include('partials.login_modal')
@include('partials.register_modal')
@yield('scripts')
@livewireScripts
</body>
</html>
<!--js-->
