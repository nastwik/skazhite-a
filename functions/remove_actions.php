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