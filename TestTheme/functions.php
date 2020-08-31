<?php
//load css
function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main'); 
    
    wp_register_style('carousel', get_template_directory_uri() . '/css/carousel.css', array(), false, 'all');
    wp_enqueue_style('carousel');
}

add_action('wp_enqueue_scripts','load_css');

//load js
function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');

//theme support
add_theme_support( 'menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//menus
register_nav_menus( 
    array(
        'top-menu' => 'Top Menu',
    )
    );

// Custom Image Sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

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

function phone_post_type()
{

	$args = array(


		'labels' => array(

					'name' => 'Phones',
					'singular_name' => 'Phone',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-phone',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
			);

	register_post_type('phones', $args);


}
add_action('init', 'phone_post_type');

function phone_taxonomy()
{

			$args = array(

					'labels' => array(
							'name' => 'Brands',
							'singular_name' => 'Brand',
					),

					'public' => true,
					'hierarchical' => true,

			);


			register_taxonomy('brands', array('phones'), $args);

}
add_action('init', 'phone_taxonomy');