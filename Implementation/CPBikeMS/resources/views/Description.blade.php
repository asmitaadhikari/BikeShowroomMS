
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title></title>
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
      <link href="{{asset('Index/css/bootstrap.min.css') }}"rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{asset('Index/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="{{asset('Index/css/shop.css') }}" type="text/css" />
      <!--//Shoping cart-->
      <link rel="stylesheet" type="text/css" href="{{asset('Index/css/jquery-ui1.css') }}">
      <link href="{{asset('Index/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="Index/css/flexslider.css') }}" type="text/css" media="screen" />
      <!--stylesheets-->
      <link href="{{asset('Index/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
      <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
            <div class="info-contact-agile">
               <ul>
                  <li>
                     <span class="fas fa-phone-volume"></span>
                     <p>+9843045363</p>
                  </li>
                  <li>
                     <span class="fas fa-envelope"></span>
                     <p><a href="mailto:info@example.com">MotorBike@gmail.com</a></p>
                  </li>
                  <li>
                  </li>
               </ul>
            </div>
         </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.html">Toys-Shop</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <span class="far fa-heart"></span>
                           </li>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="/About" class="nav-link">About</a>
                     </li>
                  
                     <li class="nav-item">
                        <a href="/ProductCategory" class="nav-link">Shop Now</a>
                     </li>
                    
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="/ProductCategory">Bikes</a>
                           <a class="nav-link " href="/ProductCategory">Scooters</a>
                           <a class="nav-link " href="/ProductCategory">Old&used</a>
                           
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                     @auth
                     <li class="nav-item">
                        <a href="/Booking" class="nav-link">View booking</a>
                     </li>
                    @endauth
                     
                     @auth
                     <li class="nav-item dropdown">
                    
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account Setting
                     
                        
                        
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="">Edit profile</a>

                           <a class="nav-link" href="{{route('logout')}}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">Logout
                         
                           <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                           {{@csrf_field}}
                         
                           
                        </div>
                        </a>
                     </li>
                     @endauth
                  </ul>
               </div>
            </nav>
         </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/ /</span>
               </li>
               <li>Single Page</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container">
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
                           <form method="Post" action="{!! url('/Description',[$products->productid]) !!}">
                           
                           {{ csrf_field() }}
                              
                              <input type="hidden"name="productid" value="{{$products->productid}}"/>

                                 @auth
                              <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
                                 @endauth

                              <button onclick="if (!confirm('Are you sure to book this item?')) { return false }"
                              type="submit" class="toys-cart ptoys-cart add">
                          Book Now
                              </button>
                           </form>
                           <br>
                           
                          <form method="POST" action="{{url('/Booking')}}">
                          {{csrf_field()}}
                          <button  type="submit"  class="toys-cart ptoys-cart add">
                         View Book 
                        </button>
                          </form> 
                        </div>
                     </div>
                    
                  </div>
                 
             
                              
                  <div class="clearfix"> </div>
                  @endforeach
                  <!--/tabs-->
              
                  <!--//tabs-->
               </div>
            </div>
         </div>
      </section>
      <!--subscribe-address-->
      
      <!--//subscribe-address-->
     
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2019 Bike-Shop. All Rights Reserved | Design by |Asmita Adhikari<a href="" target="_blank">A</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
 
      <!-- //Modal 1-->
      <!--jQuery-->
      <script src="{{asset('Index/js/jquery-2.2.3.min.js') }}"></script>
      <!-- newsletter modal -->
      <!-- cart-js -->
      <script src="{{asset('Index/js/minicart.js') }}"></script>
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
      <script src="Index/js/jquery-ui.js"></script>
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
      <script src="{{asset('Index/js/imagezoom.js') }}"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="{{asset('Index/js/easy-responsive-tabs.js') }}"></script>
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
      <script src="{{asset('Index/js/jquery.flexslider.js') }}"></script>
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
      <script src="Index/js/move-top.js"></script>
      <script src="Index/js/easing.js"></script>
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
      <script src="{{asset('Index/js/bootstrap.min.js') }}"></script>
      <!-- //bootstrap working--> 
   </body>
</html>