<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>MotorBike | Product</title>
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
      <link href="Index/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="Index/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="Index/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="Index/css/jquery-ui1.css">
      <!--//price range-->
      <!--stylesheets-->
      <link href="Index/css/style.css" rel='stylesheet' type='text/css' media="all">
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
                     <p>+977 984305363</p>
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
                  <li class="nav-item ">
                     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="/About" class="nav-link">About</a>
                  </li>
                 
                  <li class="nav-item">
                     <a href="/ProductCategory" class="nav-link">Shop Now</a>
                  </li>
                  
                  <li class="nav-item dropdown active">
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
                     <a href="contact.html " class="nav-link">Contact</a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
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
               <li>Products</li>
            </ul>
         </div>
      </div>
               <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
               <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="agileits-title w3title2"> <br><span>C</span><span>A</span><span>T</span><span>E</span><span>G</span><span>O</span><span>R</span><span>Y</span></h3>
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                    
                     <form action="#" method="post">
                        <input type="search" placeholder="Search here..." name="search" required="">
                       
                     </form>
                  </div>
							<!-- price range -->
							
							<!-- //price range -->
                  <!--preference -->
                  <div class="left-side">
                
                     <h3 class="agileits-sear-head">Category</h3>
                     
                     <ul>
                     @foreach($product as $productcat)
                        <li>
                       
                         <a href="">  <span class="span">{!! $productcat->producttypename !!}</span></a>

                       
                        </li>
                        @endforeach
                     </ul>
                     
                  </div>
            
               </div>

              
               <div class="left-ads-display col-lg-9">
                  <div class="row">
                  @foreach($getproduct as $products)
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                              @if($products->img)
                                 <img src="/{!!($products->img)!!}" class="img-thumbnail img-fluid" alt="">
                                
                                 <div class="men-cart-pro">
                                   
                                 </div>
                                 @endif
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href="single.html">{!! $products->name!!}</a>
                                          </h4>
                                          <div class="grid-price mt-2">
                                             <span class="money ">RS:{!! $products->price!!}</span>
                                          </div>
                                       </div>
                                      <a href="/Description/{{$products->productid}}" class="link-product-add-cart">Quick View</a>
                                          <br>
                                          <br>
                                    </div>
                                    <div class="toys single-item hvr-outline-out">
                                       <form action="#" method="post">
                                          <input type="hidden" name="cmd" value="_cart">
                                          <input type="hidden" name="add" value="1">
                                          <input type="hidden" name="toys_item" value="toys(barbie)">
                                          <input type="hidden" name="amount" value="575.00">
                                         
                                       </form>
                                    </div>
                                 </div>
                            
                                 <div class="clearfix"></div>
                                 
                              </div>
                           </div>
                           
                        </div>
                     </div>
                    @endforeach
                
      </section>


<!--//subscribe-address-->
<section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
   <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
      <div class="icons mt-4 text-center">
         <ul>
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fas fa-envelope"></span></a></li>
            <li><a href="#"><span class="fas fa-rss"></span></a></li>
            <li><a href="#"><span class="fab fa-vk"></span></a></li>
         </ul>
         <p class="my-3">velit sagittis vehicula. Duis posuere 
            ex in mollis iaculis. Suspendisse tincidunt
            velit sagittis vehicula. Duis posuere 
            velit sagittis vehicula. Duis posuere 
         </p>
      </div>
      <div class="email-sub-agile">
         <form action="#" method="post">
            <div class="form-group sub-info-mail">
               <input type="email" class="form-control email-sub-agile" placeholder="Email">
            </div>
            <div class="text-center">
               <button type="submit" class="btn subscrib-btnn">Subscribe</button>
            </div>
         </form>
      </div>
   </div>
</section>
<!--//subscribe-->
<!-- footer -->
<footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
   <div class="copy-agile-right">
      <p> 
         © 2019 Motorbike. All Rights Reserved | Design by  <a href="http://www.W3Layouts.com" target="_blank">Asmita Adhikari</a>
      </p>
   </div>
</footer>
<!-- //footer -->
<!-- Modal 1-->

<!-- //Modal 1-->
<!--js working-->
<script src='Index/js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!-- cart-js -->
<script src="Index/js/minicart.js"></script>
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
<!--responsiveslides banner-->
<script src="Index/js/responsiveslides.min.js"></script>
<script>
   // You can also use "$(window).load(function() {"
   $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
         auto: true,
         pager:false,
         nav:true ,
         speed: 900,
         namespace: "callbacks",
         before: function () {
            $('.events').append("<li>before event fired.</li>");
         },
         after: function () {
            $('.events').append("<li>after event fired.</li>");
         }
      });
   
   });
</script>
<!--// responsiveslides banner-->	 
<!--slider flexisel -->
<script src="Index/js/jquery.flexisel.js"></script>
<script>
   $(window).load(function() {
      $("#flexiselDemo1").flexisel({
         visibleItems: 3,
         animationSpeed: 3000,
         autoPlay:true,
         autoPlaySpeed: 2000,    		
         pauseOnHover: true,
         enableResponsiveBreakpoints: true,
         responsiveBreakpoints: { 
            portrait: { 
               changePoint:480,
               visibleItems: 1
            }, 
            landscape: { 
               changePoint:640,
               visibleItems:2
            },
            tablet: { 
               changePoint:768,
               visibleItems: 2
            }
         }
      });
      
   });
</script>
<!-- //slider flexisel -->
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
<!--bootstrap working-->
<script src="Index/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
</body>
</html>