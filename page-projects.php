<?php
/**
 * Template Name: Projects
 * The template for displaying projects
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */

get_header(); ?>

<section class="projects-page">
	<div class="header">
		<h1>Projects</h1>
		<p>Do you have an existing WordPress site you’d like to spruce up? Need a new theme, a <span class="mission">custom-built site</span>, or a <span class="mission">responsive redesign</span>? I can do that for you. Let’s talk about <span class="mission">customizing your existing theme</span> or finding a new one that fits your vision. We can work with a design you have in mind, collaborate with a designer, or choose and customize a theme that works best for you.</p>
	</div>		
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
				$project_1 = get_field( 'project_1');
				$project_2 = get_field( 'project_2');
				$project_3 = get_field( 'project_3');
				$project_4 = get_field( 'project_4');
				$project_5 = get_field( 'project_5');
				$project_6 = get_field( 'project_6');
				$project_1_img = get_field( 'project_1_img');
				$project_2_img = get_field( 'project_2_img');
				$project_3_img = get_field( 'project_3_img');
				$project_4_img = get_field( 'project_4_img');
				$project_5_img = get_field( 'project_5_img');
				$project_6_img = get_field( 'project_6_img');
				$project_1_description = get_field( 'project_1_description');
				$project_2_description = get_field( 'project_2_description');
				$project_3_description = get_field( 'project_3_description');
				$project_4_description = get_field( 'project_4_description');
				$project_5_description = get_field( 'project_5_description');
				$project_6_description = get_field( 'project_6_description');
				$project_1_link = get_field( 'project_1_link');
				$project_2_link = get_field( 'project_2_link');
				$project_3_link = get_field( 'project_3_link');
				$project_4_link = get_field( 'project_4_link');
				$project_5_link = get_field( 'project_5_link');
				$project_6_link = get_field( 'project_6_link');
				$size = "full";
		?>	
		<section class="projects" id="content">
				<div class="project-1 project-item">
					<h4><?php echo $project_1; ?></h4>
					<a href="<?php echo $project_1_link; ?>" target="_blank" rel="noopener noreferrer"><?php if($project_1_img) {echo wp_get_attachment_image( $project_1_img, $size );}?></a>
					<p><?php echo $project_1_description; ?></p>
				</div>

				<div class="project-2 project-item">
					<h4><?php echo $project_2; ?></h4>
					<a href="<?php echo $project_2_link; ?>"><?php if($project_2_img) {echo wp_get_attachment_image( $project_2_img, $size );}?></a>
					<p><?php echo $project_2_description; ?></p>
				</div>
		
				<div class="project-3 project-item">
					<h4><?php echo $project_3; ?></h4>
					<a href="<?php echo $project_3_link; ?>"><?php if($project_3_img) {echo wp_get_attachment_image( $project_3_img, $size );}?></a>
					<p><?php echo $project_3_description; ?></p>
				</div>
				
				<div class="project-4 project-item">
					<h4><?php echo $project_4; ?></h4>
					<a href="<?php echo $project_4_link; ?>"><?php if($project_4_img) {echo wp_get_attachment_image( $project_4_img, $size );}?></a>
					<p><?php echo $project_4_description; ?></p>
				</div>
		
				<div class="project-5 project-item">
					<h4><?php echo $project_5; ?></h4>
					<a href="<?php echo $project_5_link; ?>" target="_blank" rel="noopener noreferrer"><?php if($project_5_img) {echo wp_get_attachment_image( $project_5_img, $size );}?></a>
					<p><?php echo $project_5_description; ?></p>
				</div>

				<div class="project-6 project-item">
					<h4><?php echo $project_6; ?></h4>
					<a href="<?php echo $project_6_link; ?>" target="_blank" rel="noopener noreferrer"><?php if($project_6_img) {echo wp_get_attachment_image( $project_6_img, $size );}?></a>
					<p><?php echo $project_6_description; ?></p>
				</div>

		</section>
	


	
    </div>
</section>

	<?php endwhile; ?>

<?php get_footer(); ?>

