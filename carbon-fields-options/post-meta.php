<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
    ->show_on_page(10)

  ->add_tab( 'Первый экран', [
      Field::make( 'image', 'top_background_image', 'Фоновая картинка оффера' )->set_width(50),
      Field::make( 'image', 'top_right_image', 'Боковая картинка оффера' )->set_width(50),
      Field::make( 'rich_text', 'top_title', 'Заголовок' )->set_width(50),
      Field::make( 'text', 'top_subtitle', 'Подзаголовок' )->set_width(50),
      Field::make( 'text', 'top_second_btn_text', 'Текст кнопки 2' )->set_width(50),
      Field::make( 'text', 'top_second_btn_link', 'Ссылка кнопки 2' )->set_width(50),
  ]);


Container::make( 'post_meta', 'Дополнительные поля' )
    ->show_on_post_type('service')

  ->add_tab( 'Информация услуги', [
      Field::make( 'text', 'service_price', 'Стоимость услуги, руб.' )->set_width(50),
      Field::make( 'image', 'service_icon', 'Иконка' )->set_width(50),
]);
