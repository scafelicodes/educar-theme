<?php

function educartheme_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'educartheme_theme_support');

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Main Menu');

// Styles

function educartheme_register_styles () {

    $version = wp_get_theme() -> get('Version');
    wp_enqueue_style('educartheme-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('educartheme-bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('educartheme-custom', get_template_directory_uri() . "/css/main.min.css", array(), '1.0', 'all');
}

add_action ('wp_enqueue_scripts', 'educartheme_register_styles');

// Scripts

function educartheme_register_scripts () {

    wp_enqueue_style('educartheme-jquery', get_template_directory_uri() . "/js/vendor/jquery-1.12.4.min.js", array(), '1.12.4', true);
    wp_enqueue_style('educartheme-popper', get_template_directory_uri() . "/js/popper.min.js", array(), '1.0', true);
    wp_enqueue_style('educartheme-bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array(), '1.0', true);
}

add_action ('wp_enqueue_scripts', 'educartheme_register_scripts');

add_theme_support('post-thumbnails');
// default Post Thumbnail dimensions (cropped)
add_image_size( 'singlelist', 600, 450, true ); 


function custom_excerpt_length( $length ) {
        return 15;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );





 ?>