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
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat:400,700" rel="stylesheet" type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		<header class="page-header container">
			<div class="logo">	
				<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span></a>
			</div>	
		<nav class="top-nav">
		 	<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?> 
		</nav>
			
		 	

		</header>

		<div id="main" class="site-main">