<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name', 'VeHistoric') }} | @yield('title')</title>
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="{{asset('front-end/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front-end/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{asset('front-end/assets/vertical-timeline/css/vertical-timeline.css" rel="stylesheet')}}"/>
  <!-- Vendor CSS Files -->
  <link href="{{asset('front-end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-end/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-end/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-end/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-end/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('front-end/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('front-end/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{asset('front-end/assets/css/style.css')}}" rel="stylesheet">
  
  <!-- h captcha -->
  <script src="https://hcaptcha.com/1/api.js" async defer></script>

</head>

<body>
        @include('front_inc.header')
					
          @yield('main-content')
        
        @include('front_inc.footer')
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <!-- Template Main Javascript File -->
        <script src="{{asset('build/js/intlTelInput.js')}}"></script> 
        <script class="iti-load-utils" async="" src="{{asset('build/js/utils.js')}}"></script>
        <script src="{{asset('files/inputnumber.js')}}"></script>
        <script src="{{asset('files/commandrapport.js')}}"></script>
    
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{asset('front-end/assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front-end/assets/vendor/aos/aos.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        
        
        
        <!-- Template Main JS File -->
        <script src="{{asset('front-end/assets/js/main.js')}}"></script>
        <script src="{{asset('front-end/assets/js/include.js')}}"></script>
        <script src="{{asset('front-end/assets/vertical-timeline/js/vertical-timeline.js')}}"></script>
    </body>

</html>
