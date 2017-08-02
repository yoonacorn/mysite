<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */

get_header(); ?>

<section class="default-page">		
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
 		<!-- 	<h1 class="entry-title"><?php the_title(); ?></h1>  -->
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>

</section>

<?php get_footer(); ?>
