<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')

    <body>
        <div id="main-wrapper">
            <!-- header -->
            @include('layouts.header')
            <!-- <nav class="sidebar" id="accordion-menu">
                <div class="authfy-body">
                    <div class="nav-header">
                        <div class="logo-wrap">
                            <div class="logo-web">
                                <div class="user-info">
                                    <p><i class="fa fa-user-circle" aria-hidden="true"></i> User Name</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com/about-us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com/flight-listing.html">Flights</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com/hotel-listing.html">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com/listing.html">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com/listing.html">Railways</a>
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link" href="https://ohoflights.com/contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav> -->

            <!-- banner -->
            @include('layouts.banner')

            <!-- Log In Modal -->
            <!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
                @yield('content')
            </div> -->
            <!-- End Modal -->

            <!-- Choose Countries Modal -->
            <div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
                            <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
                        </div>
                        <div class="modal-body">
                            <div class="allCountrieslist">
                                <div class="suggestedCurrencylist-wrap mb-4">
                                    <div class="d-inline-block mb-0 ps-3">
                                        <h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
                                    </div>
                                    <div class="suggestedCurrencylists">
                                        <ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry active" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Euro</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Thai Baht</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="suggestedCurrencylist-wrap">
                                    <div class="d-inline-block mb-0 ps-3">
                                        <h5 class="fs-6 fw-bold">All Countries</h5>
                                    </div>
                                    <div class="suggestedCurrencylists">
                                        <ul class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Property currency</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
                                                </a>
                                            </li>
                                            <li class="col">
                                                <a class="selectCountry" href="#">
                                                    <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35" alt="" /></div>

                                                    <div class="text-dark text-md fw-medium ps-2">Singapore Dollar</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa-solid fa-sort-up"></i></a>

            <!-- footer -->
            @include('layouts.footer')
            <div class="overlay-body"></div>
        </div>
         <!-- <script src="assets/js/jquery.min.js"></script> -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/dropzone.min.js"></script>
        <script src="assets/js/flatpickr.js"></script>
        <script src="assets/js/flickity.pkgd.min.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/rangeslider.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/prism.js"></script>
        <script src="assets/js/addadult.js"></script>
        <!-- <script src="assets/js/custom.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/main.js"></script>  -->
    </body>
</html>
