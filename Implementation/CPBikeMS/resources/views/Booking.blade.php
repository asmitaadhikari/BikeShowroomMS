<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
<meta charset="utf-8">


<link rel="stylesheet" type="text/css" href="{{asset('Cart/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{asset('Cart/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('Cart/styles/cart.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('Cart/styles/cart_responsive.css') }}">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('css/specification.css') }}" type="text/css" rel="stylesheet" media="all"> 
<link href="{{asset('css/font-awesome.css') }}" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('css/lightbox.css') }}">
<!--//Custom Theme files-->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet"> 
<!-- //web-fonts --> 
</head> 
<body> 
	<!-- banner -->
	<div id="home" class="banner">
		<div class="banner-agileinfo">
			<!-- header -->
			<div class="header">
				<div class="container">		
					<div class="logo">
						<h1><a href="index.html">Motorbike</a></h1>
					</div> 
					<div class="menu">
						<a href="" id="menuToggle"> <span class="navClosed"></span> </a>
						<nav>  
							<a href="#home" class="active scroll">Home</a> 
							<a href="#about" class="scroll">About</a>  
							<a href="#services" class="scroll">Services</a>  
							<a href="#news" class="scroll">News</a>
							<a href="#spec" class="scroll">Specifications</a> 
							<a href="#gallery" class="scroll">Gallery</a> 
							<a href="#contact" class="scroll">Contact</a> 
						</nav>
						<script>
						(function($){
							// Menu Functions
							$(document).ready(function(){
							$('#menuToggle').click(function(e){
								var $parent = $(this).parent('.menu');
							  $parent.toggleClass("open");
							  var navState = $parent.hasClass('open') ? "hide" : "show";
							  $(this).attr("title", navState + " navigation");
									// Set the timeout to the animation length in the CSS.
									setTimeout(function(){
										console.log("timeout set");
										$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
									}, 200);
								e.preventDefault();
							});
						  });
						})(jQuery);
						</script>
		 
					</div>
	




	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

        <div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Booking Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
					
					</div>
				</div>
			</div>
		</div>

		<!-- Cart -->

		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">
							
							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Product</li>
									<li>Item Type</li>
									<li>Price</li>
									<li>Image</li>
									<li>Total</li>
								</ul>
							</div>
							@if($booking->count()>0)
                @foreach($booking as $bookings)


							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											<div><div class="product_number"></div></div>
											<div><div class="product_image"><img src="/{{ $booking->img}}"  style="height:100px; width:100px;"></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.html"></a></div>
												<div class="product_text"></div>
											</div>
										</div>
										<div class="product_color product_text"><span>{!! $booking->name !!} </span></div>
										<div class="product_size product_text"><span>Size: </span></div>
										<div class="product_price product_text"><span>Price: </span></div>
										<div class="product_quantity_container">
											
										</div>
										<div class="product_total product_text"><span></span></div>
									</li>
								</ul>
							</div>
							@endforeach
         @else
         
         <h1 class="text-center">Your cart is empty !!</h1>
         
         @endif
							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200"><a href="categories.html">Clear Booking</a></div>
									<div class="button button_continue trans_200"><a href="categories.html">Continue shopping</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
		<!-- Footer -->

		
						<!-- Footer Contact -->
					

<script src="{{asset('Cart/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{asset('Cart/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{asset('Cart/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{asset('Cart/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{asset('Cart/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{asset('Cart/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{asset('Cart/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{asset('Cart/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{asset('Cart/plugins/easing/easing.js') }}"></script>
<script src="{{asset('Cart/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{asset('Cart/js/cart.js') }}"></script>



