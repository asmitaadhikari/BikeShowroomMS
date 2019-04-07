
      
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
      <link href="Cate/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="Cate/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="Cate/css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="Cate/css/jquery-ui1.css">
      <!--//price range-->
      <!--stylesheets-->
      <link href="Cate/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

      
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
               <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
               <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="agileits-title w3title2">Bike <br><span>C</span><span>A</span><span>T</span><span>E</span><span>G</span><span>O</span><span>R</span><span>Y</span></h3>
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
                     @foreach($getproduct as $productcat)
                     <ul>
                     
                        <li>
                          
                         <a href="">  <span class="span">{!! $productcat->producttypename !!}</span></a>
                        </li>
                     
                     </ul>
                     @endforeach
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
      <script src='Cate/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
       <script src="Cate/js/minicart.js"></script>
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
		<script src="Cate/js/jquery-ui.js"></script>
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

      <!-- start-smoth-scrolling -->
       <script src="Cate/js/move-top.js"></script>
      <script src="Cate/js/easing.js"></script>
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
      <script src="Cate/js/bootstrap.min.js"></script>


