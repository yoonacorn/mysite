<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */
 
get_header(); ?>
 
<section class="category-page">
	<!-- <?php if ( have_posts() ): ?>
		<header class="page-header">
			
		</header>
	<?php endif; ?> -->
 
	<div id="main-content" class="main-content">
	<h1 class="page-title"><?php printf( __( 'Posts categorized as <span>%s</span>', 'yoonastarter' ), single_cat_title( '', false ) ); ?></h1>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-blog', get_post_format() ); ?>
			<?php endwhile ?>
		<?php else: ?>
			<article>
				<h4>No posts found!</h4>
			</article>
		<?php endif; ?>
	</div>
 
	<?php get_sidebar(); ?>
 
	<?php if ( have_posts() ): ?>
		<div id="navigation" class="container">
	        <div class="left"><?php next_posts_link('&larr; <span>Older Posts</span>'); ?></div>
	        <div class="right"><?php previous_posts_link('<span>Newer Posts</span> &rarr;'); ?></div>
	    </div>
	<?php endif; ?>
</section>
 
<?php get_footer(); ?>