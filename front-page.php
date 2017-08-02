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
	<div class="homepage-hero">
		<h1>Yoona Wagener</h1>
		<h3>WordPress Developer | Writer</h3>
	</div>
		

	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
			$about = get_field('about');
			$about_img = get_field('about_img');
			$description = get_field('description');
			$about_link = get_field('about_link');
			$services = get_field('services');
			$services_img = get_field('services_img');
			$services_description = get_field('services_description');
			$writing= get_field('writing');
			$projects_link= get_field('projects_link');
			$writing_link= get_field('writing_link');
			$contact= get_field('contact');
			$contact_img = get_field('contact_img');
			$contact_text= get_field('contact_text');
			$contact_link= get_field('contact_link');
			$size = "full";
		?>	
		
		
	
	<div class="about-me">
		<h3><?php echo $about; ?></h3>
		<div class="homepage-img-1">
		<?php if($about_img) {echo wp_get_attachment_image( $about_img, $size );}?>
		</div>
		<div class="description">		 
			<p><?php echo $description; ?></p>
			<p><a href="<?php echo $about_link; ?>">Learn More</a></p>
		</div>
	</div>


	<div class="services">
		<h3><?php echo $services; ?></h3>
		<div class="homepage-img-2">
		<?php if($services_img) {echo wp_get_attachment_image( $services_img, $size );}?>
		</div>	
		<div class="service-items">
			<p><?php echo $services_description; ?><?php echo $writing; ?></p>

			<p><a href="<?php echo $projects_link; ?>">Take a Look</a></p>	
		</div>
	</div>	
	<div class="contact">
		<h3><?php echo $contact; ?></h3>
		<div class="homepage-img-3">
		<?php if($contact_img) {echo wp_get_attachment_image( $contact_img, $size );}?>
		</div>
		<div class="contact-info">
			<p><?php echo $contact_text; ?></p>
			<p><a href="http://localhost:8888/wordpress/about-me#contact">Let's Connect</a></p>
	</div>			
		

	</div>



</section><!-- .home-page -->
		
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>

