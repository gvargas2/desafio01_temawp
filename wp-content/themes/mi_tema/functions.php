<?php

add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', function() {

    wp_deregister_script('jquery');

    //Enqueue Style
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'portfolio', get_template_directory_uri() . '/assets/css/portfolio-item.css');

    //Enqueue Scripts
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', null, null, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'
        , ['jquery'], null, true);

    // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js'));

} );
