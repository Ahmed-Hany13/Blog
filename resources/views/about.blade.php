@extends('layouts.app')

@section('content')
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..."/>
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->

<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                   <h2 class="lg-title">About Me</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="pt-5 padding-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="row">
    <div class="col-lg-12">
        <img src="images/about.jpg" alt="" class="img-fluid w-100">
    </div>
</div>

<div class="row justify-content-center mt-5">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-4">
				<h5 class="text-uppercase letter-spacing mb-4">Who is me?</h5>
				<p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat</p>

			</div>
			<div class="col-lg-4">
				<h5 class="text-uppercase letter-spacing mb-4">My vission</h5>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis biben. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
			</div>
			<div class="col-lg-4">
				<h5 class="text-uppercase letter-spacing mb-4">Follow Me :</h5>
				<div class="follow-socials">
					<a href="#" class="fb"><i class="ti-facebook"></i></a>
					<a href="#" class="twt"><i class="ti-twitter"></i></a>
					<a href="#" class="inst"><i class="ti-instagram"></i></a>
					<a href="#" class="youtube"><i class="ti-youtube"></i></a>
					<a href="#" class="pint"><i class="ti-pinterest"></i></a>
				</div>
			</div>
		</div>

		<h3 class="mb-3 mt-5">I have travel 10+ more countries in this year.</h3>
		<p class="mb-5">Poor Alice! It was as much as she could do, lying down on one side, to look through into the garden with one eye; but to get through was more hopeless than ever: she sat down and began to cry again.</p>

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="about-widget mb-4 mb-lg-0">
					<img src="images/news/news-1.jpg" alt="" class="img-fluid">
					<h4 class="mt-3">Hill ward</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-widget mb-4 mb-lg-0">
					<img src="images/news/news-2.jpg" alt="" class="img-fluid">
					<h4 class="mt-3">Awesome ride</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-widget mb-4 mb-lg-0">
					<img src="images/news/news-3.jpg" alt="" class="img-fluid">
					<h4 class="mt-3">Newyork</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="about-widget mb-4 mb-lg-0">
					<img src="images/news/news-4.jpg" alt="" class="img-fluid">
					<h4 class="mt-3">Rising Sea</h4>
				</div>
			</div>
		</div>


	</div>
</div>
			</div>
		</div>
	</div>
</section>


<!--footer start-->
<footer class="footer-section bg-grey">
    <div class="instagram-photo-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">Follow in Instagram</h4>
            </div>
        </div>

        <div class="row no-gutters" id="instafeed">

          </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mb-4">
                    <h2 class="footer-logo">Revolve.</h2>
                </div>
                <ul class="list-inline footer-socials">
                    <li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2"></i>Linkedin</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-pinterest mr-2"></i>Pinterest</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-github mr-2"></i>Github</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-instagram mr-2"></i>Instrgram</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-rss mr-2"></i>rss</a></li>
                </ul>
            </div>

            <div class="col-md-12 text-center">
               <p class="copyright">© Copyright 2019 - Revolve. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

@endsection
