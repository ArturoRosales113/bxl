<?php

function load_stylesheets()
{
    wp_register_style('bxl', get_template_directory_uri().'/css/bxl.css', array(), 1, 'all');
    wp_enqueue_style('bxl');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');



// Menu support
add_theme_support('menus');
add_theme_support( 'woocommerce' );

// Woocommerce Support
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Registrar menu
register_nav_menus(
    array(
        'top menu' => __('Top Menu','bxl'),
    )
);




