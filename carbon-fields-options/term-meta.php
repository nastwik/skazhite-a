<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('term_meta', 'Кастомные поля', 'text-domain')
   ->where('term_taxonomy', '=', 'production-categories')
   ->add_fields(array(
      Field::make('image', 'categories_second_image', 'Фоновое изображение оффера'),
      Field::make('textarea', 'categories_offer_description', 'Подзаголовок'),
      Field::make('rich_text', 'categories_first_paragraph', 'Первый текстовый блок под SEO'),
      Field::make('rich_text', 'categories_second_paragraph', 'Второй текстовый блок под SEO'),
   ))
   ->add_tab('Доп. блоки', [
      Field::make('checkbox', 'types_glazing_show', 'Виды остекления')->set_width(33),
      Field::make('checkbox', 'color_decision_show', 'Цветовые решения для алюминиевых профилей')->set_width(33),
      Field::make('checkbox', 'color_decision_facades_show', 'Цветовые решения для вентилируемых фасадов')->set_width(33),
      Field::make('checkbox', 'markviz_show', 'Марквиз')->set_width(33),
      Field::make('checkbox', 'profile_systems_show', 'Системы алюминиевых профилей')->set_width(33),
      Field::make('checkbox', 'faq_show', 'Часто задаваемые вопросы')->set_width(33),
   ])
   ->add_tab('Преимущества', [
      Field::make('text', 'advantages_title', 'Заголовок'),
      Field::make('text', 'advantages_subtitle', 'Подзаголовок'),
      Field::make('complex', 'advantages_list', 'Преимущества')
            ->add_fields(array(
               Field::make('image', 'advantage_icon', 'Иконка')->set_width(50),
               Field::make('textarea', 'advantage_label', 'Преимущество')->set_width(50),
            )),
   ])
   ->add_tab('ЧАВО', [
      Field::make('complex', 'faq_list', 'Часто задаваемые вопросы')
         ->add_fields(array(
            Field::make('text', 'faq_question', 'Вопрос')->set_width(50),
            Field::make('text', 'faq_answer', 'Ответ')->set_width(50),
         )),
      ])
   ->add_tab('Цветовые решения для алюминиевых профилей', [
      Field::make('complex', 'color_main_term', 'Стандартные цвета')
      ->add_fields(array(
          Field::make('text', 'name_ral_main_term', 'Название цвета по RAL')->set_width(50),
          Field::make('color', 'color_ral_main_term', 'Цвет по RAL')->set_width(50),
      )),
      Field::make('complex', 'color_exclusive_term', 'Эксклюзивные цвета')
      ->add_fields(array(
          Field::make('text', 'name_ral_exclusive_term', 'Название цвета по RAL')->set_width(50),
          Field::make('color', 'color_ral_exclusive_term', 'Цвет по RAL')->set_width(50),
      )),
   ])
   ->add_tab('Цветовые решения для вентилируемых фасадов', [
       Field::make('complex', 'coloring_term', 'Окрашивание')
       ->add_fields(array(
           Field::make('text', 'name_material_coloring_term', 'Название материала окрашивания')->set_width(50),
           Field::make('image', 'img_material_coloring_term', 'Изображение материала окрашивания')->set_width(50),
       )),
       Field::make('complex', 'ultraviolet_printing_term', 'УФ-печать')
       ->add_fields(array(
           Field::make('text', 'name_ultraviolet_printing_term', 'Название материала уф-печати')->set_width(50),
           Field::make('image', 'image_ultraviolet_printing_term', 'Изображение материала уф-печати')->set_width(50),
       )),
]);

add_action('after_setup_theme', function () {
   \Carbon_Fields\Carbon_Fields::boot();
});
