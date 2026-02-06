<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Education &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/Logo.jpg') }}">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="{{ asset('js/jquery.flexslider.js') }}"></script>	

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->
	
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.nssedu.in</p>
						<p class="num">Call: +91 - 63920 33961</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-4 col-lg-2 col-md-2 col-sm-4">
						<div id="fh5co-logo"><a href="/"><img src="{{ asset('images/logo-1.png') }}" width="100%" ></a></div>
						
					</div>
					
					
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/gallery">Gallery</a></li>
							<li><a href="/academics">Academics</a></li>
                            <li><a href="/blog">News &amp; Media</a></li>
							<li><a href="/toppers">Toppers</a></li>		
							<li><a href="/contact">Contact Us</a></li>
							<li><a href="/cbse">CBSE Mandatory Disclosure</a></li>
							<li class="btn-cta"><a href="/certificate"><span>Transfer Certificate</span></a></li>
						</ul>
					</div>
				</div>
				
				
			</div>
		</div>
	</nav>

    @yield('content')


    <footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>Nalanda Shikshan Sansthan</h3>
					<p style="color: #ef8303;">Address:</p>
					<p >Nalanda Shikshan Sansthan <br> Affiliated to CBSE New Delhi<br> Udhranpur, Shahabad, Hardoi, UP - 241124</p>
					
					<p> <span style="color: #ef8303;">Email:</span> contact@nssedu.in</p>
					<p> <span style="color: #ef8303;">Office Phone No.:</span>  +91 - 96635 56208</p>
				</div>
				<!-- <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Academics</a></li>
						<li><a href="#">News & Media</a></li>
					</ul>
				</div> -->

				<!-- <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div> -->

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Quick Links</h3>
					<ul class="fh5co-footer-links">
					<li><a href="/" style="color: #ef8303;">Home</a></li>
						<li ><a href="/about" style="color: #ef8303;">About</a></li>
						<li><a href="/gallery" style="color: #ef8303;">Gallery</a></li>
						<li><a href="/academics" style="color: #ef8303;">Academics</a></li>
						<li><a href="/blog" style="color: #ef8303;">News & Media</a></li>
						<li><a href="/toppers" style="color: #ef8303;">Toppers</a></li>
						<li><a href="/contact" style="color: #ef8303;">Contact Us</a></li>
					</ul>
				</div>

				<!-- <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div> -->
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021 Nalanda Shikshan Sansthan. All Rights Reserved.</small> 
						<small class="block">Designed and Developed by <a href="https://mismosolutions.com/">Mismo Technologies Private Limited.</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider({
				
				touch: false,
			});
		});
	</script>
	<!-- countTo -->
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    
    @if(View::hasSection('contact'))
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
        <script src="js/google_map.js"></script>
    @endif
	<!-- Count Down -->
	<script src="{{ asset('js/simplyCountdown.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>