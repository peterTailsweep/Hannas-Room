<?php

// Extend VC Grid Items
include_once('inc/shortcodes/vc_grid_author.php');

// Enque parent theme style sheets
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* DON'T DELETE THIS CLOSING TAG */ ?>
