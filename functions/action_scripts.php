<?php

add_action('wp_enqueue_scripts', 'site_scripts');

function site_scripts(){
 
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', [], '0.0.0.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', [], '0.0.0.0', true);
    wp_enqueue_script('custom-marquee', get_template_directory_uri() . '/js/custom-marquee.js', [], '0.0.0.0', true);
    wp_enqueue_script('custom-swiper', get_template_directory_uri() . '/js/custom-swiper-1.js', [], '0.0.0.0', true);
    wp_enqueue_script('jquery-event-move', get_template_directory_uri() . '/js/jquery.event.move.js', [], '0.0.0.0', true);
    wp_enqueue_script('jquery-twentytwenty', get_template_directory_uri() . '/js/jquery.twentytwenty.js', [], '0.0.0.0', true);
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/maskinput.min.js', [], '0.0.0.0', true );
    wp_enqueue_script('contact-js', get_template_directory_uri() . '/js/contact.js', [], '0.0.0.0', true); 
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', [], '0.0.0.0', true);
    
    wp_localize_script('contact-js', 'myAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'), 
        'sendmail_url' => get_template_directory_uri() . '/sendmail.php'
    ));
} 