<?php

add_action('wp_enqueue_scripts', 'site_styles');

function site_styles() {

    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );

    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', [], '0.0.0.0');
    wp_enqueue_style('plugins', get_template_directory_uri() . '/css/plugins.css', [], '0.0.0.0');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css', [], '0.0.0.0');
    wp_enqueue_style('coloring', get_template_directory_uri() . '/css/coloring.css', [], '0.0.0.0');
    wp_enqueue_style('colors-scheme', get_template_directory_uri() . '/css/colors/scheme-01.css', [], '0.0.0.0');
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], '0.0.0.0');

}