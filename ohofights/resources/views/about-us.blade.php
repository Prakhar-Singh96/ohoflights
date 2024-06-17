<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>OHOFLIGHTS</title>
  <link rel="icon" type="image/x-icon" href="">

  <!-- All Plugins -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/animation.css" rel="stylesheet">
  <link href="assets/css/dropzone.min.css" rel="stylesheet">
  <link href="assets/css/flatpickr.min.css" rel="stylesheet">
  <link href="assets/css/flickity.min.css" rel="stylesheet">
  <link href="assets/css/lightbox.min.css" rel="stylesheet">
  <link href="assets/css/magnifypopup.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">
  <link href="assets/css/rangeSlider.min.css" rel="stylesheet">
  <link href="assets/css/prism.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <!-- Fontawesome & Bootstrap Icons CSS -->
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/fontawesome.css" rel="stylesheet">

  <!-- Custom CSS -->
   <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/common.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body>
  
  <div id="main-wrapper">

 <!-- header -->
            <header class="header js-header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- logo -->
                        <div class="logo-web">
                            <a class="navbar-brand" href="https://ohoflights.com/">
                                <div class="logo-box">
                                    <img src="images/logo.svg" />
                                </div>
                            </a>
                        </div>
                        <div class="right-head">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-lg-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about-us">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="https://ohoflights.com/flight-listing.html">Flights</a></li>
                                                <li><a href="https://ohoflights.com/hotel-listing.html">Hotels</a></li>
                                                <li><a href="#packages">Packages</a></li>
												<li><a href="#railways">Railways</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://ohoflights.com/contact.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-head EndSide">
                            <!-- <div class="nav-wrapper"> -->
                                <!-- <div class="sl-nav"> -->
                                    <!-- <ul> -->
                                        <!-- <li class="sl-nav-main-li"> -->
                                            <!-- <div class="sl-flag-box"> -->
                                                <!-- <i class="sl-flag flag-usa"><div id="germany"></div></i> -->
                                            <!-- </div> -->
                                            <!-- <b>ENG</b> <i class="fa fa-angle-down" aria-hidden="true"></i> -->
                                            <!-- <div class="triangle"></div> -->
                                            <!-- <ul> -->
                                                <!-- <li> -->
                                                    <!-- <i class="sl-flag flag-de"><div id="germany"></div></i> <span>Deutsch</span> -->
                                                <!-- </li> -->
                                                <!-- <li> -->
                                                    <!-- <i class="sl-flag flag-usa"><div id="germany"></div></i> <span>Englisch</span> -->
                                                <!-- </li> -->
                                            <!-- </ul> -->
                                        <!-- </li> -->
                                    <!-- </ul> -->
                                <!-- </div> -->
                            <!-- </div> -->
                            <div class="schedule-call">
                            <?php if(!Session::get('userid')){?>
                                <button class="btn green-btn" data-bs-toggle="modal" data-bs-target="#login"><img src="images/login.svg" class="" /> <span>Login</span></button>
                            <?php
                            }?>
                            <?php
                                if(Session::get('userid')){?>
                                    <a href="logout"><button class="btn green-btn"><img src="images/login.svg" class="" /> <span>Logout</span></button></a>
                                <?php } ?>
                            </div>

                            <div class="mobile-icon">
                                <button class="navbar-toggler nav-btn nav-slider" type="button">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <nav class="sidebar" id="accordion-menu">
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
            </nav>

		<!-- ============================ Booking Title ================================== -->
		<section class="bg-cover position-relative" style="background:url(assets/img/bg.jpg)no-repeat;" data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">About & Our Mission</h1>
								<p class="text-light">Oho Flights Booking, was established in 2023 in Delhi. At Oho Flights Booking, we
                                        believe that travel should be an exhilarating adventure, not a hassle. Our mission is to
                                        empower travelers with easy access to affordable flights, exceptional customer service,
                                        and innovative booking solutions. Whether you're jetting off for a weekend getaway or
                                        embarking on a journey of a lifetime, we're here to make your travel dreams a reality.
                                        Building Brighter Futures.</p>
                                        <p class="text-light">
                                        Oho Flights Booking is founded by a team of passionate travel enthusiasts who were
                                        frustrated by the complexities and uncertainties of flight booking. Determined to
                                        revolutionize the industry, we set out to create a platform that simplifies the booking
                                        process, offers transparent pricing, and provides unparalleled support every step of the
                                        way.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="fpc-banner"></div>
		</section>
		<!-- ============================ Booking Title ================================== -->


		<!-- ============================ About Us Section ================================== -->
		<section>
			<div class="container">

				<div class="row align-items-center justify-content-between g-4">

					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="">
							<h2 class="lh-base fs-1 fw-bold">Who We're & Mission?</h2>
							<p><b>User-Friendly Platform:</b> Our intuitive booking platform is designed to make finding
                                    and booking flights a breeze. With advanced search filters and real-time updates, you
                                    can find the perfect flight to suit your needs in just a few clicks.
                                    </p>
							<p><b>Best Price Guarantee:</b> We are committed to offering the most competitive prices on
                                    flights, ensuring that you get the best value for your money.
                                    </p>
                                    	<p><b>24/7 Customer Support:</b> : Our dedicated team of travel experts is available round-theclock to answer your questions, resolve issues, and provide personalized assistance
                                            whenever you need it.

                                    </p>
                                    	<p><b>Secure and Reliable:</b> With state-of-the-art security measures and secure payment
                                            options, you can book your flights with confidence, knowing that your information is
                                            safe and protected.
                                    </p>
                                    <p><b>Flexibility and Convenience:</b> Whether you're planning a last-minute getaway or a longterm itinerary, our flexible booking options and comprehensive travel services make it
                                            easy to customize your trip to suit your preferences.
                                    </p>
                                    
                                    <p><b>Our Promise to You</b></p>
                                    <p>At Oho Flights Booking, we are committed to delivering exceptional service and
                                    unforgettable travel experiences. From the moment you start planning your trip to the
                                    day you return home, we'll be with you every step of the way, ensuring that your journey
                                    is smooth, stress-free, and filled with unforgettable moments.</p>
                                      <p><b>Let's Explore the World Together</b></p>
                                    <p>Ready to embark on your next adventure? Start planning your trip with Oho Flights
                                        Booking today and discover the world's most exciting destinations at your fingertips.
                                        Whether you're flying solo, traveling with family, or exploring new horizons with
                                        friends, we're here to make your travel dreams come true.</p>
                                        <p><b>Call Us Anytime </b> +91 8745907517 +91 9628867517 </p>
						</div>
					</div>

					<div class="col-xl-5 col-lg-6 col-md-6">
						<div class="position-relative">
							<img src="assets/img/side-3.png" class="img-fluid" alt="">
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- ============================ About Us Section End ================================== -->

		<!-- ============================ Video Helps End ================================== -->
		<section class="bg-cover" style="background:url(assets/img/bg-title.jpg)no-repeat;" data-overlay="5">
			<div class="ht-150"></div>
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">

						<div class="video-play-wrap text-center">
							<div class="video-play-btn d-flex align-items-center justify-content-center">
								<a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-bs-toggle="modal" data-bs-target="#popup-video" class="square--90 circle bg-white fs-2 text-primary"><i class="fa-solid fa-play"></i></a>

							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="ht-150"></div>
		</section>
		<!-- ============================ Video Helps End ================================== -->


		<!-- ============================ Our facts End ================================== -->
		<section class="py-4 gray">
			<div class="container">
				<div class="row align-items-center justify-content-between g-4">

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="urfacts-wrap d-flex align-items-center justify-content-center">
							<div class="urfacts-first flex-shrink-0">
								<h3 class="fs-1 fw-medium text-primary mb-0">32K</h3>
							</div>
							<div class="urfacts-caps ps-3">
								<p class="text-muted-2 lh-base mb-0">Overall<br>Booking</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="urfacts-wrap d-flex align-items-center justify-content-center">
							<div class="urfacts-first flex-shrink-0">
								<h3 class="fs-1 fw-medium text-primary mb-0">25+</h3>
							</div>
							<div class="urfacts-caps ps-3">
								<p class="text-muted-2 lh-base mb-0">Years<br>Successfully</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="urfacts-wrap d-flex align-items-center justify-content-center">
							<div class="urfacts-first flex-shrink-0">
								<h3 class="fs-1 fw-medium text-primary mb-0">45K</h3>
							</div>
							<div class="urfacts-caps ps-3">
								<p class="text-muted-2 lh-base mb-0">Happly<br>Users</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="urfacts-wrap d-flex align-items-center justify-content-center">
							<div class="urfacts-first flex-shrink-0">
								<h3 class="fs-1 fw-medium text-primary mb-0">22</h3>
							</div>
							<div class="urfacts-caps ps-3">
								<p class="text-muted-2 lh-base mb-0">Countries<br>We Work</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Our facts End ================================== -->


		<!-- ================================ Article Section Start ======================================= -->
		<section>
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Trending & Popular Articles</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>


				<div class="row justify-content-center g-4">

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="#" class="d-block"><img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Destination</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="#" class="d-block"><img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Journey</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="#" class="d-block"><img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Business</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ================================ Article Section Start ======================================= -->

              <!-- Log In Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                    <div class="modal-content" id="loginmodal">
                        <div class="modal-header">
                            <h4 class="modal-title fs-6">Sign In / Register</h4>
                            <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
                        </div>
                        <div class="modal-body">
                            <div class="modal-login-form py-4 px-md-3 px-0">
                                <form>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" placeholder="name@example.com" />
                                        <label>User Name</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" placeholder="Password" />
                                        <label>Password</label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                                    </div>

                                    <div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
                                        <div class="modal-flex-first">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="savepassword" value="option1" />
                                                <label class="form-check-label" for="savepassword">Save Password</label>
                                            </div>
                                        </div>
                                        <div class="modal-flex-last">
                                            <a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget Password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="prixer px-3">
                                <div class="devider-wraps position-relative">
                                    <div class="devider-text text-muted-2 text-md">Sign In with More Methods</div>
                                </div>
                            </div>

                            <div class="social-login py-4 px-2">
                                <ul class="row align-items-center justify-content-between g-3 p-0 m-0">
                                    <li class="col">
                                        <a href="https://www.facebook.com/" target="_blank" class="square--60 border br-dashed rounded-2 full-width"><i class="fa-brands fa-facebook color--facebook fs-2"></i></a>
                                    </li>
                                    <li class="col">
                                        <a href="https://www.instagram.com/" target="_blank" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-instagram color--instagram fs-2"></i></a>
                                    </li>
                                    <li class="col">
                                        <a href="https://in.linkedin.com/" target="_blank" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-linkedin color--linkedin fs-2"></i></a>
                                    </li>
									 <li class="col">
                                        <a href="https://www.google.com/" target="_blank" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-google color--googleplus fs-2"></i></a>
                                    </li>
                                    <li class="col">
                                        <a href="https://twitter.com/?lang=en" target="_blank" class="square--60 border br-dashed rounded-2"><i class="fa-brands fa-twitter color--twitter fs-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer align-items-center justify-content-center">
                            <p>Don't have an account yet?<a href="signup.html" class="text-primary fw-medium ms-1">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
 

    <!-- Choose Countries Modal -->
    <div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
            <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
                class="fa-solid fa-square-xmark"></i></a>
          </div>
          <div class="modal-body">
            <div class="allCountrieslist">

              <div class="suggestedCurrencylist-wrap mb-4">
                <div class="d-inline-block mb-0 ps-3">
                  <h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
                </div>
                <div class="suggestedCurrencylists">
                  <ul
                    class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/united-states.png"
                            class="img-fluid circle" width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png"
                            class="img-fluid circle" width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry active" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Euro</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle"
                            width="35" alt=""></div>
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
                  <ul
                    class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/united-states.png"
                            class="img-fluid circle" width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Property currency</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle"
                            width="35" alt=""></div>
                        <div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
                      </a>
                    </li>
                    <li class="col">
                      <a class="selectCountry" href="#">
                        <div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle"
                            width="35" alt=""></div>
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
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mb-3">
                            <div class="footer-item">
                                <div class="foot-logo">
                                    <img src="images/footer-logo.png" class="" alt="logo" />
                                </div>
                                <p>
                                    Mohan Garden Part-1, Delhi - 110059
                                </p>
                                <ul>
                                    <li><a href="tel:+91 9628867517">+91 9628867517</a></li>
                                    <li><a href="mailto:infro17@gmail.com">infro17@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="footer-title">
                                        <h4>Our Services</h4>
                                    </div>
                                    <div class="footer-item">
                                        <ul>
                                            <li><a href="https://ohoflights.com/listing.html">Flight Booking</a></li>
                                            <li><a href="https://ohoflights.com/listing.html">Train Booking</a></li>
                                            <li><a href="https://ohoflights.com/listing.html">Cab Booking</a></li>
                                            <li><a href="https://ohoflights.com/listing.html">Hotel Booking</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="footer-title">
                                        <h4>links</h4>
                                    </div>
                                    <div class="footer-item">
                                        <ul>
                                            <li><a href="https://ohoflights.com/">Home</a></li>
                                            <li><a href="https://ohoflights.com/about-us.html">About Us</a></li>
                                            <!-- <li><a href="https://ohoflights.com/listing.html">Services</a></li> -->
                                            <!-- <li><a href="https://ohoflights.com/">Blogs</a></li> -->
                                            <li><a href="https://ohoflights.com/contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="footer-title">
                                        <h4>Newsletter</h4>
                                    </div>
                                    <div class="footer-item Social-Media">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i> <span>Facebook</span></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa-brands fa-twitter"></i> <span>Twitter</span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i> <span>Instagram</span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i> <span>You Tube</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="copy-cont text-left">
                                    <p>Copyright © 2024 ohoflights, All rights reserved. | <a href="https://ohoflights.com/privacy-policy.html">Privacy Policy</a> | <a href="https://ohoflights.com/privacy-policy.html">Terms & Conditions</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <div class="overlay-body"></div>
  </div>
  <!-- Video Modal -->
		<div class="modal fade" id="popup-video" tabindex="-1" role="dialog" aria-labelledby="popupvideo" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content" id="popupvideo">
					<iframe class="embed-responsive-item full-width" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- End Video Modal -->
  <script src="assets/js/jquery.min.js"></script>
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
  <script src="assets/js/custom.js"></script> 
   <script src="js/owl.carousel.js"></script>
  <script src="js/main.js"></script>
</body>
 
</html>