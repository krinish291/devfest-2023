<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Aoide</title>
	<meta name="description"  content="Event Template" />
	<meta name="author" content="IG Design">
	<meta name="keywords"  content="ig design, website, design, html5, css3, jquery, creative, clean, animated, portfolio, blog, one-page, multi-page, corporate, business," />
	<meta property="og:title" content="Event Template" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:width" content="470" />
	<meta property="og:image:height" content="246" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="Event Template" />
	<meta name="twitter:card" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:domain" content="http://ivang-design.com/" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="Event Template" />
	<meta name="twitter:image" content="http://ivang-design.com/" />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/jquery.webui-popover.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("");
</script> 	
	
</head>
<body class="aoide">

		<div class="loader">
			<div class="loader__figure"></div>
		</div>
  
		<main>
	
			<!-- Nav and Logo
			================================================== -->
			
			<a href="index.php">
				<div class="logo">
					<img src="img/logo.png" alt="">
				</div>
			</a>
			
			<a href="#ticket-wrap" class="ticket-link">
				<div class="ticket">
					<p>157 seats left</p>
					<div class="pulse">
						<svg version="1.1" id="svg-ticket" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="36px" height="36px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
							<path fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" d="M1,21c0,20,31,38,31,38s31-18,31-38
										c0-8.285-6-16-15-16c-8.285,0-16,5.715-16,14c0-8.285-7.715-14-16-14C7,5,1,12.715,1,21z"/>					
						</svg>
					</div>
				</div>
			</a>
			<div id="ticket-wrap">
				<p>
					one-day ticket <em>.........................</em> <span>$37</span><br>
					two-days ticket <em>.....................</em> <span>$70</span><br>
					three-days ticket <em>................</em> <span>$100</span><br>
					four-days ticket <em>.................</em> <span>$125</span>
				</p>
				<a href="#">get ticket</a>
			</div>
			
			<div class="content">
				<nav class="menu">
					<a href="#" class="menu__item">Conf<div class="empty-space">-</div>speakers</a>
					<a href="#" class="menu__item">Rewind<div class="empty-space">-</div><div class="empty-space">-</div></a>
					<a href="#" class="menu__item">Sponsor<div class="empty-space">-</div><div class="empty-space">-</div></a>
					<a href="#" class="menu__item">Schedule<div class="empty-space">-</div></a>
					<a href="#" class="menu__item">Team<div class="empty-space">-</div></a>

				</nav>
				<div class="event-time">
					<div class="section">
						<div class="hero-main-title">Bringing Leaders Together</div>
						<div class="hero-title">Nov. 25</div>
						<div class="hero-subtitle"><span>2</span><span>0</span><span>2</span><span>3</span></div>
					</div>
					<ul class="countdown">
						<li> 
							<span class="days">00</span>
							<p class="days_ref">days</p>
						</li>
						<li> 
							<span class="hours">00</span>
							<p class="hours_ref">hours</p>
						</li>
						<li> 
							<span class="minutes">00</span>
							<p class="minutes_ref">minutes</p>
						</li>
						<li>
							<span class="seconds">00</span>
							<p class="seconds_ref">seconds</p>
						</li>
					</ul>
				</div>
				<?php include "templates/scene.php" ?>
			</div>
			
			<!-- Primary Page Layout
			================================================== -->
	
			<div class="content content--reveal">
				<?php include 'sections/speakers.php' ?>
				<?php include "sections/rewind.php" ?>
				<?php include "sections/sponsors.php" ?>
				<?php include "sections/schedule.php" ?>
				<?php include "sections/team.php" ?>
				<button class="content__close"></button>
			</div>
			
			<div class="location-fixed">
				<p>Cruise Terminal, 37 Shing Road, Hong Kong</p>
			</div>
			
			<div class="social-fixed">
				<a href="#">twitter</a>
				<a href="#">facebook</a>
				<a href="#">behance</a>
			</div>
			
		</main>
		
		



	
	<!-- JAVASCRIPT
    ================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script> 
	<script src="js/gradient-animation.js"></script> 
	<script src="js/contact.js"></script>
	<script src="js/custom.js"></script>  
<!-- End Document
================================================== -->
</body>
</html>