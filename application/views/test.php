<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="BISA.AI">
	<meta name="keywords" content="corporate, agency, accountant, advisor, business, company, consulting, corporate, creative, portfolio, financial, finance, startup">
	<meta name="author" content="Theme Path">
	<!-- Title -->
	<title>BISA.AI</title>			
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/logo.png">	
	<!-- Apple Touch Icons -->
	<link rel="apple-touch-icon" href="<?php echo base_url()?>assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/img/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/img/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/img/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/img/apple-touch-icon-180x180.png">
	
	<!-- Stylesheets Start -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.css">	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Preloader Start -->
	<!-- <div id="preloader">
		<div id="preloader-status"></div>
	</div> -->
	<!-- Preloader End -->
	<!-- Header Start -->
	<header>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-8">
						<div class="header-left">
							<ul>
								<!-- <li>We provied best finance services</li>
								<li>ISO 9401:2018 certified company</li> -->
							</ul>	
						</div>
					</div>				
					<div class="col-md-5 col-sm-4">
						<div class="header-right-div">
							<div class="soical-profile">
								<ul>
									<!-- <li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-google"></i></a></li>
									<li><a href=""><i class="fa fa-skype"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- Header Start -->
		<div class="nav-style2">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo">
							<a href="<?php echo base_url('dashboard');?>"><img src="<?php echo base_url()?>assets/img/logo.png" alt=""/></a>
						</div>
					</div>	
					<div class="col-md-10 no-padding-left no-padding-right">
						<div class="menu">
							<nav id="main-menu" class="main-menu">
								<ul>        	
									<li><a href="#offer">Offer</a></li>
									<li><a href="#about">About Us</a></li>
									<li><a href="#feature">Feature</a></li>
									<li><a href="#faq">FAQ</a></li>
									<li><a href="#project">Our Project</a></li>
									<li><a href="#problem">Problem in AI</a></li>
									<li><a href="#client">Client</a></li>
									<li><a href="#pricing">Pricing</a></li>
									<li><a href="#news">News</a></li>
								</ul>								
							</nav>
						</div>					
					</div>	
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>
	<!-- Header End -->	
	
	<!-- Slider Section Start -->
	<div class="slider">
		<div class="all-slide owl-item">		
			<?php foreach ($carousel as $key => $value): ?>
				<div class="single-slide" style="background-image:url('<?php echo base_url()?>uploads/carousel/<?php echo $value->image;?>');">
				<div class="slider-overlay"></div>
					<div class="slider-wrapper">
						<div class="slider-text">
							<div class="slider-caption">
								<h1><?php echo $value->description;?></h1>	
							</div>	
							<!-- <ul>
								<li><a href="contact.html">contact us </a></li>						
								<li><a href="about.html">Read More</a></li>					
							</ul> -->
						</div>
					</div>				
				</div>	
			<?php endforeach ?>
																															
		</div>
	</div>
	<!-- Slider Section End -->	
	
	<!-- Why Us Section Start -->	
	<div id="offer" class="why-us-sec">
		<div class="container-fluid why-us-container">
			<?php foreach ($offer as $key => $value): ?>
				<div class="col-md-4 col-sm-4 why-us-inner" style="background-size: cover; background-position: center center;">
					<div class="why-us-inner-text">
						<div class="why-us-inner-icon  ">
							<img src="<?php echo base_url()?>uploads/offer/<?php echo $value->image;?>" alt=""/>
						</div>
						<h2><a href="#"><?php echo $value->title;?></a></h2>
						<p><?php echo $value->description;?></p>
					</div>
				</div>		
			<?php endforeach ?>
				
			<!-- <div class="col-md-4 col-sm-4 why-us-inner" style="background-image: url('<?php echo base_url()?>assets/img/why_img_2.jpg'); background-size: cover; background-position: center center;">
				<div class="why-us-inner-text">
					<div class="why-us-inner-icon  ">
						<img src="<?php echo base_url()?>assets/img/icon/hand-shake.png" alt=""/>
					</div>
					<h2><a href="#">free consultation</a></h2>
					<p>Lorem ipsum dolor sit amet lorem in mi commodo ullaer pottor in ut. Fringilla vitae  mattis urna enim metus  diam non turpis pede. </p>
				</div>
			</div>			
			<div class="col-md-4 col-sm-4 why-us-inner" style="background-image: url('<?php echo base_url()?>assets/img/why_img_3.jpg'); background-size: cover; background-position: center center;">
				<div class="why-us-inner-text">
					<div class="why-us-inner-icon  ">
						<img src="<?php echo base_url()?>assets/img/icon/megaphone.png" alt=""/>
					</div>
					<h2><a href="#">marketing progress</a></h2>
					<p>Lorem ipsum dolor sit amet lorem in mi commodo ullaer pottor in ut. Fringilla vitae  mattis urna enim metus  diam non turpis pede. </p>
				</div>
			</div> -->
		</div>
	</div>
	<!-- Why Us Section End -->		
	<!-- About company Section Start -->	
	<div id="about" class="about-sec pt-100">
		<div class="container">
			<?php foreach ($information as $key => $value): ?>	
				<div class="row">			
					<div class="col-md-6 col-sm-12">
							<div class="about-short-text">
								<h1><a href="#"><?php echo $value->title;?></a></h1>
								<p class="text-justify"><?php echo $value->description;?></p>
							</div>	
						
						<!-- <div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="about-single-inner">
									<h2><a href="#">our mison </a></h2>
									<p>Lorem ipsum dolor sit amet, mattis sem aenean rutrum donec cursus, ipsum pede ut quis.</p>
									<a href="#" class="anchor-link">learn more</a>
								</div>
							</div>					
							<div class="col-md-6 col-sm-6">
								<div class="about-single-inner">
									<h2><a href="#">our Vison </a></h2>
									<p>Lorem ipsum dolor sit amet, mattis sem aenean rutrum donec cursus, ipsum pede ut quis.</p>
									<a href="#" class="anchor-link">learn more</a>
								</div>
							</div>
						</div> -->
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<iframe style="margin-left: 25px;" width="100%" height="345" src="<?php echo $value->url_video;?>">
							</iframe>				
						</div>				
					</div>	
					<div class="col-md-12">
						<div class="about-border-bottom"></div>
					</div>				
				</div>
			<?php endforeach ?>	
		</div>		
	</div>	
	<!-- About company Section End -->	
	<!-- Service 2 sec start -->
	<div id="feature" class="service2-sec pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Our Feature </h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
			</div>			
			<div class="row">
				<?php foreach ($feature as $key => $value): ?>
					<div class="col-md-4 col-sm-6">
						<div class="service2-inner">
							<div class="service2-img" style="background-image: url('<?php echo base_url()?>assets/img/why_img_2.jpg'); background-size: cover; background-position: center center;"></div>	
							<div class="service2-inner-text">
								<h2><a href="#"><?php echo $value->title;?></a></h2>
								<p style="font-size: 10px;"><?php echo $value->description;?></p>
							</div>
						</div>
					</div>						
				<?php endforeach ?>		
			</div>			
		</div>			
	</div>			
	<!-- Service 2 sec end -->
	<!-- Free Consult sec start-->	
	<div id="faq" class="faq-free-consult-sec pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="faq-style1-sec">
						<div class="sec-title">
							<h1>AI Case</h1>					
						</div>						
						<div class="panel-group" id="accordion" role="tablist">
							<?php 
								$i = 1;
								$j = "";
								foreach ($aicase as $key => $value): 
									if ($i == 1) {
										$j = "One";
									} elseif ($i == 2) {
										$j = "Two";
									} elseif ($i == 3) {
										$j = "Three";
									} elseif ($i == 4) {
										$j = "Four";
									} elseif ($i == 5) {
										$j = "Five";
									} elseif ($i == 6) {
										$j = "Six";
									} elseif ($i == 7) {
										$j = "Seven";
									}
							?>
								<div class="panel">
									<div class="panel-heading" role="tab" id="titleOne">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $j;?>" aria-expanded="true" aria-controls="collapse<?php echo $j;?>">
											   <?php echo $value->title;?></a>
										</h4>
									</div>
									<div id="collapse<?php echo $j;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="title<?php echo $j;?>">
										<div class="panel-content">
											<?php echo $value->description;?>		
										</div>
									</div>
								</div>
							<?php
								$i++; 
								endforeach 
							?>											
						</div>					
					</div>
				</div>	
				<!-- <div class="col-md-6">
					<div class="client-sec">
						<div class="faq-style1-sec">
							<div class="sec-title">
								<h1>our trust partner</h1>					
							</div>							
						</div>							
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="single-client">
									<img src="<?php echo base_url()?>assets/img/client_1.jpg" alt=""/>
								</div>	
							</div>						
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="single-client">
									<img src="<?php echo base_url()?>assets/img/client_2.jpg" alt=""/>
								</div>	
							</div>							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="single-client">
									<img src="<?php echo base_url()?>assets/img/client_3.jpg" alt=""/>
								</div>	
							</div>					
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="single-client">
									<img src="<?php echo base_url()?>assets/img/client_4.jpg" alt=""/>
								</div>	
							</div>					
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="single-client">
									<img src="<?php echo base_url()?>assets/img/client_5.jpg" alt=""/>
								</div>	
							</div>							
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="single-client">
									<img src="<?php echo base_url()?>assets/img/client_6.jpg" alt=""/>
								</div>	
							</div>
						</div>
					</div>	
				</div>	 -->
			</div>	
		</div>	
	</div>		
	<!-- Free Consult sec end-->	
	<!-- Gallery Section Start -->
	<div id="project" class="project-gallery-sec2 pt-100 pb-100">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>our project</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  enim aminim veniam</p>
					</div>
				</div>
			</div>		
			<div class="row">		
				<div class="col-md-12">		
					<div class="gallery-area">	
						<div class="navbarsort">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarfiltr" aria-expanded="false">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>							
							</button>
							<div class="shorttitle">
								<h2>Sort Gallery</h2>
							</div>
						</div>												
						<div class="collapse navbar-collapse latest--project" id="navbarfiltr">
							<ul class="simplefilter">
								<li class="active" data-filter="*">All</li>
								<?php
									$temp = "";
									foreach ($project as $key => $value): 
										$string = str_replace(' ', '', $value->category);
										if ($temp == $value->category) {
											# code...
										} else {
								?>
									<li data-filter=".<?php echo $string;?>"><?php echo $value->category;?></li>
								<?php
										}
										$temp = $value->category;
									endforeach 
								?>											
							</ul>
						</div>
						<div class="project-galllery-style2 gallery-container">
							<?php 
								foreach ($project as $key => $value): 
									$string = str_replace(' ', '', $value->category);
							?>
								<div class="col-xs-6 col-sm-6 col-md-3 project-inner filtr-item <?php echo $string;?>">
									<div class="gallery-item">
										<img src="<?php echo base_url()?>uploads/project/<?php echo $value->image;?>" alt="<?php echo $value->image;?>"/>
										<div class="gallery-overlay">
											<div class="project-gallery-overlay-text">
												<h2><a href="#"><?php echo $value->title;?></a></h2>
											</div>
										</div>
									</div>					
								</div>	
							<?php endforeach ?>					
															
						</div>					
					</div>			
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Section End -->		
	<!-- Service 2 sec start -->
	<div id="problem" class="service2-sec pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Problem in AI</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
			</div>			
			<div class="row">
				<?php foreach ($problem as $key => $value): ?>
					<div class="col-md-4 col-sm-6">
						<div class="service2-inner">
							<div class="service2-img" style="background-image: url('<?php echo base_url()?>uploads/problem/why_img_2.jpg'); background-size: cover; background-position: center center;"></div>	
							<div class="service2-inner-text">
								<h2><a href="#"><?php echo $value->title;?></a></h2>
								<p style=""><?php echo $value->description;?></p>
							</div>
						</div>
					</div>						
				<?php endforeach ?>		
			</div>			
		</div>			
	</div>			
	<!-- Service 2 sec end -->		
	<!-- Testimonial Section Start -->
	<div id="client" class="testimonial-sec pt-100 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>client feedback</h1>
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12">
					<div class="all-testimonial">
						<?php foreach ($client as $key => $value): ?>
							<div class="single-testimonial">					
								<div class="client-comment">
									<div class="client-thumb">
										<img src="<?php echo base_url()?>uploads/client/<?php echo $value->image;?>" alt="<?php echo $value->image;?>"/>
									</div>							
									<h2><?php echo $value->name;?></h2>
									<h3><?php echo $value->position;?></h3>							
									<p><?php echo $value->description;?></p>							
								</div>													
							</div>		
						<?php endforeach ?>
					</div>			
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Section End -->			
	<!-- Team Section Start -->		
	<div class="team-sec pt-70 pb-70">
		<!-- <div class="team-sec-overlay"></div>
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>our talented advisor</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
			</div>			
			<div class="row">
				<div class="all-team">
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">jon  baker</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  consult advisor</h2>					
					</div>
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm2.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">hera rahman </a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm3.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">max jon</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  consult advisor</h2>					
					</div>	
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm4.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">maria akter</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>							
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">jon  baker</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm2.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">hera rahman </a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm3.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">max jon</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>	
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm4.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">maria akter</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>							<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">jon  baker</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm2.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">hera rahman </a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm3.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">max jon</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>	
					<div class="team-member">
						<div class="team-member-thumb">
							<div class="team-member-author">
								<img src="<?php echo base_url()?>assets/img/tm4.jpg" alt=""/>
							</div>
							<div class="team-overlay">
								<div class="team-overlay-social-link">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#">maria akter</a></li>
									</ul>
								</div>
							</div>							
						</div>	
						<h2>business &  finance advisor</h2>					
					</div>					
				</div>														
			</div>			     
		</div>	 -->
	</div>	
	<!-- Team Section End -->
	<!-- Pricing Section Start -->
	<div id="pricing" class="pricing-sec pb-70">
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>pricing plan</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  enim aminim veniam</p>
					</div>
				</div>
			</div>		
			<div class="row">
				<?php foreach ($pricing as $key => $value): ?>
					<div class="col-md-4">
						<div class="pricing-inner">
							<div class="pricing-title">
								<h1><?php echo $value->title;?></h1>
							</div>
							<div class="pricing-price">
								<ul>
									<li class="pricing-amount">$<?php echo $value->price;?></li>
									<li class="pricing-time"><?php echo $value->period;?></li>
								</ul>
							</div>
							<div class="pricing-list-text">
								<ul>
									<?php 
										foreach ($pricingdetail as $key => $valuepd) {
											if ($valuepd->id_pricing == $value->id_pricing) {
												if ($valuepd->flag == 1) {
													echo "<li>".$valuepd->title."<span><i class='fa fa-check'></i></span></li>";
												} elseif ($valuepd->flag == 0) {
													echo "<li>".$valuepd->title."<span><i class='fa fa-close'></i></span></li>";
												}
											} 
										}
									?>
								</ul>
								<div class="pricing-button">
									<a href="#">signup now</a>
								</div>
							</div>
						</div>
					</div>	
				<?php endforeach ?>
			</div>		
		</div>		
	</div>	
	<!-- Pricing Section End -->
	<!-- Blog Section Start -->
	<div id="news" class="blog-sec pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>latest news</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
				</div>
			</div>		
			<div class="row">
				<?php foreach ($news as $key => $value): ?>
					<div class="col-md-4 col-sm-6">	
						<div class="media">	
							<div class="single-post">	
								<div class="single-post-thumb">	
									<img src="<?php echo base_url()?>uploads/news/<?php echo $value->image;?>" alt=""/>	
									<div class="single-post-thumb-overlay">
										<ul>
											<!-- <li><a href="#"><span><i class="fa fa-comment"></i></span>20</a></li>
											<li><a href="#"><span><i class="fa fa-heart-o"></i></span>30</a></li> -->
										</ul>
									</div>
								</div>	
								<div class="post-info">
									<div class="post-meta">
										<ul>
											<!-- <li><span>By</span><a href="#">Admin </a></li>-->
											<li><span>posted On</span><a href="#"><?php echo $value->date;?></a></li>
										</ul>									
									</div>																			
								</div>								
								<div class="single-post-text">						
									<h2><a href="<?php echo base_url('dashboard/news/'.$value->id_news);?>"><?php echo $value->title;?></a></h2>
									<p class="text-justify"><?php echo $value->description;?></p>
									<!-- <a href="#" class="blog-readmore">Read More</a> -->
								</div>
							</div>				
						</div>				
					</div>	
				<?php endforeach ?>																			
			</div>
		</div>
	</div>
	<!-- Blog Section End -->	
	<!-- Footer Section Start -->
	<footer class="footer">	
		<!-- Footer Top Section Start -->
		<div class="footer-sec">
			<div class="container">
				<?php foreach ($information as $key => $value): ?>
					<div class="row">		
						<div class="col-md-4">
							<div class="footer-wedget-four">
								<h2>Get in Touch </h2>
									<div class="inner-box">
										<div class="media">
											<div class="inner-item">
												<div class="media-left">
													<span class="icon"><i class="fa fa-map-marker"></i></span>
												</div>				
												<div class="media-body">
													<span class="inner-text"><?php echo $value->address;?></span>
												</div>											
											</div>					
										</div>										
									</div>						
							</div>
						</div>		

						<div class="col-md-4">
							<div class="footer-wedget-four">
								<h2>&emsp;</h2>
									<div class="inner-box">						
										<div class="media">
											<div class="inner-item">
												<div class="media-left">
													<span class="icon"><i class="fa fa-phone"></i></span>
												</div>				
												<div class="media-body">
													<span class="inner-text"><?php echo $value->phone;?></span>
												</div>											
											</div>					
										</div>										
									</div>						
							</div>
						</div>	

						<div class="col-md-4">
							<div class="footer-wedget-four">
								<h2>&emsp;</h2>
									<div class="inner-box">						
										<div class="media">
											<div class="inner-item">
												<div class="media-left">
													<span class="icon"><i class="fa fa-envelope-o"></i></span>
												</div>				
												<div class="media-body">
													<span class="inner-text"><?php echo $value->email;?></span>
												</div>											
											</div>					
										</div>											
									</div>						
							</div>
						</div>			
					</div>	
				<?php endforeach ?>
				
			</div>
		</div>
		<!-- Footer Top Section End -->
		<!-- Footer Bottom Section Start -->
		<div class="footer-bottom-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right">
							<p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <span><a href="<?php echo base_url('dashboard');?>">BISA.AI</a></span></p>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- Footer Bottom Section End -->
	</footer>
	<!-- Footer Section End -->
	<!-- Scripts Js Start -->
    <script src="<?php echo base_url()?>assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/owl.animate.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.meanmenu.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
	<!-- Scripts Js End -->	
</body>
</html>