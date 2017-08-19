<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Halcyonic by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo get_bloginfo('template_directory'); ?>assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url'); ?>" />
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>assets/css/ie9.css" /><![endif]-->
        <?php wp_head(); ?>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<div class="row">
							<div class="12u">

								<!-- Logo -->
									<h1><a href="#" id="logo"><?= get_bloginfo("name")?></a></h1>

								<!-- Nav -->
								<?php wp_nav_menu( array( 
									'theme_location' 	  => 'top-menu',
									'menu_id'         	=> 'nav'
								));?>

							</div>
						</div>
					</header>
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="6u 12u(mobile)">

									<!-- Banner Copy -->
										<p><?= get_bloginfo("description")?></p>
										<a href="#" class="button-big">Go on, click me!</a>

								</div>
								<div class="6u 12u(mobile)">

									<!-- Banner Image -->
										<a href="#" class="bordered-feature-image"><img src="images/banner.jpg" alt="" /></a>

								</div>
							</div>
						</div>
					</div>
				</div>