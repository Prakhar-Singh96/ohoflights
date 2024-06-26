<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')

    <body>
        <div id="main-wrapper">
            <!-- header -->
            @include('layouts.header')
            

            <!-- banner -->
            @include('layouts.banner')

            <!-- Main Content -->
            <div class="content">
                @yield('content')
            </div>

            <!-- footer -->
            @include('layouts.footer')
            <div class="overlay-body"></div>
        </div>
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
