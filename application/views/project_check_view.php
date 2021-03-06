<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<!-- meta charec set -->
<meta charset="utf-8">
<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Page Title -->
<title>project</title>
<!-- Meta Description -->
<meta name="description" content="project page">
<meta name="keywords"
	content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
<meta name="author" content="------------**jackie chen**------------">
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Font -->

<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- CSS
		================================================== -->
<!-- Fontawesome Icon font -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<!-- Twitter Bootstrap css -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!-- jquery.fancybox  -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/jquery.fancybox.css">
<!-- animate -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/animate.css">
<!-- Main Stylesheet -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/main.css">
<!-- media-queries -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/media-queries.css">
<!-- project pic css -->
<link rel="stylesheet"
	href="<?php echo base_url();?>assets/css/project.css">

<!-- Modernizer Script for old Browsers -->
<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/project.js"></script>
<!-- Image Zoom -->

<script
	src="<?php echo base_url();?>assets/js/jquery-2.1.0.min.js'></script>
<script 
	
	
	
	src="<?php echo base_url();?>assets/js/jquery.elevatezoom.js'></script>

<!-- Modernizr js -->
<script 
	
	
	
	type="text/javascript"
	src="<?php echo base_url();?>assets/js/modernizr-2.8.0.min.js"></script>
<!-- Plugins -->
<script type="text/javascript"
	src="<?php echo base_url();?>assets/js/plugins.js"></script>
<!-- Custom JavaScript Functions -->
<script type="text/javascript"
	src="<?php echo base_url();?>assets/js/time_functions.js"></script>

<!-- begin foreach -->
<?php foreach ($rows as $r){?>


</head>

<body id="body">




	<!-- preloader -->
	<div id="preloader">
		<img src="<?php echo base_url();?>assets/img/preloader.gif"
			alt="Preloader">
	</div>
	<!-- end preloader -->

	<!-- 
        Fixed Navigation
        ==================================== -->
	<header id="navigation" class="navbar-fixed-top navbar">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <i
						class="fa fa-bars fa-2x"></i>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<a class="navbar-brand" href="index.html">
					<h1 id="logo">
						<img src="<?php echo base_url();?>assets/img/logo.png"
							alt="Brandi">
					</h1>
				</a>

				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav">
					<li><a class="current">Home</a></li>
					<li><a href="#project">Project</a></li>
					<li><a href="#detailed">Detailed</a></li>
					<li><a href="#comment">Comment</a></li>
				</ul>

				<ul id="nav1" class="nav navbar-nav">
					<li><a href="/index.php/users/user_profile">profile</a></li>
					<li><a
						href="/index.php/projects/modify/<?php echo $r->projects_id; ?>">update</a></li>
					<li><a href="/index.php/projects/create">Create</a></li>
					<li><a href="/index.php/verification/logout">Logout</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>
	<!--
        End Fixed Navigation
        ==================================== -->



	<!--
        Some fun facts
        ==================================== -->

	<section id="facts" class="facts">
		<div class="parallax-overlay">
			<div class="container"></div>
		</div>
	</section>

	<!--
        End Some fun facts
        ==================================== -->


	<!--
        checker
        ==================================== -->

	<section id="#" class="features">
		<div class="container">
			<div class="row mb50">

				<div class="sec-title text-center mb50 wow bounceInDown animated"
					data-wow-duration="500ms">
					<h2>Pending project</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>
				<?php echo form_open("projects/project_check_update/$r->projects_id"); ?>
				<!-- service item -->
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-recycle fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Cost</h3>
							<p>
								<input type="text" name="cost" id="cost"
									value="<?php echo $r->title;?>" placeholder="cost"
									class="form-control">
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms"
					data-wow-delay="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-pencil fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Minimum sale</h3>
							<p>
								<input type="text" name="minimum_sale" id="minimum_sale"
									placeholder="minimum_sale" value="<?php echo $r->minimum_sale;?>"
									class="form-control">
							</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"
					data-wow-delay="900ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-bullhorn fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>projects_comment</h3>
							<input type="text" name="projects_comment" id="projects_comment" placeholder="project comment for user"
								value="<?php echo $r->projects_comment;?>" class="form-control">
						</div>
					</div>
				</div>
				
			</div>
			<!-- contact form -->
			<div class="text-center wow fadeInDown  text-center animated"
				data-wow-duration="500ms" data-wow-delay="300ms">
				<div class="contact-form">
					<div class="input-group">
						<input type="submit" id="form-submit" class="pull-right"
							value="Pass project">
					</div>

				</div>
			</div>
			<!-- end contact form -->
			<!-- end service item -->
				<?php echo form_close(); ?>
			<div class="sec-sub-title text-center wow rubberBand animated"
					data-wow-duration="1000ms">
					<p><?php if(isset($exc_flag) && $exc_flag == 1) echo "Update Succeed";?></p>
			</div>
				
		</div>

	</section>

	<!--
        End checker
        ==================================== -->

	<!--
        Our Works
        ==================================== -->

	<section id="project" class="works">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center">
					<h2><?php echo $r->title;?>
				
				</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<!-- start of row -->
				<div class="row">

					<div class="project-wrapper col-md-5">
						<figure class="mix work-item-project">
							<img id="zoom_01"
								src='<?php echo base_url();?>assets/img/zoom_images/small/image1.png'
								data-zoom-image="<?php echo base_url();?>assets/img/zoom_images/large/image1.jpg" />
						</figure>

						<script>
								$('#zoom_01').elevateZoom({
							    zoomType: "inner",
							cursor: "crosshair",
							scrollZoom: true,
							zoomWindowFadeIn: 500,
							zoomWindowFadeOut: 750
							   }); 
								</script>


					</div>

					<div class="text-center col-md-7">
						<br />
						<p><?php echo $r->description;?></p>
						<p>@round: <?php echo $r->round;?></p>
						<p>@price: <?php echo $r->price;?></p>
						<div class="work-filter1 wow fadeInUp animated"
							data-wow-duration="500ms">
							<button type="button" data-toggle="dropdown"
								class="btn dropdown-toggle">
								size<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">xs</a></li>
								<li><a href="#">s</a></li>
								<li><a href="#">m</a></li>
								<li><a href="#">l</a></li>
								<li><a href="#">xl</a></li>
								<li><a href="#">xxl</a></li>
								<li><a href="#">xxxl</a></li>
								<li class="divider"></li>
								<li><a href="#">xxxxl</a></li>
							</ul>
						</div>
						<div class="work-filter1 wow fadeInUp animated"
							data-wow-duration="500ms">

							<ul class="text-center">
								<li><a href="#" class="">Buy</a></li>
								<li><a href="#" class="">Cart</a></li>
							</ul>
						</div>

						<div class="row number-counters">
							<!-- split -->
							<div id="time_countdown" class="time-count-container">

								<div class="col-sm-3">
									<div class="time-box">
										<div class="time-box-inner dash days_dash animated"
											data-animation="rollIn" data-animation-delay="300">
											<span class="time-number"> <span class="digit">0</span> <span
												class="digit">0</span> <span class="digit">0</span>
											</span> <span class="time-name">Days</span>
										</div>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="time-box">
										<div class="time-box-inner dash hours_dash animated"
											data-animation="rollIn" data-animation-delay="600">
											<span class="time-number"> <span class="digit">0</span> <span
												class="digit">0</span>
											</span> <span class="time-name">Hours</span>
										</div>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="time-box">
										<div class="time-box-inner dash minutes_dash animated"
											data-animation="rollIn" data-animation-delay="900">
											<span class="time-number"> <span class="digit">0</span> <span
												class="digit">0</span>
											</span> <span class="time-name">Minutes</span>
										</div>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="time-box">
										<div class="time-box-inner dash seconds_dash animated"
											data-animation="rollIn" data-animation-delay="1200">
											<span class="time-number"> <span class="digit">0</span> <span
												class="digit">0</span>
											</span> <span class="time-name">Seconds</span>
										</div>
									</div>
								</div>

							</div>
							<!-- /.time-count-container -->
							<!-- split -->



						</div>

					</div>





				</div>
				<!-- end of row -->
				<br />
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $r->current_sale/$r->minimum_sale*100;?>% ">
					      <?php echo $r->current_sale;?> Complete
					    </div>
				</div>

			</div>
		</div>


	</section>
	<!--
        End Our Works
        ==================================== -->







	<!--
        Features
        ==================================== -->

	<section id="detailed" class="features">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center mb50 wow bounceInDown animated"
					data-wow-duration="500ms">
					<h2>More Detailed</h2>
					<div class="devider">
						<i class="fa fa-heart-o fa-lg"></i>
					</div>
				</div>

				<!-- service item -->
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-recycle fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Made Of</h3>
							<p> 
								<?php echo $r->madeof;?>  
								</p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms"
					data-wow-delay="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-pencil fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>How To Wash</h3>
							<p><?php echo $r->howtowash;?> </p>
						</div>
					</div>
				</div>
				<!-- end service item -->

				<!-- service item -->
				<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"
					data-wow-delay="900ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-bullhorn fa-2x"></i>
						</div>

						<div class="service-desc">
							<h3>Why Me</h3>
							<p><?php echo $r->whyme;?> </p>
						</div>
					</div>
				</div>
				<!-- end service item -->

			</div>
		</div>
	</section>
	<!-- end of foreach -->
		<?php } ?>
        <!--
        End Features
        ==================================== -->





	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms">
					<div class="footer-single">
						<img src="<?php echo base_url();?>assets/img/footer-logo.png"
							alt="">
						<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris
							nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms" data-wow-delay="300ms">
					<div class="footer-single">
						<h6>Subscribe</h6>
						<form action="#" class="subscribe">
							<input type="text" name="subscribe" id="subscribe"> <input
								type="submit" value="&#8594;" id="subs">
						</form>
						<p>eusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms" data-wow-delay="600ms">
					<div class="footer-single">
						<h6>Explore</h6>
						<ul>
							<li><a href="#">Inside Us</a></li>
							<li><a href="#">Flickr</a></li>
							<li><a href="#">Google</a></li>
							<li><a href="#">Forum</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated"
					data-wow-duration="500ms" data-wow-delay="900ms">
					<div class="footer-single">
						<h6>Support</h6>
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Market Blog</a></li>
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Pressroom</a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copyright text-center">
						Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>.
						All rights reserved. Designed & developed by <a
							href="http://themefisher.com/">Themefisher</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<a href="javascript:void(0);" id="back-top"><i
		class="fa fa-angle-up fa-3x"></i></a>

	<!-- Essential jQuery Plugins
		================================================== -->
	<!-- Main jQuery -->
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<!-- Single Page Nav -->
	<script
		src="<?php echo base_url();?>assets/js/jquery.singlePageNav.min.js"></script>
	<!-- Twitter Bootstrap -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<!-- jquery.fancybox.pack -->
	<script src="<?php echo base_url();?>assets/js/jquery.fancybox.pack.js"></script>
	<!-- jquery.mixitup.min -->
	<script src="<?php echo base_url();?>assets/js/jquery.mixitup.min.js"></script>
	<!-- jquery.parallax -->
	<script
		src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
	<!-- jquery.countTo -->
	<script src="<?php echo base_url();?>assets/js/jquery-countTo.js"></script>
	<!-- jquery.appear -->
	<script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
	<!-- jquery easing -->
	<script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
	<!-- jquery easing -->
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script>
	<!-- Custom Functions -->
	<script src="<?php echo base_url();?>assets/js/custom.js"></script>

	<script type="text/javascript">
			$(function(){
				

				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
</body>
</html>
