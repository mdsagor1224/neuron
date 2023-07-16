<?php

function neuron_theme_files(){
    wp_enqueue_style('animate',get_template_directory_uri() .'/assets/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome',get_template_directory_uri() .'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-carousel',get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootsnav',get_template_directory_uri() .'/assets/css/bootsnav.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap',get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
    
    wp_enqueue_style('neuron-style', get_stylesheet_uri());


    wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('bootsnav', get_template_directory_uri() .'/assets/js/bootsnav.js',array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() .'/assets/js/wow.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() .'/assets/js/ajaxchimp.js',array('jquery'), '1.0', true);
    wp_enqueue_script('ajaxchimp-config', get_template_directory_uri() .'/assets/js/ajaxchimp-config.js',array('jquery'), '1.0', true);
    wp_enqueue_script('neuron-seript', get_template_directory_uri() .'/assets/js/script.js',array('jquery'), '1.0', true);

}
add_action('wp_enqueue_scripts','neuron_theme_files');


function neuron_theme_supports(){

    // loading textdomain
    load_theme_textdomain( 'neuron-rrfonlie', get_template_directory() . '/languages' );

    //Generate automatic feed links on head
    add_theme_support( 'automatic-feed-links' );

    //Adding title tag
    add_theme_support( 'title-tag' );

    //Enableing Post Thumbnail
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'neuron-rrfonlie' ),
		)
	);

    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    // Add Custiom Logo Support
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);


}
add_action('after_setup_theme','neuron_theme_supports');