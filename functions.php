<?php

// Убираем ненужные стили и скрипты с head
require_once 'functions/remove_actions.php';

// Подключение стилей
require_once 'functions/action_styles.php';

// Подключение скриптов
require_once 'functions/action_scripts.php';
  

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
    require_once( 'carbon-fields-options/theme-options.php' );
    require_once( 'carbon-fields-options/post-meta.php' );
    require_once( 'carbon-fields-options/term-meta.php' );
}

add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
  register_nav_menu( 'menu_main_header', 'Меню в шапке' );
  register_nav_menu( 'menu_main_footer', 'Меню в подвале' );
  add_theme_support('post-thumbnails');
}


function convertToWebpSrc($src) {
  $src_webp = $src . '.webp';
  return str_replace('uploads', 'uploads-webpc/uploads', $src_webp);
}

//Кастомные типы постов
//Регистрация типа поста - Услуги
require_once 'functions/action_custom_services.php';

//Кастомное поле для миниатюры изображения терм
require_once 'wp-term/wp_term_image.php';
add_action( 'admin_init', [ \Kama\WP_Term_Image::class, 'init' ] );