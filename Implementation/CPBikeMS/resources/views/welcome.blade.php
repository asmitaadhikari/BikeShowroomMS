<!DOCTYPE html>
<html lang="en">
<head>
<title>Motorbike</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/lightbox.css">
<!--//Custom Theme files-->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->


<script src="Admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="Admin/js/bootstrap.min.js"></script>


<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet"> 
<!-- //web-fonts --> 



	<!-- banner -->
	<div id="home" class="banner">
		<div class="banner-agileinfo">
		
			<!-- header -->
			<div class="header col-md-12">
				<div class="container col-md-12">		
					<div class="logo col-md-12">
						<div style="float:left;" class="col-md-8">
						<h1><a href="index.html">Motorbike</a></h1>
</div>
						<div class="col-md-2 mt-2" style="float:left;">
						<a class="nav-link" style="font-size:22px;color:#EA7686" href="{{ route('logout')}}" 
                                    
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ Auth::user()->name }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{@csrf_field()}}
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        
                                        <span>Logout</span>
																		</a>
</div>
					</div> 

					<div class="menu">
						
				


<div class="agile_user_icons">
						<ul class="agileits_user_list">
									
						<li class="nav-item">
                
                                </li>
				
						
						</ul>
						
						</div>
						<a href="" id="menuToggle"> <span class="navClosed"></span> </a>
				
						<nav>  
					
							
							<a href="#home" class="active scroll">Home</a> 
							<a href="#about" class="scroll">About</a>  
							<a href="#services" class="scroll">Services</a>  
							
							<a href="/Category" >Category</a> 
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
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //header -->
			<div class="banner-text">
				<div class="container">		
					<h2>WE OFFER THE BEST <span>MOTORBIKES</span></h2>
					<a href="#about" class="buy btn-wayra scroll"> More About</a>
				</div> 
			</div>
		</div>
	</div>

	<!-- services -->
	<div id="services" class="services">
		<div class="container"> 
			<h3 class="agileits-title w3title2"><span>S</span>ervices</h3>
			<div class="services-row-agileinfo">
				<div class="col-sm-4 col-xs-6 services-w3grid">
					<span class="fa fa-heart hi-icon" aria-hidden="true"></span>
					<h5>Cum soluta nobis</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div>
				<div class="col-sm-4 col-xs-6 services-w3grid">
					<span class="fa fa-wrench hi-icon" aria-hidden="true"></span>
					<h5>Soluta vum nobis</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div>
				<div class="col-sm-4 col-xs-6 services-w3grid">
					<span class="fa fa-bell hi-icon" aria-hidden="true"></span>
					<h5>Nobis cum soluta</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div> 
				<div class="col-sm-4 col-xs-6 services-w3grid">
					<span class="fa fa-motorcycle hi-icon" aria-hidden="true"></span>
					<h5>Cum soluta nobis</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div>
				<div class="col-sm-4 col-xs-6 services-w3grid">
					<span class="fa fa-check-square-o hi-icon" aria-hidden="true"></span>
					<h5>Soluta vum nobis</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div>
				<div class="col-sm-4 col-xs-6 services-w3grid">
					<span class="fa fa-gears hi-icon" aria-hidden="true"></span>
					<h5>Nobis cum soluta</h5>
					<p>Itaque earum rerum hic a sapiente delectus finibus gravida</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
		 </div>
	</div>
	<!-- //services -->
	<!-- //banner -->
	<!-- welcome -->	
	
	<!-- //welcome -->	
	<!-- slid -->
	<!-- //specifications -->
	<!-- news -->
	<div id="news" class="news">   
		<div class="container"> 
			<h3 class="agileits-title w3title2"><span>C</span>ategory </h3>
			<div class="news-agileinfo">
				<div class="col-md-4 news-w3grid">
					<img src="images/img2.jpg" alt="">
					<div class="news-w3grid-info">
						<h5><span>10</span> April </h5>
						<h4>Donec cursus</h4>
						<p>Etiam ex lorem cursus vitae placerat suscipit dapibus tortor sed nec augue</p>
						<div class="article-links">
							<ul>
								<li><a href="#"><i class="glyphicon glyphicon-heart-empty"></i><span>1,052</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-comment"></i><span>10K</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-w3grid">
					<img src="images/img3.jpg" alt="">
					<div class="news-w3grid-info">
						<h5><span>15</span> April </h5>
						<h4>Suscipit dapib</h4>
						<p>Lorem cursus vitae placerat etiam ex suscipit dapibus tortor sed nec augue</p>
						<div class="article-links">
							<ul>
								<li><a href="#"><i class="glyphicon glyphicon-heart-empty"></i><span>1,052</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-comment"></i><span>10K</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-w3grid">
					<img src="images/img4.jpg" alt="">
					<div class="news-w3grid-info">
						<h5><span>18</span> April </h5>
						<h4>Tortor sed</h4>
						<p>Etiam ex lorem cursus vitae placerat suscipit dapibus tortor sed nec augue</p>
						<div class="article-links">
							<ul>
								<li><a href="#"><i class="glyphicon glyphicon-heart-empty"></i><span>1,052</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-comment"></i><span>10K</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div> 
	</div>
	<!-- //news --> 
	<!-- gallery -->
	<div class="gallery" id="gallery">	 
		<h3 class="agileits-title w3title2"><span>G</span>allery</h3>
		<div class="gallery-info">	
			<div class="col-sm-6 gallery-grids glry-grid1">
				<div class="gallery-grids-top">
					<a class="b-link-stripe b-animate-go" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
						<img src="images/g3.jpg" class="img-responsive" alt=""/>
						<div class="b-wrapper">
							<span class="b-animate b-from-left"> 
								<i class="fa fa-arrows-alt" aria-hidden="true"></i>
							</span>					
						</div>
					</a>
				</div>
				<div class="gallery-grids-top">
					<div class="col-sm-6 col-xs-6 bottom-grids">
						<a class="b-link-stripe b-animate-go" href="images/img2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/img2.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-xs-6 bottom-grids">
						<a class="b-link-stripe b-animate-go" href="images/img4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
							<img src="images/img4.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<span class="b-animate b-from-left">
									<i class="fa fa-arrows-alt" aria-hidden="true"></i>
								</span>					
							</div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6 gallery-grids glry-grid2">
				<a class="b-link-stripe b-animate-go" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
					<img src="images/g2.jpg" class="img-responsive" alt=""/>
					<div class="b-wrapper">
						<span class="b-animate b-from-left">
							<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						</span>					
					</div>
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 gallery-grids glry-grid3">
				<a class="b-link-stripe b-animate-go" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
					<img src="images/g1.jpg" class="img-responsive" alt=""/>
					<div class="b-wrapper">
						<span class="b-animate b-from-left">
							<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						</span>					
					</div>
				</a>
				<a class="b-link-stripe b-animate-go" href="images/img1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ">
					<img src="images/img1.jpg" class="img-responsive" alt=""/>
					<div class="b-wrapper">
						<span class="b-animate b-from-left">
							<i class="fa fa-arrows-alt" aria-hidden="true"></i>
						</span>					
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
			<script src="js/lightbox-plus-jquery.min.js"> </script>
		</div>
	</div>
	<!-- //gallery -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container"> 
			<h3 class="agileits-title w3title2"><span>C</span>ontact Us</h3>
			<div class="contact-grids">
				<div class="col-md-5 address">
					<h4>Get in touch with us</h4>
					<p class="cnt-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages sed do </p>
					<div class="agile_social_icons">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>  
					<p>Kathmandu Nepal </p>
					<p>Telephone : +977 9843045363</p>
				
					<p>Email : <a href="mailto:example@mail.com">asmitaadhikari62@gmail.com</a></p>
				</div>
				<div class="col-md-7 contact-form">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" class="email" name="Email" placeholder="Email" required="">
						<textarea placeholder="Message" name="Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="w3-agilemap">  
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"></iframe>
			</div> 
		</div>
	</div>
	<!-- //contact --> 
	<!-- footer -->
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