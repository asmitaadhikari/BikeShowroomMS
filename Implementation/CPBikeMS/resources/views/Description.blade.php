
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="{{asset('Cate/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{asset('Cate/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="{{asset('Cate/css/shop.css') }}" type="text/css" />
      <!--//Shoping cart-->
      <link rel="stylesheet" type="text/css" href="{{asset('Cate/css/jquery-ui1.css') }}">
      <link href="{{asset('Cate/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="{{asset('Cate/css/flexslider.css') }}" type="text/css" media="screen" />
      <!--stylesheets-->
      <link href="{{asset('Cate/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  
		 
				
      
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('css/specification.css') }}" type="text/css" rel="stylesheet" media="all"> 
<link href="{{asset('css/font-awesome.css') }}" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('css/lightbox.css') }}">
<!--//Custom Theme files-->
<!-- js -->
<script src="{{asset('js/jquery-2.2.3.min.js') }}"></script>  
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet"> 
<!-- //web-fonts --> 

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
              
          
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                        <div class="flexslider1">
                           <ul class="slides">
                           @foreach($getproduct as $products)

                              <li data-thumb="images/f1.jpg">
                              @if($products->img)
                                 <div class="thumb-image"> <img src="/{!!($products->img)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                 @endif
                              </li>
                             
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                     <h3>{!! $products->name!!}</h3>
                     <p ><span style="color:grey;font-size:20px;" class="item_price">RS:{!! $products->price!!}</span><br> 
                     <span style="color:grey;font-size:15px;" class="item_price">CC:{!! $products->cc!!}</span><br> 
                     <span style="color:grey;font-size:15px;" class="item_price">Fuel:{!! $products->fuel!!}</span><br> 
                    <span style="color:grey;font-size:15px;" class="item_price">Gear:{!! $products->gear!!}</span> <br>
                    <span style="color:grey;font-size:15px;" class="item_price">Speed:{!! $products->speed!!}</span><br> 
                    <span style="color:grey;font-size:15px;" class="item_price">Technology:{!! $products->technology!!}</span><br> 
                    <span style="color:grey;font-size:15px;" class="item_price">Tyre:{!! $products->tyre!!}</span><br> 
                    <span style="color:grey;font-size:15px;" class="item_price">Stroke:{!! $products->stroke!!}</span><br> 
                    <span style="color:grey;font-size:15px;" class="item_price">Warranty:{!! $products->warranty!!}</span><br> 
                    <span style="color:grey;font-size:15px;" class="item_price">Clutch:{!! $products->Clutch!!}</span><br> 
                    
                    </p>  
                    
                                         
                     
                   
                     <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                           <form method="Post" action="{{url('/Booking/{$products->productid}')}}">
                           
                           {{ csrf_field() }}
			                  	{{method_field('put')}}

                              <input type="hidden"name="productid" value="{{$products->productid}}"/>

				                     @auth
				                  <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
				                     @endauth

                              <button onclick="if (!confirm('Are you sure to book this item?')) { return false }"
                              type="submit" class="toys-cart ptoys-cart add">
                          Book Now
                              </button>
                           </form>
                        </div>
                     </div>
                    
                  </div>
                  <div class="clearfix"> </div>
                  
                        
                     
                           @endforeach
                     </div>
                  </div>
                  <!--//tabs-->
               </div>
            </div>
         </div>
      </section>
      <br><br><br>
      <!--subscribe-address-->
   
     
    
      <!-- //Modal 1-->
      <!--jQuery-->
      <script src="{{asset('Cate/js/jquery-2.2.3.min.js') }}"></script>
      <!-- newsletter modal -->
      <!-- cart-js -->
      <script src="{{asset('Cate/js/minicart.js') }}"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- price range (top products) -->
      <script src="{{asset('js/jquery-ui.js') }}"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
         	$("#slider-range").slider({
         		range: true,
         		min: 0,
         		max: 9000,
         		values: [50, 6000],
         		slide: function (event, ui) {
         			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
         		}
         	});
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="{{asset('Cate/js/imagezoom.js') }}"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="{{asset('Cate/js/easy-responsive-tabs.js') }}"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- FlexSlider -->
      <script src="{{asset('js/jquery.flexslider.js') }}"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function () {
         	$('.flexslider1').flexslider({
         		animation: "slide",
         		controlNav: "thumbnails"
         	});
         });
      </script>
      <!-- //FlexSlider-->
      <!-- start-smoth-scrolling -->
      <script src="{{asset('Cate/js/move-top.js') }}"></script>
      <script src="{{asset('Cate/js/easing.js') }}"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="{{asset('js/bootstrap.min.js') }}"></script>
      <!-- //bootstrap working--> 

      <div class="footer">
		<div class="container"> 
			<div class="footer-w3lsrow">
				<div class="col-md-4 footer-grids footer-address">
					<h3>Contact Us :</h3>
					<ul>
						<li><i class="glyphicon glyphicon-send"></i> <span> Kathmandu Nepal </span></li>
						<li><i class="glyphicon glyphicon-phone"></i> +977 9846045363 <span>  </span></li>
						<li><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:example@mail.com"> asmitaadhikari62@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids subscribe">
					<h3>Newsletter :</h3> 
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Your Email" required="">
						<input type="submit" value="Subscribe">
						<div class="clearfix"> </div> 
					</form>
					
				</div>
				<div class="col-md-4 footer-grids footer-icons">
					<h3>Follow Us :</h3>
					<div class="agile_social_icons">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>  
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<p>© 2019 Motorbike. All rights reserved | Design by Asmita Adhikari.</a></p>
			</div>
		</div>
	</div>