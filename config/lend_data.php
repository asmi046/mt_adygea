<?php

return [
    'h1' => "Тур в Адыгею ⛰️ из Курска <br> Лучшее приключение весны",
    'start_price' => "17 000",
    'dey_count' => "2",
    'head_photo' => [
        'Приключения' => 'img/bn_present/1.jpg',
        'Впечатления' => 'img/bn_present/2.jpg',
        'Наслаждение' => 'img/bn_present/3.jpg',
        'Природа' => 'img/bn_present/4.jpg',
    ],

    'dates_list' => ["06.03.2025", "07.05.2025"],

    'program' => [
        "06.03.2025" => [
            '6 марта — 16:00 выезд из Курска',
            '7 - 8 марта — 2 незабываемых дня в Адыгее',
            '9 марта — 12:00 прибытие в Курск',
        ],

        "07.05.2025" => [
            '7 мая — 16:00 выезд из Курска',
            '8 - 10 мая — 3 незабываемых дня в Адыгее',
            '11 мая — 12:00 прибытие в Курск',
        ],
    ],

    'priv_head' => "Дорогие друзья! <br>Приглашаем Вас в Адыгею ⛰️<br>Лучшее путешествие года!",
    'priv_text' => file_get_contents(public_path('lend_text/ptiv_text.html')),
    'priv_vidget_text' => "<p>Уже более <strong>1950 туристов</strong><br>посетили Адыгею вместе с <strong>МирТуризма</strong></p>",

    'location_header' => "Лучшие локации <br>Адыгеи",
    'location_photo' => [
        'Древние Азиишские пещеры' => 'img/adygea_all/adygea_location_1.jpg',
        'Паравозик на дне каньона' => 'img/adygea_all/adygea_location_2.jpg',
        'Потрясающие виды' => 'img/adygea_all/adygea_location_3.jpg',
        'Описание 4' => 'img/adygea_all/adygea_location_4.jpg',
        'Нереальные впечатления' => 'img/adygea_all/adygea_location_5.jpg',
        'Фантастические панорамы' => 'img/adygea_all/adygea_location_6.jpg',
        'Неземные виды' => 'img/adygea_all/adygea_location_7.jpg',
        'Яркие эмоции' => 'img/adygea_all/adygea_location_8.jpg',
        'Описание 9' => 'img/adygea_all/adygea_location_9.jpg',
        'Описание 10' => 'img/adygea_all/adygea_location_10.jpg',
        'Нетронутая природа' => 'img/adygea_all/adygea_location_11.jpg',
        'Горные реки' => 'img/adygea_all/adygea_location_12.jpg',
        'Орлиная полка' => 'img/adygea_all/adygea_location_13.jpg',
        'Незабываемый тур' => 'img/adygea_all/adygea_location_14.jpg',
        'Описание 15' => 'img/adygea_all/adygea_location_15.jpg',
        'Добрые моменты' => 'img/adygea_all/adygea_location_16.jpg',
    ],

    'program_dey' => [
        '01' => file_get_contents(public_path('lend_text/tur_program/01.html')),
        '02' => file_get_contents(public_path('lend_text/tur_program/02.html')),
        '03' => file_get_contents(public_path('lend_text/tur_program/03.html')),
    ],

    'prices' => [
        ["price" => 18000, "comment" => "Цена для взрослых (06.03.2025)"],
        ["price" => 17000 , "comment" => "Цена для детей до 16 лет (06.03.2025)"],

        ["price" => 21000, "comment" => "Цена для взрослых (07.05.2025)"],
        ["price" => 20000 , "comment" => "Цена для детей до 16 лет (07.05.2025)"],

    ],

    'in_price' => file_get_contents(public_path('lend_text/dop_price.html')),
    'dop_price' => file_get_contents(public_path('lend_text/dop_price.html')),
    'like_text' => "<p><strong>Адыгея</strong> — это бесконечный калейдоскоп живописных пейзажей, богатой истории и культуры. Откройте для себя всю красоту и величие потрясающей Адыгеи вместе с <strong>МирТуризма 46</strong>!</p>",
];
