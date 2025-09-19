<?php

if (!defined('ABSPATH')){
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки сайта' )
->add_tab( 'Общие настройки', [
    Field::make( 'image', 'site_logo', 'Логотип' ),
])

->add_tab( 'Контакты', [
    Field::make( 'text', 'site_phone', 'Телефон' )->set_width(50),
    Field::make( 'text', 'site_phone_digits', 'Телефон без пробелов в формате +79999999999' )->set_width(50),
    Field::make( 'text', 'site_fact_address', 'Фактический адрес' )->set_width(50),
    Field::make( 'text', 'site_ur_address', 'Юридический адрес' )->set_width(50),
    Field::make( 'text', 'site_email', 'Почта' )->set_width(50),
    Field::make( 'rich_text', 'site_work_time', 'Время работы' )->set_width(50),
    Field::make( 'text', 'site_inn', 'ИНН' )->set_width(33),
    Field::make( 'text', 'site_kpp', 'КПП' )->set_width(33),
    Field::make( 'text', 'site_ogrn', 'ОГРН' )->set_width(33),
    Field::make( 'rich_text', 'site_map_coordinates', 'Карта' ),
])

->add_tab( 'Галерея', [
    Field::make( 'media_gallery', 'gallery', 'Галерея' ),
]);