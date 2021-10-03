<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function studioCheeseTheme_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.1', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/studioCheeseTheme.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.1.1', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/studioCheeseTheme.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'studioCheeseTheme_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function studioCheeseTheme_theme_setup() {

	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	
}

add_action('init', 'studioCheeseTheme_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/

function studioCheeseTheme_theme_support() {

	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'studioCheeseTheme_theme_support');

/*
	==========================================
	 Sidebar function
	==========================================
*/

function studioCheeseTheme_widget_setup() {
	
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="sidebar-module widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget title">',
			'after_title' => '<h4/>'
		)
	);
}

add_action('widgets_init','studioCheeseTheme_widget_setup');

/*
	==========================================
	Register Custom Navigation Walker
	==========================================
*/

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

