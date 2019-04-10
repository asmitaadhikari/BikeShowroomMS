
   <!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Checkout</title>
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
      <link href="{{asset('Index/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{asset('Index/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="{{asset('stylesheet" href="Index/css/shop.css" type="text/css') }}" />
      <!--//Shoping cart-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="{{asset('Index/css/checkout.css') }}">
      <!--//checkout-->
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
                     <h1><a class="navbar-brand" href="/">Bike-Shop</a></h1>
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
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
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
                  </ul>
               </div>
            </nav>
         </div>
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="/">Home</a>
                     <span>/ </span>
                  </li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--Checkout-->  
         <!-- //banner -->
         <!-- top Products -->
         <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Chec<span>kout</span></h3>
                     <div class="checkout-right">
                       
                        <table class="timetable_sub">
                           <thead>
                              <tr>
                                 <th>SL No.</th>
                                 <th>Product</th>
                                 
                                 <th>Product Name</th>
                                 <th>Price</th>
                                 <th>Remove</th>
                              </tr>
                           </thead>
                           @if($book->count()>0)
                             @foreach($book as $key => $booking)
                           <tbody>
				
                              <tr class="rem1">
                                 <td class="invert">{!!$key + 1 !!}</td>
                                 <td class="invert-image"><a href="single.html"><img src="/{!! $booking->img !!} "  class="img-responsive"></a></td>
                                 <td class="invert">{!! $booking->name !!} </td>
                                 <td class="invert">{!! $booking->price !!} </td>
                                 <td class="invert"></td>
                                 <td class="invert">
                                    <div class="rem">
                                    <div class="close1"> </div>
                                    </div>
                                 </td>
                              </tr>
                            
                             
                           </tbody>
                           @endforeach
         @else
         
         <h1 class="text-center">Your cart is empty !!</h1>
         
         @endif
                        </table>

					 </div>
		
                  
              
            </div>
      </section>
      <!--subscribe-address-->
      <section class="subscribe">
    
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Toys-Shop. All Rights Reserved | Design by Asmita Adhikari
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <script src="{{asset('Index/js/jquery-2.2.3.min.js') }}"></script>
      <!--//js working-->
      <!-- cart-js -->	
      <script src="{{asset('Index/js/minicart.js') }}"></script>
      
      <!--// cart-js -->
      <!--quantity-->
      <script>
         $('.value-plus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) + 1;
         	divUpd.text(newVal);
         });
         
         $('.value-minus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) - 1;
         	if (newVal >= 1) divUpd.text(newVal);
         });
      </script>
      <!--quantity-->
      <!--closed-->
      <script>
         $(document).ready(function (c) {
         	$('.close1').on('click', function (c) {
         		$('.rem1').fadeOut('slow', function (c) {
         			$('.rem1').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close2').on('click', function (c) {
         		$('.rem2').fadeOut('slow', function (c) {
         			$('.rem2').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close3').on('click', function (c) {
         		$('.rem3').fadeOut('slow', function (c) {
         			$('.rem3').remove();
         		});
         	});
         });
      </script>
      <!--//closed-->
      <!-- start-smoth-scrolling -->
      <script src="{{asset('Index/Index/js/move-top.js') }}"></script>
      <script src="{{asset('Index/Index/js/easing.js') }}"></script>
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
      <!--bootstrap working-->
      <script src="{{asset('Index/js/bootstrap.min.js') }}"></script>
      <!-- //bootstrap working-->
   </body>
</html>