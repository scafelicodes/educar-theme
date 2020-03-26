<?php

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Main Menu');


add_theme_support('post-thumbnails');
// default Post Thumbnail dimensions (cropped)
add_image_size( 'singlelist', 600, 450, true ); 


function custom_excerpt_length( $length ) {
        return 15;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );





 ?>