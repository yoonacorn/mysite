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
	<div class="header">
		<h1>Writing</h1>
		<p>Are you looking for a <span class="mission">blogger</span> or a <span class="mission">content strategist</span> for your new or existing website? Get in touch. I can help you create a blogging and content calendar, optimized content for SEO, and assist with mapping a social media strategy.</p>  
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
				$article_26 = get_field( 'article_27');
				$article_26 = get_field( 'article_28');
				$article_26 = get_field( 'article_29');
				$article_26 = get_field( 'article_30');
				$article_26 = get_field( 'article_31');
				$article_26 = get_field( 'article_32');
				$size = "full";
			?>

			<figure>
			  <?php if ( has_post_thumbnail() ) : ?>
			    <?php the_post_thumbnail('full'); ?>
			  <?php endif; ?>
			</figure>

		<div class="client-1">
			<h4><?php echo $client_1; ?></h4>
			<div class="client-1-writing" id="writing">
				<ul>
					<li><a href="<?php echo $article_1; ?>" target="_blank" rel="noopener noreferrer">Maxing Out on Comfort in Passive Houses</a></li>
					<li><a href="<?php echo $article_2; ?>" target="_blank" rel="noopener noreferrer">Charging Up: An Intro to Energy Storage</a></li>
					<li><a href="<?php echo $article_3; ?>" target="_blank" rel="noopener noreferrer">No Man's an (Urban Heat) Island</a></li>
					<li><a href="<?php echo $article_4; ?>" target="_blank" rel="noopener noreferrer">How Cold is it Really: An Intro to Heating Degree Days</a></li>
					<li><a href="<?php echo $article_5; ?>" target="_blank" rel="noopener noreferrer">Zero Net Energy Buildings Around the US</a></li>
					<li><a href="<?php echo $article_6; ?>" target="_blank" rel="noopener noreferrer">Defining the Smart Grid</a></li>
					<li><a href="<?php echo $article_7; ?>" target="_blank" rel="noopener noreferrer">Two Sides of the Same Coin: A Beginner's Guide to Hardening And Resiliency</a></li>
				</ul>
			</div>		
		</div>
		
		<div class="client-2" >
			<h4><?php echo $client_2; ?></h4>
			<div class="client-2-writing" id="writing">
				<ul>
					<li><a href="<?php echo $article_8; ?>" target="_blank" rel="noopener noreferrer">John Chang: Work Hard, Never Stop</a></li>
					<li><a href="<?php echo $article_9; ?>" target="_blank" rel="noopener noreferrer">Bethany Powell: Designer, Curator, Storyteller</a></li>
					<li><a href="<?php echo $article_10; ?>" target="_blank" rel="noopener noreferrer">Sean Flood: A Formative Journey</a></li>
					<li><a href="<?php echo $article_11; ?>">Caitlyn Panter: Examining Life After Art School</a></li>
					<li><a href="<?php echo $article_12; ?>">Leah Miller: On Pace for Success</a></li>
					<li><a href="<?php echo $article_13; ?>">Renee Kurilla and Keith Zulawnik: Working and Living Happily Ever After</a></li>
				</ul>
			</div>		
		</div>	
	
	
		<div class="client-3" >
			<h4><?php echo $client_3; ?></h4>
			<div class="client-3-writing" id="writing">
				<ul>
					<li><a href="<?php echo $article_14; ?>" target="_blank" rel="noopener noreferrer">Championing our Young Dreamers Through College and Beyond</a></li>
					<li><a href="<?php echo $article_15; ?>" target="_blank" rel="noopener noreferrer">SOS Illinois Youth Speaks at "Leave No One Behind" Dialogue Series</a></li>
					<li><a href="<?php echo $article_16; ?>" target="_blank" rel="noopener noreferrer">Chicago Blackhawks Support SOS Illinois Youth and Foster Parents</a></li>
					<li><a href="<?php echo $article_17; ?>" target="_blank" rel="noopener noreferrer">Our Foster Parents Are Rock Stars</a></li>
					<li><a href="<?php echo $article_18; ?>" target="_blank" rel="noopener noreferrer">Springing Forward: #OurHopeTheirDreams</a></li>
					<li><a href="<?php echo $article_19; ?>" target="_blank" rel="noopener noreferrer">Casa Tepeyac Teaches Prevention and Strengthens Community</a></li>
					<li><a href="<?php echo $article_20; ?>" target="_blank" rel="noopener noreferrer">Prioritizing Family and Keeping Siblings Together in Foster Care</a></li>
				</ul>
			</div>		
		</div>	
		

		<div class="client-4" >
			<h4><?php echo $client_4; ?></h4>
			<div class="client-4-writing" id="writing">
				<ul>
					<li><a href="<?php echo $article_21; ?>" target="_blank" rel="noopener noreferrer">Product Update: December 2016</a></li>
					<li><a href="<?php echo $article_22; ?>" target="_blank" rel="noopener noreferrer">Announcing TaxLink for Lacerte 2016</a></li>
					<li><a href="<?php echo $article_23; ?>" target="_blank" rel="noopener noreferrer">Product Update: February 2017</a></li>
					<li><a href="<?php echo $article_24; ?>" target="_blank" rel="noopener noreferrer">Entering Expenses in BigTime</a></li>
					<li><a href="<?php echo $article_25; ?>" target="_blank" rel="noopener noreferrer">Budget Status Tracking</a></li>
					<li><a href="<?php echo $article_26; ?>" target="_blank" rel="noopener noreferrer">Understanding Your Task Dashboard</a></li>
				</ul>	
			</div>	
		</div>

		<div class="client-5" >
			<h4><?php echo $client_5; ?></h4>
			<div class="client-5-writing" id="writing">
				<ul>
					<li><a href="<?php echo $article_27; ?>" target="_blank" rel="noopener noreferrer">How to Make an Impact as an Introvert</a></li>
					<li><a href="<?php echo $article_28; ?>" target="_blank" rel="noopener noreferrer">To Quit or Not to Quit | Is That Really the Question?</a></li>
					<li><a href="<?php echo $article_29; ?>" target="_blank" rel="noopener noreferrer">10 Social-Impact Podcasts to Check Out This Winter</a></li>
					<li><a href="<?php echo $article_30; ?>" target="_blank" rel="noopener noreferrer">How to Use Your Programming Skills for Social Impact</a></li>
					<li><a href="<?php echo $article_31; ?>" target="_blank" rel="noopener noreferrer">Switching to the Nonprofit Sector? Here’s One Route You May Not Have Considered</a></li>
					<li><a href="<?php echo $article_32; ?>" target="_blank" rel="noopener noreferrer">3 Ways to Streamline Your Job Search in the New Year</a></li>
				</ul>	
			</div>	
		</div>	

	</div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
