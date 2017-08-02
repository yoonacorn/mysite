<?php
/**
 * Template Name: Writing
 * The template for the Writing Page
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * @since Yoona Starter 1.0
 */

get_header(); ?>

<section class="writing-page">
	<div class="writing-hero">
		<h1 id="hero">Writing</h1>
		</div>		
	<div class="site-content">
			<?php while ( have_posts() ) : the_post(); 
				$client_1 = get_field( 'client_1');
				$client_2 = get_field( 'client_2');
				$client_3 = get_field( 'client_3');
				$client_4 = get_field( 'client_4');
				$article_1 = get_field( 'article_1');
				$article_2 = get_field( 'article_2');
				$article_3 = get_field( 'article_3');
				$article_4 = get_field( 'article_4');
				$article_5 = get_field( 'article_5');
				$article_6 = get_field( 'article_6');
				$article_7 = get_field( 'article_7');
				$article_8 = get_field( 'article_8');
				$article_9 = get_field( 'article_9');
				$article_10 = get_field( 'article_10');
				$article_11 = get_field( 'article_11');
				$article_12 = get_field( 'article_12');
				$article_13 = get_field( 'article_13');
				$article_14 = get_field( 'article_14');
				$article_15 = get_field( 'article_15');
				$article_16 = get_field( 'article_16');
				$article_17 = get_field( 'article_17');
				$article_18 = get_field( 'article_18');
				$article_19 = get_field( 'article_19');
				$article_20 = get_field( 'article_20');
				$article_21 = get_field( 'article_21');
				$article_22 = get_field( 'article_22');
				$article_23 = get_field( 'article_23');
				$article_24 = get_field( 'article_24');
				$article_25 = get_field( 'article_25');
				$article_26 = get_field( 'article_26');
				$size = "full";
			?>

			<figure>
			  <?php if ( has_post_thumbnail() ) : ?>
			    <?php the_post_thumbnail('full'); ?>
			  <?php endif; ?>
			</figure>

		<div class="client-1">
			<h4><?php echo $client_1; ?></h4>
			<div class="client-1-writing">
				<ul>
					<li><a href="<?php echo $article_1; ?>">Maxing Out on Comfort in Passive Houses</a></li>
					<li><a href="<?php echo $article_2; ?>">Charging Up: An Intro to Energy Storage</a></li>
					<li><a href="<?php echo $article_3; ?>">No Man's an (Urban Heat) Island</a></li>
					<li><a href="<?php echo $article_4; ?>">How Cold is it Really: An Intro to Heating Degree Days</a></li>
					<li><a href="<?php echo $article_5; ?>">Zero Net Energy Buildings Around the US</a></li>
					<li><a href="<?php echo $article_6; ?>">Defining the Smart Grid</a></li>
					<li><a href="<?php echo $article_7; ?>">Two Sides of the Same Coin: A Beginner's Guide to Hardening And Resiliency</a></li>
				</ul>	
		</div>
		
		<div class="client-2">
			<h4><?php echo $client_2; ?></h4>
			<div class="client-2-writing">
				<ul>
					<li><a href="<?php echo $article_8; ?>">John Chang: Work Hard, Never Stop</a></li>
					<li><a href="<?php echo $article_9; ?>">Bethany Powell: Designer, Curator, Storyteller</a></li>
					<li><a href="<?php echo $article_10; ?>">Sean Flood: A Formative Journey</a></li>
					<li><a href="<?php echo $article_11; ?>">Caitlyn Panter: Examining Life After Art School</a></li>
					<li><a href="<?php echo $article_12; ?>">Leah Miller: On Pace for Success</a></li>
					<li><a href="<?php echo $article_13; ?>">Renee Kurilla and Keith Zulawnik: Working and Living Happily Ever After</a></li>
				</ul>	
		</div>	
	
	
		<div class="client-3">
			<h4><?php echo $client_3; ?></h4>
			<div class="client-3-writing">
				<ul>
					<li><a href="<?php echo $article_14; ?>">Championing our Young Dreamers Through College and Beyond</a></li>
					<li><a href="<?php echo $article_15; ?>">SOS Illinois Youth Speaks at "Leave No One Behind" Dialogue Series</a></li>
					<li><a href="<?php echo $article_16; ?>">Chicago Blackhawks Support SOS Illinois Youth and Foster Parents</a></li>
					<li><a href="<?php echo $article_17; ?>">Our Foster Parents Are Rock Stars</a></li>
					<li><a href="<?php echo $article_18; ?>">Springing Forward: #OurHopeTheirDreams</a></li>
					<li><a href="<?php echo $article_19; ?>">Casa Tepeyac Teaches Prevention and Strengthens Community</a></li>
					<li><a href="<?php echo $article_20; ?>">Prioritizing Family and Keeping Siblings Together in Foster Care</a></li>
				</ul>	
		</div>	
		

		<div class="client-4">
			<h4><?php echo $client_4; ?></h4>
			<div class="client-4-writing">
				<ul>
					<li><a href="<?php echo $article_21; ?>">Product Update: December 2016</a></li>
					<li><a href="<?php echo $article_22; ?>">Announcing TaxLink for Lacerte 2016</a></li>
					<li><a href="<?php echo $article_23; ?>">Product Update: February 2017</a></li>
					<li><a href="<?php echo $article_24; ?>">Entering Expenses in BigTime</a></li>
					<li><a href="<?php echo $article_25; ?>">Budget Status Tracking</a></li>
					<li><a href="<?php echo $article_26; ?>">Understanding Your Task Dashboard</a></li>
				</ul>	
	</div>	

	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
