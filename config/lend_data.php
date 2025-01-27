<?php

return [
    'h1' => "Тур в Адыгею ⛰️ из Курска <br> Лучшее путешествие весны",
    'start_price' => "17 000",
    'dey_count' => "2",
    'head_photo' => [
        'Яркие эмоции' => 'img/adygea_all/adygea_location_8.jpg',
        'Потрясающие виды' => 'img/bn_present/2.jpg',
        'Новые впечатления' => 'img/bn_present/3.jpg',
        'Приключения для всех' => 'img/bn_present/4.jpg',
    ],

    'dates_list' => ["06.03.2025 (программа на 2 дня)", "30.04.2025 (программа на 3 дня)", "07.05.2025 (программа на 3 дня)"],

    'program' => [
        "2 дня в Адыгее" => [
            '1 день — 16:00 выезд из Курска',
            '2 дня — программа в Адыгее',
            '4 день — 12:00 прибытие в Курск',
        ],

        "3 дня в Адыгее" => [
            '1 день — 16:00 выезд из Курска',
            '3 дня — программа в Адыгее',
            '5 день — 12:00 прибытие в Курск',
        ],
    ],

    'priv_head' => "Дорогие друзья! <br>Приглашаем Вас в Адыгею ⛰️<br>Лучшее путешествие года!",
    'priv_text' => file_get_contents(public_path('lend_text/ptiv_text.html')),
    'priv_vidget_text' => "<p>Уже более <strong>1950 туристов</strong><br>посетили Адыгею вместе с <strong>МирТуризма</strong></p>",

    'location_header' => "Лучшие локации Адыгеи",
    'location_photo' => [
        'Термальные источники' => 'img/adygea_all/snow_1.jpg',
        'Потрясающие виды ' => 'img/adygea_all/snow_3.jpg',
        'Кристально чистый воздух' => 'img/adygea_all/snow_2.jpg',
        'Отличная компания' => 'img/adygea_all/snow_4.jpg',
        'Древние Азиишские пещеры' => 'img/adygea_all/adygea_location_1.jpg',
        'Паровозик на дне каньона' => 'img/adygea_all/adygea_location_2.jpg',
        'Потрясающие виды' => 'img/adygea_all/adygea_location_3.jpg',
        // 'Описание 4' => 'img/adygea_all/adygea_location_4.jpg',
        'Нереальные впечатления' => 'img/adygea_all/adygea_location_5.jpg',
        'Фантастические панорамы' => 'img/adygea_all/adygea_location_6.jpg',
        'Неземные виды' => 'img/adygea_all/adygea_location_7.jpg',
        'Яркие эмоции' => 'img/adygea_all/adygea_location_8.jpg',
        // 'Описание 9' => 'img/adygea_all/adygea_location_9.jpg',
        // 'Описание 10' => 'img/adygea_all/adygea_location_10.jpg',
        'Нетронутая природа' => 'img/adygea_all/adygea_location_11.jpg',
        'Горные реки' => 'img/adygea_all/adygea_location_12.jpg',
        'Орлиная полка' => 'img/adygea_all/adygea_location_13.jpg',
        'Незабываемый тур' => 'img/adygea_all/adygea_location_14.jpg',
        // 'Описание 15' => 'img/adygea_all/adygea_location_15.jpg',
        // 'Добрые моменты' => 'img/adygea_all/adygea_location_16.jpg',
    ],

    'program_dey' => [
        'Выезд из Курска' => "<p>Выезд на комфортабельном автобусе из Курска в Адыгею</p>",
        'Программа в Адыгее' => file_get_contents(public_path('lend_text/tur_program/02.html')),
        'Прибытие в Курск' => "<p>Прибытие из Адыгеии в Курск</p>",
    ],

    'prices' => [
        ["price" => 18000, "comment" => "Цена для взрослых (06.03.2025)"],
        ["price" => 17000 , "comment" => "Цена для детей до 16 лет (06.03.2025)"],

        ["price" => 21000, "comment" => "Цена для взрослых (30.04.2025)"],
        ["price" => 20000 , "comment" => "Цена для детей до 16 лет (30.04.2025)"],

        ["price" => 21000, "comment" => "Цена для взрослых (07.05.2025)"],
        ["price" => 20000 , "comment" => "Цена для детей до 16 лет (07.05.2025)"],

    ],

    'in_price' => file_get_contents(public_path('lend_text/in_price.html')),
    'dop_price' => file_get_contents(public_path('lend_text/dop_price.html')),
    'like_text' => "<p><strong>Адыгея</strong> — это бесконечный калейдоскоп живописных пейзажей, богатой истории и культуры. Откройте для себя всю красоту и величие потрясающей Адыгеи вместе с <strong>МирТуризма 46</strong>!</p>",
];
