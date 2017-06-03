<?php
/**
 * Skillcrush Starter functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Yoona_Starter
 * since Yoona Starter 1.0
 */

// Theme support for post-thumbnails and menus
function yoonastarter_setup() {

	// Post thumbnails support
	add_theme_support('post-thumbnails');

	// Register Menus 
	register_nav_menus ( array (
		'primary-menu' => __( 'Primary Menu', 'yoonastarter' ),
		'secondary' => __( 'Secondary Menu', 'yoonastarter' ),  
	) );
}

add_action( 'after_setup_theme', 'yoonastarter_setup' );


// Register widget area 
function yoonastarter_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar 1', 'yoonastarter' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'yoonastarter' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yoonastarter_widgets_init' );

// Load Google Web fonts

function load_fonts() {
            wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Lobster|Montserrat:400,700');
            wp_enqueue_style( 'et-googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');

// defines custom markup for post comments
function yoonastarter_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';
 
	echo $comment;
}

// changes excerpt symbol
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//enqueue FontAwesome
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
 
function add_font_awesome() {
wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
}

//Restrict search results to posts
function SearchFilter($query) 
{
    if (($query->is_search)&&(!is_admin())) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');