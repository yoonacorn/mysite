<?php
/**
 * Template Name: About
 * The template for the About Page
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="header">
		<h1>A Little About Me</h1>
	</div>		
		
		<div class="site-content">
			<?php while ( have_posts() ) : the_post(); 
				$bio_pic = get_field( 'bio_pic');
				$size = "full";
			?>

			<div class="bio-pic">
				<?php if ($bio_pic) {echo wp_get_attachment_image( $bio_pic, $size);}?>
			</div>
			
			<div class="bio">
				<p><?php the_content(); ?></p>
			</div>

	
		</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
