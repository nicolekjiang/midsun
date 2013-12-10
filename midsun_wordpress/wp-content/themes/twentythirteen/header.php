<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<title>Midnight Sun Solar Rayce Car Team</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta name="author" content="Nicole Jiang">

	<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/twentythirteen/style.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/twentythirteen/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/twentythirteen/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/twentythirteen/css/jquery.vegas.css">
	
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:600,400|Quicksand:400,300,700">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="wp-content/themes/twentythirteen/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8">	
	
	<script src="wp-content/themes/twentythirteen/js/jquery-1.6.1.min.js"></script>
	<script src="wp-content/themes/twentythirteen/js/jquery.min.js"></script>
	<script src="wp-content/themes/twentythirteen/js/smooth-scroll.js"></script>
	<script src="wp-content/themes/twentythirteen/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="wp-content/themes/twentythirteen/js/jquery.vegas.js"></script>
	<script src="wp-content/themes/twentythirteen/js/jquery.flexslider.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<div id="main" class="site-main">
						<!-- HEADER/NAVBAR -->
			<header class="navbar_big">
				<div class="left">
					<div id="logo" style="margin-left:10px;">
						<a href="#one_background"><img src="wp-content/themes/twentythirteen/images/logo.png"></a>
					</div>
				</div><!-- end left -->
				<div class="right">
					<ul>
						<a href="https://www.twitter.com/uwmidsun"><li class="twitter_header" style="background-color:transparent"></li></a>
						<a href="https://www.facebook.com/uwmidsun"><li class="facebook_header" style="background-color:transparent"></li></a>
						<a href="#eight_headline"><li>CONTACT US</li></a>
						<a href="#seven_headline"><li>SPONSOR</li></a>
						<a href="#six_headline"><li>ADOPT A CELL</li></a>
						<a href=""><li>THE CAR</li></a>
						<a href="#four_headline"><li>ABOUT US</li></a>
						<div class="clearfix"></div></a>
					</ul>
				</div><!-- end right -->
				<div class="clearfix"></div>
			</header> <!-- navbar -->
