<!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Happy Hostel</title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta charset="utf-8" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<!-- Modernizr Set -->
		<script src="assets/plugins/modernizr/modernizr.js"></script>

		<!-- jQuery Set -->
		<script src="assets/plugins/jquery/jquery.min.js" type="text/javascript"></script>

		<!-- jQuery UI Set -->
		<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css"/>

		<!-- Bootstrap Set -->
		<script src="assets/bootstrap/javascripts/bootstrap.min.js" type="text/javascript"></script>

		<!-- jQuery Match Height Set -->
		<script src="assets/plugins/jq-match-height/jquery.matchHeight-min.js" type="text/javascript"></script>

		<!-- Slick Set -->
		<link rel="stylesheet" href="assets/plugins/slick/slick/slick.css"/>
		<script src="assets/plugins/slick/slick/slick.min.js" type="text/javascript"></script>

		<!-- Animate CSS Set -->
		<link rel="stylesheet" href="assets/plugins/animate/css/animate.css"/>

		<!-- WOW Set -->
		<script src="assets/plugins/wow/dist/wow.min.js" type="text/javascript"></script>

		<!-- Malihu Custom Scroll Set -->
		<link rel="stylesheet" href="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.css"/>
		<script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js" type="text/javascript"></script>

		<!-- iCheck Set -->
		<link rel="stylesheet" href="assets/plugins/icheck/skins/minimal/minimal.css"/>
		<script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>

		<!-- Font Awesome Set -->
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css"/>

		<!-- Pixeden Icons Set -->
		<link rel="stylesheet" href="assets/plugins/pixeden-icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css"/>

		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'/> <!-- Lato Font Family -->
		<link href='https://fonts.googleapis.com/css?family=Arvo:400,400italic,700italic,700' rel='stylesheet' type='text/css'/> <!-- Avro Font Family -->

		<!-- App Stylesheet -->
		<link rel="stylesheet" href="assets/bootstrap/stylesheets/app.css"/>
		
		<!-- Cross Browser Compatibility -->
		<!--[if gte IE 6]>
			<script src="assets/js/externals/css3-mediaqueries.min.js"></script>
			<script src="assets/js/externals/html5shiv.js"></script>
			<script src="assets/js/externals/placeholders.min.js"></script>
			<script src="assets/js/externals/respond.js"></script>
			<script src="assets/js/externals/selectivizr-min.js"></script>
		<![endif]-->

		<!-- PHP Variables -->

		<?php 
			global $form_actions;
			$form_actions = true;
		?>

	</head>
	<body>

		<div class="preloader-wrapper" id="cnt_preloader">
			<div class="circle-preloader" id="preloader">
				<div class="circle-preloader-inner">
					<div class="preloader-lvl-1"></div>
					<div class="preloader-lvl-2"></div>
				</div>
			</div>
		</div>

		<header>
			<div class="thh-main-navbar-container">
				<div class="navbar-inner">
					<nav class="main-navbar" role="navigation">
						
						<div class="thh-navbar-header" id="cnt_nav_header">
							<a href="#" class="btn-open-menu" id="btn_open_menu">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<a href="#" class="tth-navbar-brand"><img src="assets/images/logos/main-logo.png" class="img-responsive" alt=""/></a>
							<div class="btn-close-container">
								<a href="#" class="btn-close btn-close-menu" id="btn_close_menu" style="display: none;">
									<span class="pe-icon pe-7s-close-circle"></span>
								</a>
								<a href="#" class="btn-close btn-close-window" id="btn_close_window">
									<span class="pe-icon pe-7s-close-circle"></span>
								</a>
							</div>
						</div>

						<div class="main-nav-container user-logged-in" id="cnt_main_nav" style="display: none;">
							<div class="main-nav-inner">
								
								<div class="nav-head">
									<div class="user-actions">
										<div class="user-name">
											<p>Welcome Chris!</p>
										</div>
										<div class="user-account">
											<a href="#">Go to <span>your account</span></a>
										</div>
									</div>
								</div>
								<div class="nav-body">
									<div class="main-nav">
										<ul class="list-unstyled">
											<li><a href="#" data-toggle="modal" data-target="#cnt_login_modal">Login</a></li>
											<li><a href="register.php">Create Account</a></li>
											<li><a href="help.php">Help</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Terms of Use</a></li>
										</ul>
									</div>
								</div>
								<div class="nav-footer">
									<div class="poweredby-container">
										<div class="poweredby-title">
											<p>Powered by:</p>
										</div>
										<div class="poweredby-logo">
											<a href="#" target="_blank"><img src="assets/images/logos/slacktravel-logo.png" class="img-responsive" alt=""/></a>
										</div>
									</div>
									<div class="social-nav-container">
										<ul class="list-inline-float">
											<li><a href="#"><span class="fa fa-facebook"></span></a></li>
											<li><a href="#"><span class="fa fa-twitter"></span></a></li>
											<li><a href="#"><span class="fa fa-instagram"></span></a></li>
											<li><a href="#"><span class="fa fa-pinterest"></span></a></li>
											<li><a href="#"><span class="fa fa-envelope"></span></a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

					</nav>
				</div>
			</div>
		</header>

		<main>

			<section class="thh-modals-container">
				<div class="thh-modals-inner">

					<div class="login-modal-container">
						<div class="modal fade" id="cnt_login_modal" tabindex="-1" role="dialog" aria-labelledby="cnt_login_modalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a href="#" class="btn-close" data-dismiss="modal" aria-label="Close">
											<span class="pe-icon pe-7s-close-circle"></span>
										</a>
									</div>
									<div class="modal-body">
										<?php require_once dirname(__FILE__) . '/../forms/_login.php'; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="quit-slacktravel-modal-container">
						<div class="modal fade" id="cnt_quit_st_modal" tabindex="-1" role="dialog" aria-labelledby="cnt_quit_st_modalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a href="#" class="btn-close" data-dismiss="modal" aria-label="Close">
											<span class="pe-icon pe-7s-close-circle"></span>
										</a>
									</div>
									<div class="modal-body">
										<?php require_once dirname(__FILE__) . '/../forms/_quit-slacktravel.php'; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="profile-status-modal-container">
						<div class="modal fade" id="cnt_profile_status_modal" tabindex="-1" role="dialog" aria-labelledby="cnt_profile_status_modalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a href="#" class="btn-close" data-dismiss="modal" aria-label="Close">
											<span class="pe-icon pe-7s-close-circle"></span>
										</a>
									</div>
									<div class="modal-body">
										<?php require_once dirname(__FILE__) . '/../profile/_profile-status.php'; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="profile-complete-modal-container">
						<div class="modal fade" id="cnt_profile_complete_modal" tabindex="-1" role="dialog" aria-labelledby="cnt_profile_complete_modalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a href="#" class="btn-close" data-dismiss="modal" aria-label="Close">
											<span class="pe-icon pe-7s-close-circle"></span>
										</a>
									</div>
									<div class="modal-body">
										<?php require_once dirname(__FILE__) . '/../profile/_profile-complete.php'; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>