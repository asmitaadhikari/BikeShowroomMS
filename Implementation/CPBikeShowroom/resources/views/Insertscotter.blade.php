<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{{ URL::asset('custom/assets/bootstrap/css/bootstrap.min.css')}}}">
<link href="{{{ URL::asset('custom/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{{ URL::asset('custom/assets/theme/css/styles/checkout.css')}}}">
<link rel="stylesheet" type="text/css" href="{{{ URL::asset('custom/assets/styles/checkout_responsive.css')}}}">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="{{{ URL::asset('custom/assets/images/search.png')}}}" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
        <li><a href="/Insertbike">Insert Bikes </a></li>
			<li><a href="#">Insert Scotter </a></li>
			<li><a href="#">Insert Old & New Bikes</a></li>
					<li><a href="#">Reviews </a></li>
					<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="{{{ URL::asset('custom/assets/images/phone.svg')}}}" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+977 9843045363</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="{{{ URL::asset('custom/assets/images/logo_1.png')}}}" alt=""></div>
						<div>Admin Dashboard</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="/Insertbike">Insert Bikes </a></li>
			<li><a href="#">Insert Scotter </a></li>
			<li><a href="#">Insert Old & New Bikes</a></li>
					<li><a href="#">Reviews </a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="{{{ URL::asset('custom/assets/images/search.png')}}}" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="#"><div><img src="{{{ URL::asset('custom/assets/images/user.svg')}}}" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img src="{{{ URL::asset('custom/assets/images/cart.svg')}}}" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="{{{ URL::asset('custom/assets/images/phone.svg')}}}" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+977 9843045363</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Checkout</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">Billing</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" class="checkout_form">
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" id="checkout_name" class="checkout_input" placeholder="First Name" required="required">
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" id="checkout_last_name" class="checkout_input" placeholder="Last Name" required="required">
										</div>
									</div>
									<div>
										<!-- Company -->
										<input type="text" id="checkout_company" placeholder="Company" class="checkout_input">
									</div>
									<div>
										<!-- Country -->
										<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
											<option>Country</option>
											<option>Lithuania</option>
											<option>Sweden</option>
											<option>UK</option>
											<option>Italy</option>
										</select>
									</div>
									<div>
										<!-- Address -->
										<input type="text" id="checkout_address" class="checkout_input" placeholder="Address Line 1" required="required">
										<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" placeholder="Address Line 2" required="required">
									</div>
									<div>
										<!-- Zipcode -->
										<input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Zip Code" required="required">
									</div>
									<div>
										<!-- City / Town -->
										<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required">
											<option>City / Town</option>
											<option>City</option>
											<option>City</option>
											<option>City</option>
											<option>City</option>
										</select>
									</div>
									<div>
										<!-- Province -->
										<select name="checkout_province" id="checkout_province" class="dropdown_item_select checkout_input" require="required">
											<option>Province</option>
											<option>Province</option>
											<option>Province</option>
											<option>Province</option>
											<option>Province</option>
										</select>
									</div>
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Phone No." required="required">
									</div>
									<div>
										<!-- Email -->
										<input type="phone" id="checkout_email" class="checkout_input" placeholder="Email" required="required">
									</div>
									<div class="checkout_extra">
										<ul>
											<li class="billing_info d-flex flex-row align-items-center justify-content-start">
												<label class="checkbox_container">
													<input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
													<span class="checkbox_mark"></span>
													<span class="checkbox_text">Terms and conditions</span>
												</label>
											</li>
											<li class="billing_info d-flex flex-row align-items-center justify-content-start">
												<label class="checkbox_container">
													<input type="checkbox" id="cb_2" name="billing_checkbox" class="billing_checkbox">
													<span class="checkbox_mark"></span>
													<span class="checkbox_text">Create an account</span>
												</label>
											</li>
											<li class="billing_info d-flex flex-row align-items-center justify-content-start">
												<label class="checkbox_container">
													<input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
													<span class="checkbox_mark"></span>
													<span class="checkbox_text">Subscribe to our newsletter</span>
												</label>
											</li>
										</ul>
									</div>
								</form>
							</div>
						</div>
					</div>

					
	
	</div>
		
</div>

<script src="{{{ URL::asset('custom/assets/js/jquery-3.2.1.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/styles/bootstrap-4.1.2/popper.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/styles/bootstrap-4.1.2/bootstrap.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/greensock/TweenMax.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/greensock/TimelineMax.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/scrollmagic/ScrollMagic.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/greensock/animation.gsap.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/greensock/ScrollToPlugin.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/easing/easing.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/plugins/parallax-js-master/parallax.min.js')}}}"></script>
<script src="{{{ URL::asset('custom/assets/js/checkout.js')}}}"></script>
</body>
</html>