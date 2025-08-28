<?php

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'wp_generator'); 
remove_action('wp_head', 'wlwmanifest_link'); 
remove_action('wp_head', 'rsd_link'); 
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rel_canonical'); 
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');

add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );

    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', [], '0.0.0.0');
    wp_enqueue_style('plugins', get_template_directory_uri() . '/css/plugins.css', [], '0.0.0.0');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.css', [], '0.0.0.0');
    wp_enqueue_style('coloring', get_template_directory_uri() . '/css/coloring.css', [], '0.0.0.0');
    wp_enqueue_style('colors-scheme', get_template_directory_uri() . '/css/colors/scheme-01.css', [], '0.0.0.0');
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], '0.0.0.0');
 
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', [], '0.0.0.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', [], '0.0.0.0', true);
    wp_enqueue_script('custom-marquee', get_template_directory_uri() . '/js/custom-marquee.js', [], '0.0.0.0', true);
    wp_enqueue_script('custom-swiper', get_template_directory_uri() . '/js/custom-swiper-1.js', [], '0.0.0.0', true);
    wp_enqueue_script('jquery-event-move', get_template_directory_uri() . '/js/jquery.event.move.js', [], '0.0.0.0', true);
    wp_enqueue_script('jquery-twentytwenty', get_template_directory_uri() . '/js/jquery.twentytwenty.js', [], '0.0.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/designesia.js', [], '0.0.0.0', true); 
}   