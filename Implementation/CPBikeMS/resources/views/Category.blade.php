
<!DOCTYPE html>
<html lang="en">
<head>
<title>Motorbike</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/specification.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/lightbox.css">
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
					<!-- <div class="clearfix"> </div>
				</div>
			</div>
		
			<div class="banner-text">
				<div class="container">		
					<h2>WE OFFER THE BEST <span>MOTORBIKES</span></h2>
					<a href="#about" class="buy btn-wayra scroll"> More About</a>
				</div> 
			</div>
		</div>
	</div>
	 -->


	
	<!-- //slid -->
	<!-- specifications -->
	<div id="spec" class="spec jarallax">
		<div class="container"> 
			<h3 class="agileits-title w3title2"><span>S</span>pecifications</h3>
			<div class="specw3-agileits">
			@foreach($getproduct as $products)
		<div class="product">
		<div class="product_image">		
								@if($products->img)
									<div class="col-lg-6">
									<img src="/{!!($products->img)!!}" style="max-width:100%" >
									
									</div>
									@endif
				<div class="col-md-6 spec-grids">	
					<h4>1. Key Features </h4>
					<h4> RS:{!! $products->price!!}</h4>
					<h3></h3>
					<ul>
						<li>
							<div class="specf-left">
								<p>Name</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->name!!} </p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>Displacement</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->cc!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>fuel economy</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->fuel!!} </p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>No. of Gears</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->gear!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>Speedometer</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->speed!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>Latest technology</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->technology!!} </p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
					
				
					<h4>2. Key Features</h4>
					<ul>
						<li>
							<div class="specf-left">
								<p>Tyre Type</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->tyre!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>Stroke</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->stroke!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>Clutch</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->Clutch!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="specf-left">
								<p>Warranty</p>
							</div>
							<div class="specf-right">
								<p>{!! $products->warranty!!}</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					
					
					</ul>
		<form method="post" action="{{url('/product')}}" >
		{{ csrf_field() }}
				{{method_field('put')}}

				<input type="hidden"name="productid" value="{{$products->productid}}"/>

				@auth
				<input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
				@endauth

		<button onclick="if (!confirm('Are you sure to book this item?')) { return false }" type="submit">Book Now
		
		</button>
		</form>
		</div>
	
				</div>
				@endforeach	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>			