<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revolve - Personal Magazine blog Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="revolve" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css.map') }}">
</head>
<body>
@include('partials.nav')

@yield('content')

		<div class="footer-btm mt-5 pt-4 border-top">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-inline footer-socials-2 text-center">
		              <li class="list-inline-item"><a href="#">Privacy policy</a></li>
		              <li class="list-inline-item"><a href="#">Support</a></li>
		              <li class="list-inline-item"><a href="#">About</a></li>
		              <li class="list-inline-item"><a href="#">Contact</a></li>
		              <li class="list-inline-item"><a href="#">Terms</a></li>
		              <li class="list-inline-item"><a href="#">Category</a></li>
		            </ul>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="copyright text-center ">
						@ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<!-- Owl caeousel -->
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/slick-carousel/slick.min.js"></script>
<script src="plugins/magnific-popup/magnific-popup.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed-js/instafeed.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="js/custom.js"></script>



</body>
</html>
