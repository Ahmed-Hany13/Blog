@extends('layouts.app')

@section('content')
<body>
<!--search overlay start-->
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
                   <h2 class="lg-title">Contact</h2>
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
        <img src="images/contact.jpg" alt="" class="img-fluid w-100">
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <p class="mt-5 mb-5">Something splashing about in the pool a little way off, and she swam nearer to make out what it was: at first she thought it must be a walrus or hippopotamus, but then she remembered how small she was now, and she soon made out that it was only a mouse that had slipped in like herself.</p>

        <h2 class="mb-4">Get In Touch</h2>

        <form id="contact-form" class="contact-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Your Name (required)</label>
                        <input class="form-control form-control-name" name="name" id="name" type="text" required >
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email (required)</label>

                        <input class="form-control form-control-email" name="email" id="email" type="email" required >
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control form-control-message" name="message" id="message" rows="7" required ></textarea>
                    </div>

                    <button class="btn btn-primary solid blank mt-3" type="submit">Send Message</button>
                </div>
            </div>
        </form>
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



</body>
@endsection
