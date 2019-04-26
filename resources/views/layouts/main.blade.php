<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts.header')    
</head>
<body>
    
    @include('layouts.menu')
    
    @yield('contenido')
    
    @include('layouts.footer')
    
    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGVCIwbinX0ILIm8KundVXgzkX_yPLsgU"></script>
    
    <!-- google map helper -->
    <!--<script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>-->
</body>
</html>