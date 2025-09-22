<?php

// Создание типа поста: Услуги
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