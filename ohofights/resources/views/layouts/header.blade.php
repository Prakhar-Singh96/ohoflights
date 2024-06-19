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
                <div class="schedule-call">
                    @if($_SERVER['REQUEST_URI'] =='/register')
                    <button class="btn green-btn" data-bs-toggle="modal" data-bs-target="#login"><img src="images/login.svg" class="" /> <span>Register</span></button>
                    @else
                    <?php
                    if (!Session::get('userid')) { ?>
                        <button class="btn green-btn" data-bs-toggle="modal" data-bs-target="#login"><img src="images/login.svg" class="" /> <span>Login</span></button>
                    <?php } ?>
                    <?php
                    if (Session::get('userid')) { ?>
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
@yield('content')