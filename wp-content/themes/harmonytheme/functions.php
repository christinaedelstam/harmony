<?php

// Load Stylesheets
function load_css()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');

// Load Javascript
function load_js()
{
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Custom Image Sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

// Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
		'footer-menu' => 'Footer Menu Location',
	)
);

// Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(

				'name' => 'Page Sidebar',
				'id' => 'page-sidebar',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'

		)
	);

	register_sidebar(
		array(

				'name' => 'Blog Sidebar',
				'id' => 'blog-sidebar',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'

		)
	);
}
add_action('widgets_init','my_sidebars');


// Post type test
function my_first_post_type()
{
	$args = array(
		'labels' => array(

					'name' => 'Bracelets',
					'singular_name' => 'Bracelet',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		//'rewrite' => array('slug' => 'bracelets'),	

	);
	register_post_type('bracelets', $args);

}
add_action('init', 'my_first_post_type');


function my_first_taxonomy()
{
	$args = array(

			'labels' => array(
					'name' => 'Marques',
					'singular_name' => 'Marque',
			),

			'public' => true,
			'hierarchical' => true,

	);
	register_taxonomy('marques', array('bracelets'), $args);
}
add_action('init', 'my_first_taxonomy');

