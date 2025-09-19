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

add_action( 'after_setup_theme', 'register_post_services' );
function register_post_services() {
  register_post_type('service', [
    'labels' => [
      'name'               => 'Услуги', 
      'singular_name'      => 'Услуга', 
      'add_new'            => 'Добавить услугу', 
      'add_new_item'       => 'Добавление услуги', 
      'edit_item'          => 'Редактирование услуги', 
      'new_item'           => 'Новая услуга', 
      'view_item'          => 'Смотреть услугу', 
      'search_items'       => 'Искать услугу', 
      'not_found'          => 'Не найдено',
      'not_found_in_trash' => 'Не найдено в корзине', 
      'menu_name'          => 'Услуги', 
    ],
    'menu_icon'          => 'dashicons-clipboard',
    'public'             => true,
    'menu_position'      => 5,
    'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
    'has_archive'        => true,
    'rewrite'            => ['slug' => 'services']
   ] );

  register_taxonomy('service-categories', 'service', [
    'labels'        => [
      'name'                        => 'Категории услуг',
      'singular_name'               => 'Категория услуги',
      'search_items'                => 'Искать категории',
      'popular_items'               => 'Популярные категории',
      'all_items'                   => 'Все категории',
      'edit_item'                   => 'Изменить категорию',
      'update_item'                 => 'Обновить категорию',
      'add_new_item'                => 'Добавить новую категорию',
      'new_item_name'               => 'Новое название категории',
      'separate_items_with_commas'  => 'Отделить категории запятыми',
      'add_or_remove_items'         => 'Добавить или удалить категорию',
      'choose_from_most_used'       => 'Выбрать самую популярную категорию',
      'menu_name'                   => 'Категории',
    ],
    'hierarchical'  => true,
  ]);
}