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
	<div class="about-hero">
		<h1 id="about-hero">About</h1>
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

			<div class="social">
				<h3 id="contact">Contact Me</h3>
					<ul>
						<li><a href="https://twitter.com/@yoonacorny" target="_blank"> <i class="fa fa-twitter-square"></i>Twitter</a></li>
    					<li><a href="https://www.linkedin.com/in/yoonawagener" target="_blank"><i class="fa fa-linkedin-square"></i>LinkedIn</a></li>
    					<li><i class="fa fa-envelope"></i><span class="email">yoonawagener[@]gmail[dot]com</span></li>
    				</ul>	
			</div>	
	
		</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
