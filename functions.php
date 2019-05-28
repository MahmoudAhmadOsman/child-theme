<?php

require_once 'wp-bootstrap-navwalker.php';
//require_once 'slideshow.php';

//End of Slide section

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
	add_theme_support('html5', array('search-form'));

}
add_action('after_setup_theme', 'wpdocs_after_setup_theme');

/****/
show_admin_bar(false); // This removes the toolbar menu when you are viewing your website while login..
/***/

//Add post type support
//post_type_supports($post_type, $supports);

// Add post thumbnail Support
add_theme_support('post-thumbnails');
add_image_size('large', 1200, 420, true);

//the_category(',');

/*  * Custom Function
 * wp_enqueue_style() -> adds stylesheet link to your website
 * wp_enqueue_script() -> adds javascript link to your website
 * get_template_directory_uri() -> takes you to the right styleshee/js link or path
 */
function mobilecash_add_styles() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/fonts/font-awesome.min.css');

	// Your custom css stylesheet
	wp_enqueue_style('mainstylesheet-css', get_template_directory_uri() . '/css/main.css');
	//Normalize css
	wp_enqueue_style('normalize-css', get_template_directory_uri() . '/css/normalize.css');

	//TinyMCE Stylesheet
	wp_enqueue_style('tinymce-css', get_template_directory_uri() . '/css/custom-editor-style.css');

}

/*

 ** wp_enqueue_script() -> this function gets the js script

 */

function mobilecash_add_scripts() {
	//wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), false, true); //this is one way to do it, below is another way to do it. also, it just fine to call jquery in this way

	wp_deregister_script('jquery'); // Remove from the footer

	// Now register jquery in the footer using wordpress jquery
	//wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false);// old & wrong

	wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);

	// Now add the new jquery
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);

//HTML5 Shiv conditional
	wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
	wp_script_add_data('html5shiv', 'conditional', 'lt IE 9'); //cheks the condition
	wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js');
	wp_script_add_data('respond', 'conditional', 'lt IE 9');

}

/*
 * After you add the css stylesheet and js script links, now call then by using
 * add_action() -> which is wordpress function that gets the links of the stylesheets
 */

add_action('wp_enqueue_scripts', 'mobilecash_add_styles');
add_action('wp_enqueue_scripts', 'mobilecash_add_scripts');

/*
==================
___________________________________________________________________________________
==================
 */

/*
 ** Add Custom Menu to your website
 */

/*
 ** This is for menus only, ex. how many menus you want to have on you site.
 **  Such as menu location. Now I have here two menus: One for the header and one for the footer
 */
function mobilecash_register_custom_menu() {
	register_nav_menus(array(
		'bootstrap-menu' => 'Primary Menu - Header Navigation',
		'footer-menu' => 'Footer Menu - Footer Navigation',

	));
}

function mobilecash_menu() {
	//This function display the menu of the website
	wp_nav_menu(array(
		'theme_location' => 'bootstrap-menu',
		'menu_class' => 'nav navbar-nav navbar-right',
		'container' => false,
		'depth' => 2,
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'mobilecash-menu',
		//'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
		'walker' => new wp_bootstrap_navwalker(),

	));

}
add_action('init', 'mobilecash_register_custom_menu');

/*
=> Register Sidebar Widget
 */
function mobilecash_sidebar_widget() {
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
		'description' => 'This widgets  will be shown on all posts and pages',
		'before_widget' => '<div class="main-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title well">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'mobilecash_sidebar_widget');

/*
 **
=> The Site logo image
 **
 */

function mobilecash_custom_header_logo_image() {
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mobilecash_custom_header_logo_image');

/*
# Custom Post Type Section
# Register Custom Post Type staff
# Post Type Key: staff
 */
function create_staff_post() {

	$labels = array(
		//Before:'name' => __('staff Directory', 'Post Type General Name', '
		'name' => __('Staff', 'Post Type General Name', 'mobilecash.etechwebschool'),
		'singular_name' => __('staff', 'Post Type Singular Name', 'mobilecash.etechwebschool'),
		'menu_name' => __('staff', 'mobilecash.etechwebschool'),
		'name_admin_bar' => __('staff', 'mobilecash.etechwebschool'),
		'archives' => __('staff Archives', 'mobilecash.etechwebschool'),
		'attributes' => __('staff Attributes', 'mobilecash.etechwebschool'),
		'parent_item_colon' => __('Parent staff:', 'mobilecash.etechwebschool'),
		'all_items' => __('All staff', 'mobilecash.etechwebschool'),
		'add_new_item' => __('Add New staff', 'mobilecash.etechwebschool'),
		'add_new' => __('Add New', 'mobilecash.etechwebschool'),
		'new_item' => __('New staff', 'mobilecash.etechwebschool'),
		'edit_item' => __('Edit staff', 'mobilecash.etechwebschool'),
		'update_item' => __('Update staff', 'mobilecash.etechwebschool'),
		'view_item' => __('View staff', 'mobilecash.etechwebschool'),
		'view_items' => __('View staff', 'mobilecash.etechwebschool'),
		'search_items' => __('Search staff', 'mobilecash.etechwebschool'),
		'not_found' => __('Not found', 'mobilecash.etechwebschool'),
		'not_found_in_trash' => __('Not found in Trash', 'mobilecash.etechwebschool'),
		'featured_image' => __('Featured Image', 'mobilecash.etechwebschool'),
		'set_featured_image' => __('Set featured image', 'mobilecash.etechwebschool'),
		'remove_featured_image' => __('Remove featured image', 'mobilecash.etechwebschool'),
		'use_featured_image' => __('Use as featured image', 'mobilecash.etechwebschool'),
		'insert_into_item' => __('Insert into staff', 'mobilecash.etechwebschool'),
		'uploaded_to_this_item' => __('Uploaded to this staff', 'mobilecash.etechwebschool'),
		'items_list' => __('staff list', 'mobilecash.etechwebschool'),
		'items_list_navigation' => __('staff list navigation', 'mobilecash.etechwebschool'),
		'filter_items_list' => __('Filter staff list', 'mobilecash.etechwebschool'),
	);
	$args = array(
		'label' => __('staff', 'mobilecash.etechwebschool'),
		'description' => __('This post is for staff page', 'mobilecash.etechwebschool'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-image-filter',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('staff_post'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type('staff', $args);

}
add_action('init', 'create_staff_post', 3);

/*
Start of Slider Section
 */

function create_slides_show() {

	$labels = array(
		'name' => __('slides', 'Post Type General Name', 'slider'),
		'singular_name' => __('slides', 'Post Type Singular Name', 'slider'),
		'menu_name' => __('slides', 'slider'),
		'name_admin_bar' => __('slides', 'slider'),
		'archives' => __('slides Archives', 'slider'),
		'attributes' => __('slides Attributes', 'slider'),
		'parent_item_colon' => __('Parent slides:', 'slider'),
		'all_items' => __('All slides', 'slider'),
		'add_new_item' => __('Add New slides', 'slider'),
		'add_new' => __('Add New', 'slider'),
		'new_item' => __('New slides', 'slider'),
		'edit_item' => __('Edit slides', 'slider'),
		'update_item' => __('Update slides', 'slider'),
		'view_item' => __('View slides', 'slider'),
		'view_items' => __('View slides', 'slider'),
		'search_items' => __('Search slides', 'slider'),
		'not_found' => __('Not found', 'slider'),
		'not_found_in_trash' => __('Not found in Trash', 'slider'),
		'featured_image' => __('Featured Image', 'slider'),
		'set_featured_image' => __('Set featured image', 'slider'),
		'remove_featured_image' => __('Remove featured image', 'slider'),
		'use_featured_image' => __('Use as featured image', 'slider'),
		'insert_into_item' => __('Insert into slides', 'slider'),
		'uploaded_to_this_item' => __('Uploaded to this slides', 'slider'),
		'items_list' => __('slides list', 'slider'),
		'items_list_navigation' => __('slides list navigation', 'slider'),
		'filter_items_list' => __('Filter slides list', 'slider'),
	);
	$args = array(
		'label' => __('slides', 'slider'),
		'description' => __('This is for the slider pages', 'slider'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-code',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'taxonomies' => array('slides'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type('slides', $args);

}
add_action('init', 'create_slides_show', 10);
