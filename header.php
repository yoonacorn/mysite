<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="I'm a freelance WordPress developer, writer, and content maker who cares about the details."/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Montserrat:400,700|Open+Sans:400,700" rel="stylesheet" type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105579109-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<!-- <div class="top-logo">	
				<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span></a>
			</div> -->
			
		<nav class="top-nav" id="primary">
		 	 <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
		 	 </nav>   
		<nav id="mobile-menu">
				<a href="#" id="menu-icon"><i class="fa fa-bars"></i></a>
				<?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?> </nav>
						 	 <div class="clearfix"></div>
				
	</div>	
				<!-- 	</nav> -->
			
		 	

		</header>

		<div id="main" class="site-main">