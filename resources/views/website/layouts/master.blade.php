<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.png')}}" type="">

    <title>Web : : @yield("title")</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.css')}}" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" />
    <!-- nice select  -->
    <link rel="stylesheet"
          href="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css')}}" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />

    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <!-- font awesome style -->
    <link rel="stylesheet"
          href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css')}}"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack("styles")
    <style>



        .header{
            background-color: #00000080;
            margin-top: -15px;

        }
        .header ul li a {
            color: rgb(255, 255, 255) ;
        }

        .social span {
            font-size: 20px;
            padding-left: 50px !important;
        }
        .social a{
            font-size: 20px;
            padding-left: 50px;
            padding-right: 10px;
        }

        @media (max-width: 768px) {
            .navbar-list {
                display: none;
            }

            .navbar-list.active {
                display: block;
            }

            .navbar-list {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar-list li {
                margin-bottom: 15px;
            }

            .navbar-toggler {
                display: block;
            }
        }

        @media (min-width: 769px) {
            .navbar-toggler {
                display: none;
            }
        }



    </style>
</head>

<body>



<!-- Main Content -->
<div id="content">
    <!-- Navbar -->
    @include('website.layouts.nav')
    <!-- End of Navbar -->

    <!-- Begin Page Content -->
    @yield("content")
    <!-- /.container-fluid -->

</div>

@include("website.layouts.footer")







<!-- jQery -->
<script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{url('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="{{asset('asset/js/bootstrap.js')}}"></script>
<!-- owl slider -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}">
</script>
<!-- isotope js -->
<script src="{{url('https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js')}}"></script>
<!-- nice select -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('asset/js/custom.js')}}"></script>
<!-- Google Map -->
<script src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap')}}">
</script>
<!-- End Google Map -->





<!-- jQuery, Popper.js, and Bootstrap JS -->
<script src="{{url('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>

@stack("scripts")

</body>

</html>
