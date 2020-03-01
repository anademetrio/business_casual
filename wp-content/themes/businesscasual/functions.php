<?php

add_theme_support( 'title-tag' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails');

if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'principal', 'Principal' );
}

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'products',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'product' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );