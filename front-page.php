<?php
/**
 * Template Name: Home
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */

get_header(); ?>
<section class="home-page">
	<div class="header">
		<h1>Hello, I'm Yoona.</h1>
		<p>I’m a Freelance <span class="mission">WordPress Developer and Writer for hire</span>. I’m passionate about helping nonprofits, small businesses, and individuals amplify their web presence.</p>
	<a class="button" href="<?php echo home_url(); ?>/about-me">Learn More</a>
	</div>
		

	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
			$section_2 = get_field('section_2');
			$service_1_img = get_field('service_1_img');
			$service_1_title = get_field('service_1_title');
			$service_2_img = get_field('service_2_img');
			$service_2_title = get_field('service_2_title');
			$service_3_img = get_field('service_3_img');
			$service_3_title = get_field('service_3_title');
			$size = "full";
		?>	
		
		
	
	<div class="services-overview">
		<h3><?php echo $section_2; ?></h3>
		
			<div class="service-1-img">
			<?php if($service_1_img) {echo wp_get_attachment_image( $service_1_img, $size );}?>
			</div>
			<div class="service-1-title">		 
				<p><?php echo $service_1_title; ?></p>
			</div>

			<div class="service-2-img">
			<?php if($service_2_img) {echo wp_get_attachment_image( $service_2_img, $size );}?>
			</div>
			<div class="service-2-title">		 
				<p><?php echo $service_2_title; ?></p>
			</div>

			<div class="service-3-img">
			<?php if($service_3_img) {echo wp_get_attachment_image( $service_3_img, $size );}?>
			</div>
			<div class="service-3-title">		 
				<p><?php echo $service_3_title; ?></p>
			</div>
			<a class="button" href="<?php echo home_url(); ?>/services">Take a Look</a>		
	</div>

		<?php the_content(); ?>
			
		</section>		
		
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>

