<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from uniquecx.com/html/unique/happy/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 09:38:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="unique-theme">

    <title> Happy Lovee </title>

    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home">

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="middle">
            <i class="fi flaticon-favorite-heart-button"></i>
            <i class="fi flaticon-favorite-heart-button"></i>
            <i class="fi flaticon-favorite-heart-button"></i>
            <i class="fi flaticon-favorite-heart-button"></i>
        </div>
    </div>
    <!-- end preloader -->


    <!-- Start header -->
    @include('layout.header')
    <!-- end of header -->



    <!-- start of hero -- slider -->
    @include('section.slider.slider')
    <!-- end of hero slider -->


    <!-- start cupple-section -->
    @include('section.couple.couple')
    <!-- end cupple-section -->

    <!-- start of save-the-date-section -->
    @include('section.save-date.save_date')
    <!-- start of save-the-date-section -->

    <!-- start story-section -->
    @include('section.story.story')
    <!-- end story-section -->


    <!-- start wishes-section -->
    @include('section.wishes.wishes')
    <!-- end wishes-section -->


    <!-- start wedding-location-section -- event---->
    @include('section.event.event')
    <!-- end wedding-location-section  -->


    <!-- start groomsmen-bridesmaid section ---people -->
    @include('section.people.people')
    <!-- end groomsmen-bridesmaid section -->


    <!-- start gallery-section -->
    @include('section.gallery.gallery')
    <!-- end gallery-section -->

    <!-- start rsvp-section -->

    <!-- end rsvp-section -->

    <!-- start site-footer -->
    @include('layout.footer')
    <!-- end site-footer -->


</div>
<!-- end of page-wrapper -->

</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins for this template -->
<script src="{{asset('assets/js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('assets/js/jquery.arctext.js')}}"></script>

<!-- Custom script for this template -->
<script src="{{asset('assets/js/script.js')}}"></script>
</body>


<!-- Mirrored from uniquecx.com/html/unique/happy/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 09:40:11 GMT -->
</html>
