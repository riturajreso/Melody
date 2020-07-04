<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Melodi</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url().ASSERTS;?>css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="<?php echo base_url().ASSERTS;?>css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url().ASSERTS;?>css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="<?php echo base_url().ASSERTS;?>css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="<?php echo base_url().ASSERTS;?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url().ASSERTS;?>css/style-color.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url().ASSERTS;?>img/logo/favicon.ico">
	</head>
	
	<body>
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">music.site@melodi.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#home">
								<img class="img-responsive" src="<?php echo base_url().ASSERTS;?>img/logo/logo.png" alt="" />
							</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#main">Home</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<div class="main pad" id="main">
				<div class="container">
					<div class="wrapper">
					  <div class="row">
					  	<div class="col-md-4">
					  		<h1>Please enter the cords...<span style="margin-left: 50px;">&</span></h1>
					  	</div>
					  	<div class="col-md-6">
					  		<div class="custom-select">
							  <select>
							    <option value="0">Select Instrument:</option>
							    <option value="1">Guitar</option>
							    <option value="2">Mouth Organ</option>
							  </select>
							</div>
					  	</div>
					  </div>
					  <textarea name="the-textarea" id="the-textarea" maxlength="300" placeholder="Start Typing..."autofocus></textarea>
					</div>
					<div style="margin: 30px;">
						<div class="btn-group">
							<button class="buttonG buttonC">
							<i class="fa fa-angle-left size" ></i>
							</button>
							<button class="buttonG buttonC">
								<i class="fa fa-angle-double-left size" ></i>
							</button>
							<button class="buttonG buttonC">
								<i class="fa fa-refresh size" ></i>
							</button>
							<button class="buttonG buttonC">
								<i class="fa fa-angle-right size" ></i>
							</button>
							<button class="buttonG buttonC">
								<i class="fa fa-angle-double-right size" ></i>
							</button>			
						</div>
					</div>
				</div>
			</div>
						
			<!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contact Us</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">#30,N G R Layout, Roopena Agrahara, beside Reddy Sangam school, Bengaluru, Karnataka 560068</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">riturajreso@gmail.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">+91-8582949025</span>
							</div>
						</div>
					</div>
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Do you have any idea in your mind? Drop us a line.</p>
						<form role="form" id="contactForm" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-theme">Send Message</button>
							</div>
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->
			
			<!-- footer -->
			<footer>
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
						<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; copyright 2020, All rights are reserved.</p>
				</div>
			</footer>
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="<?php echo base_url().ASSERTS;?>js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url().ASSERTS;?>js/bootstrap.min.js"></script>
		<!-- WayPoints JS -->
		<script src="<?php echo base_url().ASSERTS;?>js/waypoints.min.js"></script>
		<!-- Include js plugin -->
		<script src="<?php echo base_url().ASSERTS;?>js/owl.carousel.min.js"></script>
		<!-- One Page Nav -->
		<script src="<?php echo base_url().ASSERTS;?>js/jquery.nav.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="<?php echo base_url().ASSERTS;?>js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?php echo base_url().ASSERTS;?>js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo base_url().ASSERTS;?>js/custom.js"></script>
	</body>	
</html>