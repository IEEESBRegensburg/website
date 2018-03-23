<?php

if ( ! function_exists('ieee_sb_rgbg_custom_theme_setup'))
{
    function ieee_sb_rgbg_custom_theme_setup(){
        // Add default posts and comments RSS feed links to head
        add_theme_support('automatic-feed-links');

        // The title tag should be added by the wp_head function of WordPress
        add_theme_support('title-tag');

        // Add support for post thumbnails
        add_theme_support('post-thumbnails');
        add_image_size('excerpt-thumbnail', 200, 140, true);

        // Register the header navigation menu
        register_nav_menus(array(
            'header-navigation-menu'    =>  'Header Navigation',
            'social-links'              =>  'Social Links'
        ));

        // Switch default core markup for search form, comment form, and comments
        // to output valid HTML5
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        )) ;

        // There are explicitly no other post formats allowed other than standard one

    }
}
add_action('after_setup_theme', 'ieee_sb_rgbg_custom_theme_setup');

// Set the content width in pixel, so that embeds are stretched to the correct horizontal size
function ieee_sb_rgbg_custom_theme_content_width(){
    $GLOBALS['content_width'] = apply_filters('ieee_sb_rgbg_custom_theme_content_width', 750);
}
add_action('after_setup_theme', 'ieee_sb_rgbg_custom_theme_content_width', 0);

function ieee_sb_rgbg_custom_theme_sidebar_initialization(){
    register_sidebar(array (
        'name'          => 'Main Side Bar',
        'id'            => 'main-sidebar',
        'description'   => 'The side bar that is displayed in pages and post sites',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ));
}
add_action('widgets_init', 'ieee_sb_rgbg_custom_theme_sidebar_initialization');

function ieee_sb_rgbg_custom_theme_stylesheets_and_scripts()
{
    wp_enqueue_style('IEEE SB Style CSS',
        get_stylesheet_uri(),
        array(
            'Bootstrap 3 CSS',
            'Google Fonts',
            'Fontawesome'
        ));
    wp_enqueue_style('Google Fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,100');
    wp_enqueue_style('Fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    wp_enqueue_style('Bootstrap 3 CSS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
    wp_enqueue_style('Animate.css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css');

    wp_enqueue_script('jQuery', 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.4.min.js');
    wp_enqueue_script('Bootstrap 3 JS',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
        array('jQuery'));
    wp_enqueue_script('jQuery Easing',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        array('jQuery'));
    wp_enqueue_script('WowJS',
        get_template_directory_uri() . '/js/wow.min.js',
        array('jQuery Easing'),
        false,
        true);
    wp_enqueue_script('App JS',
        get_template_directory_uri() . '/js/app.js',
        array('WowJS', 'jQuery Easing'),
        false,
        true);
}
add_action('wp_enqueue_scripts', 'ieee_sb_rgbg_custom_theme_stylesheets_and_scripts');

function ieee_sb_custom_theme_social_menu()
{
    wp_nav_menu(array(
        'theme_location'    =>  'social-links',
        'container'         =>  'div',
        'container_class'   =>  'menu-social',
        'depth'             =>  1,
        'before'            =>  '<div class="social-media-element wow bounceInRight"><div>',
        'after'             =>  '</div></div>',
        'link_before'       =>  '<p>',
        'link_after'        =>  '</p>'
    ));
}
