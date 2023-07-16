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

function neuron_theme_custom_post(){
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __('Slides'),
                'singular_name' => __('Slide')
            ),
            'supports' => array('title','editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
            )

        );

        register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __('Features'),
                'singular_name' => __('Feature')
            ),
            'supports' => array('title','editor','thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
            )

        );

        register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'supports' => array('title','editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
            )

        );
}
add_action('init','neuron_theme_custom_post');


// widget support

function neuron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer one', 'neuron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer one widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer two', 'neuron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer two widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'neuron_widgets_init' );