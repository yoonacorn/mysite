<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */

get_header(); ?>

<section class="index-page">
	<div class="header">
		<h1>Blog</h1>
		<p>A space for musing about freelancing, digital nomading, tech, productivity, and learning on the interwebs.<p>
	</div>	
	<div class="site-content">
		<div class="blog-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content-blog', get_post_format()); ?>
			<?php endwhile; ?>
		<?php endif; ?> 
		</div>
	

	</div>
</section>	

 <?php if ( have_posts() ): ?> 
	<div id="navigation" class="container">
        <div class="left"><?php next_posts_link('&larr; <span>Older Posts</span>'); ?></div>
        <div class="right"><?php previous_posts_link('<span>Newer Posts</span> &rarr;'); ?></div>
    </div>
<?php endif; ?> 
<?php get_footer(); ?>

