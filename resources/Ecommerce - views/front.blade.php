<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/grid.css')}}">






    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{asset('app/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app/css/styles.css')}}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">
    <div class="container">
        <div class="header-content-wrapper">
            <ul class="nav-add">
                <li class="cart">
                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{Cart::content()->count()}}</span>
                    </a>
                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h5 class="title-cart text-center">{{Cart::total()}}</h5><br>

                            <a href="{{route('cart.index')}}">
                                <div class="btn btn-small btn--dark">
                                    <span class="text">View Cart</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="list-unstyled list-inline">
                <li class="brand"><strong>BOOK STORE</strong></li>
                <li><a href="/" class="text-muted">Home</a></li>
                <li><a href="{{route('cart.index')}}" class="text-muted">View Cart</a></li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">


    <!-- End Books products grid -->
    @yield('content')
</div>
<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{asset('app/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('app/js/crum-mega-menu.js')}}"></script>
<script src="{{asset('app/js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('app/js/theme-plugins.js')}}"></script>
<script src="{{asset('app/js/main.js')}}"></script>
<script src="{{asset('app/js/form-actions.js')}}"></script>
<script src="{{asset('app/js/velocity.min.js')}}"></script>
<script src="{{asset('app/js/ScrollMagic.min.js')}}"></script>
<script src="{{asset('app/js/animation.velocity.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{--{{asset('app/')}}--}}
<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>