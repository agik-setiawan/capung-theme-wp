<?php
/*theme setup
*/
//require_once (dirname(__FILE__) . '/theme-options/theme-options.php');
//my options
require_once (dirname(__FILE__) . '/options/global_settings.php');
require_once (dirname(__FILE__) . '/redux/barebones-config.php');
require_once('wp-bootstrap-navwalker/wp-bootstrap-navwalker.php');
vc_set_as_theme( $disable_updater = true );
function theme_wp_setup(){
	add_theme_support('automatic-feed-links');
	add_theme_support('html5',array(
		'search-form','comment-form','comment-list','gallery','caption'));
	//title
	add_theme_support('tittle-tag');
	//post thumbnail
	add_theme_support('post-thumbnail');
	//register menu
	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Dev2' ),
) );
}
add_action('after_setup_theme','theme_wp_setup');

//script and style
function theme_wp_style(){
	/*if(is_singular() && comment_open() && get_option('thread_comments')){
		wp_enqueue_script('comment-reply');
	}*/
	//botstrap
	wp_enqueue_style('bootstrap-style1',get_template_directory_uri().'/assets/assets/web/assets/mobirise-icons/mobirise-icons.css');
	wp_enqueue_style('bootstrap-style2',get_template_directory_uri().'/assets/assets/tether/tether.min.css');
	wp_enqueue_style('bootstrap-style3',get_template_directory_uri().'/assets/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-style4',get_template_directory_uri().'/assets/assets/dropdown/css/style.css');
	wp_enqueue_style('bootstrap-style5',get_template_directory_uri().'/assets/assets/socicon/css/styles.css');
	wp_enqueue_style('bootstrap-style6',get_template_directory_uri().'/assets/assets/theme/css/style.css');
	wp_enqueue_style('bootstrap-style7',get_template_directory_uri().'/assets/assets/fonts/style.css');
	wp_enqueue_style('bootstrap-style8',get_template_directory_uri().'/assets/assets/mobirise/css/mbr-additional.css');
	wp_enqueue_style('w3css',get_template_directory_uri().'/assets/bower/w3css-v4/w3.css');

}
add_action('wp_enqueue_scripts', 'theme_wp_style');


function theme_wp_script(){
		wp_enqueue_script(
        'jquery', get_template_directory_uri() . '/assets/assets/web/assets/jquery/jquery.min.js', array(), '', true);
	wp_enqueue_script(
        'tether', get_template_directory_uri() . '/assets/assets/tether/tether.min.js', array(), '', true);
	wp_enqueue_script(
        'bootstrap', get_template_directory_uri() . '/assets/assets/bootstrap/js/bootstrap.min.js', array(), '', true);
	wp_enqueue_script(
        'smooth-scroll', get_template_directory_uri() . '/assets/assets/smooth-scroll/smooth-scroll.js', array(), '', true);
	wp_enqueue_script(
        'touch-swipe', get_template_directory_uri() . '/assets/assets/touch-swipe/jquery.touch-swipe.min.js', array(), '', true);
	wp_enqueue_script(
        'jarallax.', get_template_directory_uri() . '/assets/assets/jarallax/jarallax.min.js', array(), '', true);
	wp_enqueue_script(
        'script', get_template_directory_uri() . '/assets/assets/theme/js/script.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'theme_wp_script');

?>
