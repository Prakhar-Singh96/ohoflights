<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>OHOFLIGHTS</title>
        <link rel="icon" type="image/x-icon" href="" />

        <!-- All Plugins -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/animation.css" rel="stylesheet" />
        <link href="assets/css/dropzone.min.css" rel="stylesheet" />
        <link href="assets/css/flatpickr.min.css" rel="stylesheet" />
        <link href="assets/css/flickity.min.css" rel="stylesheet" />
        <link href="assets/css/lightbox.min.css" rel="stylesheet" />
        <link href="assets/css/magnifypopup.css" rel="stylesheet" />
        <link href="assets/css/select2.min.css" rel="stylesheet" />
        <link href="assets/css/rangeSlider.min.css" rel="stylesheet" />
        <link href="assets/css/prism.css" rel="stylesheet" />
		<link rel="icon" type="image/x-icon" href="images/favicon.png">
        <!-- Fontawesome & Bootstrap Icons CSS -->
        <link href="assets/css/bootstrap-icons.css" rel="stylesheet" />
        <link href="assets/css/fontawesome.css" rel="stylesheet" />

        <!-- Custom CSS -->
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="css/common.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <style>
            .error{
                color:red;
            }
            /** Logout Dropdown */
            .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
            display: block;
            }

            .dropdown:hover .dropbtn {
            background-color: #3e8e41;
            }
            /** Logout Dropdown  End */
        </style>
    </head>

    <body>
        <div id="main-wrapper">
            <!-- header -->
            <header class="header js-header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- logo -->
                        <div class="logo-web">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <div class="logo-box">
                                    <img src="images/logo.svg" />
                                </div>
                            </a>
                        </div>
                        <div class="right-head">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-lg-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}">Home</a>
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
                                @if($_SERVER['REQUEST_URI'] =='/register')
                                    <button class="btn green-btn" data-bs-toggle="modal" data-bs-target="#login"><img src="images/login.svg" class="" /> <span>Register</span></button>
                                @else
                                <?php
                                if(!Session::get('userid')){?>
                                    <button class="btn green-btn" data-bs-toggle="modal" data-bs-target="#login"><img src="images/login.svg" class="" /> <span>Login</span></button>
                                <?php } ?>
                                <?php
                                if(Session::get('userid')){?>
                                    <!-- <a href="logout"><button class="btn green-btn"><img src="images/login.svg" class="" /> <span>Logout</span></button></a> -->
                                    <div class="dropdown">
                                        <button class="dropbtn">Welcome</button>
                                        <div class="dropdown-content">
                                            <a href="profile">Profile</a>
                                            <a href="logout">Logout</a>
                                        </div>
                                    </div>
                                <?php } ?>
                                @endif
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

            <!-- banner -->
            <section class="banner" style="background-image: url(images/banner.png);">
                <div class="slider-info banner-bg">
                    <div class="BannerBox">
                        <div class="container">
                            <div class="banner-heading">
                                <h1>Book Your Journey: Hassle-Free Online Ticket Booking!</h1>
                            </div>
                            <div class="banner-form">
                                <div class="TopTabsBar">
                                    <ul class="nav nav-tabs simple-tabs medium border-0 justify-content-center">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#Flights" aria-selected="true" role="tab">
                                                <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M29.7048 1.01068C28.6224 0.462639 27.4416 0.138796 26.2362 0.0391517C24.8831 -0.0854034 23.5547 0.0889738 22.2755 0.537372C22.2509 0.537372 22.2263 0.562283 22.2017 0.562283L15.5105 4.2242L9.48339 2.48043C8.52399 2.20641 7.51538 2.28114 6.60517 2.67972L5.20295 3.27759C5.03075 3.35232 4.93235 3.50178 4.90775 3.70107C4.88315 3.87545 4.98155 4.04983 5.12915 4.14947L10 7.26335L5.86716 9.53025L1.24231 8.03559C1.04551 7.96086 0.848709 8.03559 0.701107 8.18506L0.110701 8.93239C-0.0369004 9.10676 -0.0369004 9.38079 0.110701 9.55516L4.16974 14.4128C5.03075 15.4591 6.53137 15.7331 7.71218 15.0605L14.3542 11.2989L13.813 17.4769C13.7884 17.6512 13.8868 17.8256 14.0344 17.9253C14.1082 17.9751 14.2066 18 14.305 18C14.3788 18 14.4526 17.9751 14.5264 17.9502L15.7811 17.2776C16.3469 16.9786 16.7651 16.4555 16.9373 15.8078L18.8807 8.40926L29.754 1.88257C29.9016 1.78292 30 1.60855 30 1.43417C30 1.25979 29.877 1.08541 29.7048 1.01068ZM6.45756 3.82563L6.99877 3.57652C7.68758 3.27759 8.47479 3.22776 9.21279 3.42705L14.2804 4.8968L10.984 6.71531L6.45756 3.82563ZM18.2165 7.68684C18.1181 7.76157 18.0197 7.86121 17.9951 7.98577L16.0025 15.5836C15.9041 15.9324 15.6581 16.2313 15.3383 16.4057L14.8708 16.6548L15.3875 10.427C15.4121 10.2527 15.3137 10.0534 15.1661 9.95374C15.0923 9.90392 14.9939 9.87901 14.8954 9.87901C14.8216 9.87901 14.7232 9.90392 14.6494 9.95374L7.19557 14.1886C6.43296 14.6121 5.44895 14.4377 4.88315 13.7651L1.14391 9.25623L1.26691 9.10677L5.76876 10.5516C5.89176 10.6014 6.03936 10.5765 6.16236 10.5267L22.6691 1.48399C23.8007 1.08541 24.9815 0.960859 26.187 1.0605C26.9496 1.13524 27.7122 1.30961 28.4502 1.55872L18.2165 7.68684Z"
                                                        fill="#0D0C22"
                                                    />
                                                </svg>

                                                <span>Flights</span>
                                            </a>
                                        </li>
                                        
                                       
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Hotels" aria-selected="false" tabindex="-1" role="tab">
                                                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.4223 17.5H1.11768V3.59039H10.701V16.247H14.1741V8.4776H15.4223V17.5ZM2.366 16.247H9.45271V4.84338H2.366V16.247Z" fill="#0D0C22" />
                                                    <path d="M11.2324 4.76812L5.91011 1.91813L0.587821 4.76812L0 3.66564L5.91011 0.5L11.8202 3.66564L11.2324 4.76812Z" fill="#0D0C22" />
                                                    <path d="M10.6859 5.66335L10.1202 6.7805L16.0133 9.78802L16.579 8.67087L10.6859 5.66335Z" fill="#0D0C22" />
                                                    <path d="M13.0833 9.48003H11.835V11.4851H13.0833V9.48003Z" fill="#0D0C22" />
                                                    <path d="M13.0833 12.4839H11.835V14.4889H13.0833V12.4839Z" fill="#0D0C22" />
                                                    <path d="M8.04397 9.48003H6.79569V11.4851H8.04397V9.48003Z" fill="#0D0C22" />
                                                    <path d="M8.04397 12.4839H6.79569V14.4889H8.04397V12.4839Z" fill="#0D0C22" />
                                                    <path d="M5.20942 9.48003H3.96114V11.4851H5.20942V9.48003Z" fill="#0D0C22" />
                                                    <path d="M8.04397 6.47624H6.79569V8.4813H8.04397V6.47624Z" fill="#0D0C22" />
                                                    <path d="M5.20942 6.47624H3.96114V8.4813H5.20942V6.47624Z" fill="#0D0C22" />
                                                    <path d="M5.20942 12.4839H3.96114V14.4889H5.20942V12.4839Z" fill="#0D0C22" />
                                                    <path d="M16.405 16.247H0.184807V17.5H16.405V16.247Z" fill="#0D0C22" />
                                                </svg>

                                                <span>Hotels</span>
                                            </a>
                                        </li>
										
										
										<li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Holidays" aria-selected="false" role="tab" tabindex="-1">
                                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.27489 13.0685L7.21072 13.0543C6.94254 12.994 6.60876 12.9191 6.31126 13.2166L6.20431 13.3233C6.16563 13.362 6.13626 13.409 6.11841 13.4607C6.10056 13.5124 6.0947 13.5675 6.10128 13.6219C6.10785 13.6762 6.12668 13.7283 6.15635 13.7743C6.18602 13.8203 6.22575 13.8589 6.27253 13.8872L7.82368 14.8268L7.24882 15.8012C7.21366 15.8609 7.19918 15.9305 7.2076 15.9992C7.21603 16.068 7.24691 16.132 7.29543 16.1813C7.34395 16.2307 7.40741 16.2627 7.47594 16.2722C7.54446 16.2818 7.61423 16.2684 7.67439 16.2342L8.6612 15.6731L9.57585 17.1895C9.604 17.2365 9.64253 17.2764 9.6885 17.3062C9.73446 17.336 9.78663 17.3548 9.841 17.3613C9.85579 17.3631 9.87067 17.364 9.88557 17.364C9.93277 17.3641 9.97951 17.3548 10.0231 17.3366C10.0667 17.3185 10.1063 17.292 10.1396 17.2585L10.2465 17.1518C10.544 16.8543 10.4691 16.5203 10.4089 16.2519L10.0295 14.5148L12.902 12.0264L16.0324 15.9169C16.0549 15.9449 16.0829 15.9681 16.1146 15.985C16.1463 16.002 16.1811 16.0124 16.2169 16.0156C16.2527 16.0188 16.2888 16.0147 16.323 16.0036C16.3572 15.9925 16.3888 15.9746 16.4159 15.9511C16.5281 15.8513 16.6348 15.7454 16.7355 15.6339C17.149 15.1758 16.934 14.7018 16.726 14.243C16.7 14.1857 16.6731 14.1264 16.6461 14.0646L14.8948 10.0626L16.8187 8.13867C17.058 7.90628 17.221 7.60659 17.2862 7.27934C17.3456 6.94265 17.2611 6.63084 17.0542 6.42403C16.6466 6.01638 15.8777 6.12221 15.3399 6.65979L13.453 8.54663L9.48245 6.79172C8.91547 6.54115 8.32916 6.28202 7.89373 6.71456L7.5875 7.01865C7.56079 7.04519 7.53998 7.07708 7.52644 7.11222C7.51289 7.14737 7.50691 7.18498 7.50889 7.22259C7.51087 7.26021 7.52076 7.29698 7.53791 7.33051C7.55507 7.36404 7.5791 7.39357 7.60844 7.41716L11.4889 10.5375L8.94934 13.4339L7.27489 13.0685ZM9.24711 13.9056L12.0748 10.6806C12.0986 10.6534 12.1167 10.6217 12.1279 10.5874C12.1391 10.5531 12.1433 10.5168 12.1402 10.4809C12.1371 10.4449 12.1267 10.4099 12.1097 10.378C12.0927 10.3462 12.0694 10.3181 12.0413 10.2955L8.17649 7.18746L8.27007 7.09443C8.42996 6.93565 8.6964 7.0294 9.26619 7.28126L13.4043 9.11016C13.4536 9.13197 13.5083 9.13834 13.5613 9.12844C13.6144 9.11853 13.6631 9.09282 13.7013 9.05468L15.7179 7.0385C16.0697 6.68664 16.5053 6.63182 16.676 6.80273C16.7877 6.91424 16.7762 7.09104 16.7594 7.1863C16.7124 7.40516 16.6013 7.60502 16.4402 7.76027L14.387 9.81339C14.349 9.85146 14.3233 9.90013 14.3133 9.95303C14.3034 10.0059 14.3096 10.0606 14.3312 10.1099L16.1559 14.2794C16.1838 14.3433 16.2117 14.4048 16.2387 14.4642C16.4604 14.9533 16.4992 15.0969 16.3383 15.2751C16.3135 15.3026 16.2889 15.3289 16.2653 15.3535L13.1445 11.4746C13.1219 11.4466 13.094 11.4235 13.0623 11.4065C13.0307 11.3896 12.9959 11.3792 12.9602 11.376C12.9244 11.3727 12.8883 11.3768 12.8542 11.3878C12.82 11.3988 12.7884 11.4166 12.7612 11.4402L9.55914 14.2143C9.52278 14.2458 9.49558 14.2865 9.4804 14.3322C9.46521 14.3779 9.46261 14.4268 9.47287 14.4738L9.87189 16.3021L9.88681 16.3694C9.93231 16.5721 9.94274 16.6537 9.91355 16.7138L8.9845 15.1734C8.94849 15.1136 8.89061 15.0704 8.82319 15.0527C8.75576 15.0351 8.68413 15.0445 8.62354 15.079L8.13085 15.3592L8.41882 14.8711C8.45463 14.8104 8.46507 14.738 8.44789 14.6697C8.43072 14.6014 8.3873 14.5426 8.32706 14.5061L6.7486 13.5499C6.80902 13.5204 6.89053 13.5309 7.09369 13.5766L8.98918 13.9907C9.03587 14.0008 9.08441 13.9983 9.12977 13.9833C9.17513 13.9683 9.21565 13.9414 9.24711 13.9054V13.9056Z"
                                                        fill="black"
                                                        stroke="black"
                                                        stroke-width="0.2"
                                                    />
                                                    <path
                                                        d="M19.3273 4.03708H16.7934V3.20014C16.7924 2.56623 16.5467 1.95722 16.1078 1.50026C15.6688 1.0433 15.0704 0.773702 14.4376 0.747758C14.2618 0.588401 14.0331 0.500102 13.7959 0.5H9.59411C9.35686 0.500176 9.12815 0.588607 8.9524 0.748115C8.32212 0.777624 7.72735 1.04872 7.29136 1.50523C6.85537 1.96173 6.6116 2.56863 6.61057 3.20014V4.03708H4.07668C3.63843 4.03707 3.20447 4.12346 2.79957 4.29131C2.39468 4.45916 2.02679 4.70518 1.7169 5.01533C1.40701 5.32548 1.16119 5.69369 0.993474 6.09892C0.825761 6.50416 0.739441 6.93849 0.739441 7.37711V16.6238C0.739441 17.3866 1.04221 18.1182 1.58115 18.6576C2.12009 19.197 2.85105 19.5 3.61322 19.5H4.98474C5.05565 19.5 5.12366 19.4718 5.1738 19.4216C5.22394 19.3714 5.25211 19.3034 5.25211 19.2324C5.25211 19.1614 5.22394 19.0934 5.1738 19.0432C5.12366 18.993 5.05565 18.9648 4.98474 18.9648H3.61322C2.99287 18.9648 2.39793 18.7181 1.95928 18.2791C1.52063 17.8401 1.2742 17.2446 1.2742 16.6238V7.37711C1.2742 6.63322 1.56945 5.91981 2.09501 5.3938C2.62057 4.8678 3.33338 4.57229 4.07663 4.57229H19.3272C19.6952 4.57228 20.0597 4.64483 20.3997 4.78578C20.7397 4.92673 21.0486 5.13333 21.3089 5.39378C21.5691 5.65424 21.7755 5.96344 21.9164 6.30374C22.0572 6.64404 22.1297 7.00877 22.1297 7.37711V16.6238C22.1297 17.2446 21.8833 17.8401 21.4446 18.2791C21.0059 18.7181 20.411 18.9648 19.7907 18.9648H7.21289C7.14197 18.9648 7.07396 18.993 7.02382 19.0432C6.97368 19.0934 6.94551 19.1614 6.94551 19.2324C6.94551 19.3034 6.97368 19.3714 7.02382 19.4216C7.07396 19.4718 7.14197 19.5 7.21289 19.5H19.7907C20.5528 19.5 21.2838 19.197 21.8227 18.6576C22.3617 18.1182 22.6644 17.3866 22.6644 16.6238V7.37711C22.6644 6.49128 22.3128 5.64173 21.687 5.01535C21.0612 4.38897 20.2123 4.03708 19.3273 4.03708ZM9.59411 1.03521H13.7957C13.8521 1.03463 13.908 1.04525 13.9603 1.06644C14.0125 1.08763 14.0601 1.11898 14.1001 1.15868C14.1402 1.19837 14.172 1.24562 14.1937 1.2977C14.2154 1.34977 14.2266 1.40564 14.2266 1.46206C14.2266 1.51849 14.2154 1.57436 14.1937 1.62643C14.172 1.6785 14.1402 1.72576 14.1001 1.76545C14.0601 1.80514 14.0125 1.83649 13.9603 1.85769C13.908 1.87888 13.8521 1.88949 13.7957 1.88892H9.59411C9.48175 1.88777 9.37439 1.84229 9.29534 1.76236C9.2163 1.68244 9.17196 1.57452 9.17196 1.46206C9.17196 1.34961 9.2163 1.24169 9.29534 1.16176C9.37439 1.08184 9.48175 1.03636 9.59411 1.03521ZM7.64123 3.14185V4.03708H7.1452V3.20014C7.14598 2.76429 7.29467 2.34163 7.5669 2.00143C7.83913 1.66124 8.21874 1.42368 8.64354 1.3277C8.62234 1.46768 8.63337 1.61065 8.6758 1.7457C8.37683 1.83704 8.11501 2.02194 7.92882 2.27324C7.74263 2.52454 7.64189 2.82899 7.6414 3.14185H7.64123ZM15.2275 4.03708H8.17616V3.14185C8.17657 2.91281 8.26177 2.69206 8.41531 2.52223C8.56885 2.3524 8.77982 2.24554 9.00748 2.22231C9.17515 2.35303 9.38158 2.42405 9.59411 2.42413H13.7957C14.0088 2.4241 14.2157 2.35281 14.3836 2.2216C14.6137 2.24176 14.8279 2.34737 14.9842 2.51766C15.1404 2.68795 15.2273 2.91058 15.2277 3.14176L15.2275 4.03708ZM16.2585 4.03708H15.7625V3.14185C15.762 2.82673 15.6597 2.52021 15.471 2.26797C15.2823 2.01573 15.0172 1.83126 14.7152 1.74205C14.7573 1.60703 14.7678 1.46417 14.746 1.32445C15.174 1.41776 15.5572 1.6546 15.8323 1.99572C16.1074 2.33684 16.2578 2.76178 16.2586 3.20014L16.2585 4.03708Z"
                                                        fill="black"
                                                        stroke="black"
                                                        stroke-width="0.2"
                                                    />
                                                </svg>

                                                <span> Packages</span>
                                            </a>
                                        </li>
										
										
										 <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Railways" aria-selected="false" role="tab" tabindex="-1">
                                                <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.5755 0.780563H2.479C1.10633 0.780563 0 1.90738 0 3.25957V12.9912C0 14.3639 1.12682 15.4702 2.479 15.4702H11.596C12.9687 15.4702 14.075 14.3434 14.075 12.9912V3.25957C14.075 1.90738 12.9482 0.780563 11.5755 0.780563ZM1.22926 3.25957C1.22926 2.58348 1.78242 2.00982 2.479 2.00982H11.596C12.2721 2.00982 12.8458 2.56299 12.8458 3.25957V7.70539C12.8458 8.75026 11.9853 9.61074 10.9404 9.61074H3.13461C2.08974 9.61074 1.22926 8.75026 1.22926 7.70539V3.25957ZM11.5755 14.2409H2.479C1.80291 14.2409 1.22926 13.6878 1.22926 12.9912V9.65171C1.72096 10.1229 2.39705 10.4302 3.13461 10.4302H10.9199C11.6575 10.4302 12.3336 10.1434 12.8253 9.65171V12.9912C12.8253 13.6878 12.2721 14.2409 11.5755 14.2409Z"
                                                        fill="#0D0C22"
                                                    />
                                                    <path
                                                        d="M3.29853 11.1473C2.60195 11.1473 2.04878 11.7005 2.04878 12.3971C2.04878 13.0936 2.60195 13.6468 3.29853 13.6468C3.99511 13.6468 4.54828 13.0936 4.54828 12.3971C4.54828 11.7005 3.97462 11.1473 3.29853 11.1473ZM3.29853 12.8068C3.07316 12.8068 2.88878 12.6224 2.88878 12.3971C2.88878 12.1717 3.07316 11.9873 3.29853 11.9873C3.52389 11.9873 3.70828 12.1717 3.70828 12.3971C3.70828 12.6224 3.52389 12.8068 3.29853 12.8068Z"
                                                        fill="#0D0C22"
                                                    />
                                                    <path
                                                        d="M10.756 11.1473C10.0594 11.1473 9.50626 11.7005 9.50626 12.3971C9.50626 13.0936 10.0594 13.6468 10.756 13.6468C11.4526 13.6468 12.0057 13.0936 12.0057 12.3971C12.0057 11.7005 11.4526 11.1473 10.756 11.1473ZM10.756 12.8068C10.5306 12.8068 10.3462 12.6224 10.3462 12.3971C10.3462 12.1717 10.5306 11.9873 10.756 11.9873C10.9814 11.9873 11.1658 12.1717 11.1658 12.3971C11.1658 12.6224 10.9814 12.8068 10.756 12.8068Z"
                                                        fill="#0D0C22"
                                                    />
                                                    <path
                                                        d="M2.86829 15.88L0.573671 18.1541C0.327819 18.3999 0.327819 18.7892 0.573671 19.0351C0.696597 19.158 0.860498 19.2194 1.00391 19.2194C1.16781 19.2194 1.33171 19.158 1.43415 19.0351L3.72877 16.7609C3.97462 16.5151 3.97462 16.1258 3.72877 15.88C3.5034 15.6341 3.09365 15.6341 2.86829 15.88Z"
                                                        fill="#0D0C22"
                                                    />
                                                    <path
                                                        d="M11.1863 15.88C10.9404 15.6341 10.5512 15.6341 10.3053 15.88C10.0594 16.1258 10.0594 16.5151 10.3053 16.7609L12.5794 19.0351C12.7024 19.158 12.8663 19.2194 13.0097 19.2194C13.1736 19.2194 13.3375 19.158 13.4399 19.0351C13.6858 18.7892 13.6858 18.3999 13.4399 18.1541L11.1863 15.88Z"
                                                        fill="#0D0C22"
                                                    />
                                                </svg>

                                                <span>Railways</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="TripType">
                                        <div class="filter-list">
                                            <div class="form-group">
                                                <input type="radio" id="Iphone" name="Round-Trip" />
                                                <label for="Iphone">Round Trip</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" id="Samsung" name="Round-Trip" />
                                                <label for="Samsung">One Way</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="Flights" class="tab-pane fade in active show">
                                        <form>
                                            <div class="BookingBox">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="BookingLocation">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Delhi" placeholder="Delhi" />
                                                                        <span>DEL International Airport...</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Bangalore" placeholder="Mumbai" />
                                                                        <span>BLR International Airport...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-7">
                                                                <div class="BokkingDate BookingFrom p-0">
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Journey Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Wednesday</span>
                                                                    </div>
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Return Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Friday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-5">
                                                                <div class="BookingFrom">
                                                                    <label>Travellers</label>
                                                                    <select class="form-control">
                                                                        <option>Adults 1+2+3+4</option>
                                                                        <option>Children 1+2+3</option>
                                                                        <option>Infants 1+2+3</option>
                                                                    </select>
                                                                    <span>Economy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="view-all">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href=""><img src="images/search.png" /> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="Holidays" class="tab-pane fade">
                                        <form>
                                            <div class="BookingBox">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="BookingLocation">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Dhaka" placeholder="Dhaka" />
                                                                        <span>DAC International Airport...</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Bangkok" placeholder="Bangkok" />
                                                                        <span>DAC International Airport...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-7">
                                                                <div class="BokkingDate BookingFrom p-0">
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Journey Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Wednesday</span>
                                                                    </div>
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Return Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Friday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-5">
                                                                <div class="BookingFrom">
                                                                    <label>Traveler</label>
                                                                    <select class="form-control">
                                                                        <option>1 Adult</option>
                                                                        <option>2 Adult</option>
                                                                        <option>3 Adult</option>
                                                                        <option>4 Adult</option>
                                                                        <option>5 Adult</option>
                                                                    </select>
                                                                    <span>Economy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="view-all">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href=""><img src="images/search.png" /> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="Railways" class="tab-pane fade">
                                        <form>
                                            <div class="BookingBox">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="BookingLocation">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Dhaka" placeholder="Dhaka" />
                                                                        <span>DAC International Airport...</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Bangkok" placeholder="Bangkok" />
                                                                        <span>DAC International Airport...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-7">
                                                                <div class="BokkingDate BookingFrom p-0">
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Journey Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Wednesday</span>
                                                                    </div>
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Return Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Friday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-5">
                                                                <div class="BookingFrom">
                                                                    <label>Traveler</label>
                                                                    <select class="form-control">
                                                                        <option>1 Adult</option>
                                                                        <option>2 Adult</option>
                                                                        <option>3 Adult</option>
                                                                        <option>4 Adult</option>
                                                                        <option>5 Adult</option>
                                                                    </select>
                                                                    <span>Economy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="view-all">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href=""><img src="images/search.png" /> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="Hotels" class="tab-pane fade">
                                        <form>
                                            <div class="BookingBox">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="BookingLocation">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Dhaka" placeholder="Dhaka" />
                                                                        <span>DAC International Airport...</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="BookingFrom">
                                                                        <label>From</label>
                                                                        <input type="" name="" class="form-control" value="Bangkok" placeholder="Bangkok" />
                                                                        <span>DAC International Airport...</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-7">
                                                                <div class="BokkingDate BookingFrom p-0">
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Journey Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Wednesday</span>
                                                                    </div>
                                                                    <div class="BookingFrom m-0">
                                                                        <label>Return Date</label>
                                                                        <input type="date" name="" class="form-control" />
                                                                        <span>Friday</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-5">
                                                                <div class="BookingFrom">
                                                                    <label>Traveler</label>
                                                                    <select class="form-control">
                                                                        <option>1 Adult</option>
                                                                        <option>2 Adult</option>
                                                                        <option>3 Adult</option>
                                                                        <option>4 Adult</option>
                                                                        <option>5 Adult</option>
                                                                    </select>
                                                                    <span>Economy</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="view-all">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a href=""><img src="images/search.png" /> Search</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space panel-sec">
                <div class="container">
                    <div class="panel-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="pnel-box">
                                    <figure>
                                        <img src="images/icon/1.svg" class="" alt="" />
                                    </figure>
                                    <figcaption>
                                        <h4>Competitive Flight Fares</h4>
                                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem asantium doloremque...</p> -->
                                    </figcaption>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="pnel-box">
                                    <figure>
                                        <img src="images/icon/2.svg" class="" alt="" />
                                    </figure>
                                    <figcaption>
                                        <h4>Exclusive Discounts</h4>
                                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem asantium doloremque...</p> -->
                                    </figcaption>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="pnel-box">
                                    <figure>
                                        <img src="images/icon/3.svg" class="" alt="" />
                                    </figure>
                                    <figcaption>
                                        <h4>On-Call Assistance</h4>
                                        <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem asantium doloremque...</p> -->
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space cards-sec" id="railways">
                <div class="container">
                    <div class="heading-pnel">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <h2>Domestic Exclusive Deals</h2>
                            </div>
                            <div class="col-lg-6 col-12"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="cards-main">
                                <div class="owl-carousel" id="instructor-slider">
                                    <div class="item">
                                        <div class="card-box">
                                            <figure>
                                                <img src="images/cities/goa.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Goa</span>
                                                <h3>Goa <img src="images/tab.svg" alt="" /></h3>
                                                <p>Beaches & Old Goa colonial architecture</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="card-box">
                                            <figure>
                                                <img src="images/cities/jaipur.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Rajasthan</span>
                                                <h3>Jaipur <img src="images/tab.svg" alt="" /></h3>
                                                <p>"Pink City" & 18th-century observatory</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="card-box">
                                            <figure>
                                                <img src="images/cities/mumbai.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Maharashtra</span>
                                                <h3>Mumbai <img src="images/tab.svg" alt="" /></h3>
                                                <p>Bollywood, shopping & colonial landmarks</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="card-box">
                                            <figure>
                                                <img src="images/cities/udaipur.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Rajasthan</span>
                                                <h3>Udaipur <img src="images/tab.svg" alt="" /></h3>
                                                <p>Lake Pichola & ornate royal palaces</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="card-box">
                                            <figure>
                                                <img src="images/cities/delhi.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Delhi</span>
                                                <h3>New Delhi <img src="images/tab.svg" alt="" /></h3>
                                                <p>Fog, temple, hindi cinema and romance</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="view-all"> -->
                        <!-- <div class="row"> -->
                            <!-- <div class="col-12"> -->
                                <!-- <a href="">View All</a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </section>
            <section class="space cards-sec bg-white" id="packages">
                <div class="container">
                    <div class="heading-pnel">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <h2>Top International Destinations</h2>
                            </div>
                            <div class="col-lg-6 col-12"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="cards-main">
                                <div class="owl-carousel" id="Top-Destinations">
                                    <div class="item">
                                        <div class="card-box Top-Destinations-card">
                                            <figure>
                                                <img src="images/international/kathmandu.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Nepal</span>
                                                <h3>Kathmandu <img src="images/tab.svg" alt="" /></h3>
                                                <p>Kathmandu, Nepal's capital, is set in a valley surrounded by the Himalayan mountains</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                        <div class="card-box Top-Destinations-card">
                                            <figure>
                                                <img src="images/international/singapore.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Republic of Singapore</span>
                                                <h3>Singapore <img src="images/tab.svg" alt="" /></h3>
                                                <p>Singapore, officially the Republic of Singapore, is an island country and city-state in maritime Southeast Asia.</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card-box Top-Destinations-card">
                                            <figure>
                                                <img src="images/international/sharjhah.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">United Arab Emirates</span>
                                                <h3>Sharjah <img src="images/tab.svg" alt="" /></h3>
                                                <p>Sharjah is the third-most populous city in the United Arab Emirates</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                        <div class="card-box Top-Destinations-card">
                                            <figure>
                                                <img src="images/international/kualapur.jpg" class="" alt="" />
                                            </figure>
                                            <figcaption>
                                                <span class="category-name">Federal Territory</span>
                                                <h3>Kuala Lumpur <img src="images/tab.svg" alt="" /></h3>
                                                <p>Kuala Lumpur is the capital of Malaysia. Its modern skyline is dominated...</p>
                                                <a href="https://ohoflights.com/contact.html" class="border-btn" alt="">Book Now</a>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="view-all"> -->
                        <!-- <div class="row"> -->
                            <!-- <div class="col-12"> -->
                                <!-- <a href="">View All</a> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </section>
            <section class="about-sec" style="background-image: url(images/about-bg.png);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="about-img">
                                <figure>
                                    <img src="images/bout.png" class="" alt="" />
                                </figure>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="about-content">
                                <span>About Us</span>
                                <h3>Book Your Journey: Hassle-Free Online Ticket Booking!</h3>
                                <p>
                                    At Oho Flights, we are committed to transforming your travel experience. With a focus on convenience, affordability, and reliability, we strive to connect you to your destinations seamlessly. Whether you're planning a quick getaway or a business trip, we're here to make your journey as smooth as possible. Our team is dedicated to providing exceptional service and ensuring that every aspect of your flight experience exceeds expectations. 
                                </p>
                                <a href="https://ohoflights.com/about-us.html" class="pink-btn green-btn">Read more about ohoflights <img src="images/white-arrow.svg" class="" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space cards-sec bg-white">
                <div class="container">
                    <div class="heading-pnel">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <h2>Testimonials</h2>
                            </div>
                            <div class="col-lg-6 col-12"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="cards-main">
                                <div class="owl-carousel" id="Testimonials">
                                    <div class="Testimonials-Items">
                                        <div class="Testimonials-Content">
                                            <div class="star">
                                                <img src="images/star.png" />
                                            </div>
                                            <p>“I was super excited for this flying experience because this was my first time I was boarding on any Flight. And thank you to Indigo for making this first journey Beautiful.”</p>
                                        </div>
                                        <div class="Testimonials-details">
                                            <div class="TestimonialsUser">
                                                <img src="images/user1.png" />
                                            </div>
                                            <div class="TestimonialsName">
                                                <h6>John Ester</h6>
                                            </div>
                                            <div class="TestimonialsEllips">
                                                <img src="images/tag.png" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="Testimonials-Items">
                                        <div class="Testimonials-Content">
                                            <div class="star">
                                                <img src="images/star.png" />
                                            </div>
                                            <p>“Very nice and clean aircraft. All the crews are very experienced and well mannered. I have traveled from kolkata to Goa and vise versa. Both flight was comfortable.”</p>
                                        </div>
                                        <div class="Testimonials-details">
                                            <div class="TestimonialsUser">
                                                <img src="images/user1.png" />
                                            </div>
                                            <div class="TestimonialsName">
                                                <h6>Lisa Merry</h6>
                                            </div>
                                            <div class="TestimonialsEllips">
                                                <img src="images/tag.png" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="Testimonials-Items">
                                        <div class="Testimonials-Content">
                                            <div class="star">
                                                <img src="images/star.png" />
                                            </div>
                                            <p>“Flights were all on time, great staff, perfect flights. I didnt have an Indian sim card, but my South African sim, so couldnt access wi-fi at the airports.”</p>
                                        </div>
                                        <div class="Testimonials-details">
                                            <div class="TestimonialsUser">
                                                <img src="images/user1.png" />
                                            </div>
                                            <div class="TestimonialsName">
                                                <h6>Kia Maria</h6>
                                            </div>
                                            <div class="TestimonialsEllips">
                                                <img src="images/tag.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-all mt-3">
                        <div class="row">
                            <div class="col-12"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space pt-0">
                <div class="container">
                    <div class="SubscribeBox">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-6">
                                <div class="Subscribeimage">
                                    <img src="images/newslatter.png" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="SubscribeContent">
                                    <h3>Subscribe To The Newsletter</h3>
                                    <p>
                                        Subscribe to our newsletter for exclusive travel deals and updates on Oho Flights' latest offerings. Stay connected and be the first to know about exciting promotions and destinations!
                                    </p>

                                    <div class="SubscribeForm">
                                        <input type="text" name="" placeholder="Enter your email ID" />
                                        <button class="green-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="space cards-sec">
                <div class="container">
                    <div class="heading-pnel">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Popular Searches</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="Popular-Searches">
                                    <ul>
                                        <li><a href="#" class="border-btn" alt="">Miami</a></li>
                                        <li><a href="#" class="border-btn" alt="">Eugene</a></li>
                                        <li><a href="#" class="border-btn" alt="">Denver</a></li>
                                        <li><a href="#" class="border-btn" alt="">Baton Rouge</a></li>
                                        <li><a href="#" class="border-btn" alt="">Columbus</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santiago</a></li>
                                        <li><a href="#" class="border-btn" alt="">Bismarck</a></li>
                                        <li><a href="#" class="border-btn" alt="">Greenland</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santa Ana</a></li>
                                        <li><a href="#" class="border-btn" alt="">Baton Rouge</a></li>
                                        <li><a href="#" class="border-btn" alt="">Columbus</a></li>
                                        <li><a href="#" class="border-btn" alt="">Columbus</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santiago</a></li>
                                        <li><a href="#" class="border-btn" alt="">Bismarck</a></li>
                                        <li><a href="#" class="border-btn" alt="">Greenland</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santa Ana</a></li>
                                        <li><a href="#" class="border-btn" alt="">Miami</a></li>
                                        <li><a href="#" class="border-btn" alt="">Eugene</a></li>
                                        <li><a href="#" class="border-btn" alt="">Denver</a></li>
                                        <li><a href="#" class="border-btn" alt="">Baton Rouge</a></li>
                                        <li><a href="#" class="border-btn" alt="">Greenland</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santa Ana</a></li>
                                        <li><a href="#" class="border-btn" alt="">Columbus</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santiago</a></li>
                                        <li><a href="#" class="border-btn" alt="">Bismarck</a></li>
                                        <li><a href="#" class="border-btn" alt="">Greenland</a></li>
                                        <li><a href="#" class="border-btn" alt="">Santa Ana</a></li>
                                        <li><a href="#" class="border-btn" alt="">Baton Rouge</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Log In Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
                @yield('content')
            </div>
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
                                            <li><a href="https://ohoflights.com/hotel-listing.html">Hotel Booking</a></li>
                                            <li><a href="https://ohoflights.com/listing.html">Packages Booking</a></li>
                                            <li><a href="https://ohoflights.com/listing.html">Railways Booking</a></li>
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
