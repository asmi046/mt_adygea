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
            '6 - 8 марта — 2 незабываемых дня в адыгее',
            '9 марта — 12:00 прибытие в Курск',
        ],

        "07.05.2025" => [
            '7 мая — 16:00 выезд из Курска',
            '7 - 10 мая — 3 незабываемых дня в адыгее',
            '11 мая — 12:00 прибытие в Курск',
        ],
    ],

    'priv_head' => "Дорогие друзья! <br>Приглашаем Вас на весенний тур в Адыгею ⛰️",
    'priv_text' => file_get_contents(public_path('lend_text/ptiv_text.html')),
    'priv_vidget_text' => "<p>Уже более <strong>1950 туристов</strong><br>посетили Адыгею вместе с <strong>МирТуризма</strong></p>",

    'location_header' => "Лучшие локации <br>Адыгеи",
    'location_photo' => [
        'Описание 1' => 'img/adygea_all/adygea_location_1.jpg',
        'Описание 2' => 'img/adygea_all/adygea_location_2.jpg',
        'Описание 3' => 'img/adygea_all/adygea_location_3.jpg',
        'Описание 4' => 'img/adygea_all/adygea_location_4.jpg',
        'Описание 5' => 'img/adygea_all/adygea_location_5.jpg',
        'Описание 6' => 'img/adygea_all/adygea_location_6.jpg',
        'Описание 7' => 'img/adygea_all/adygea_location_7.jpg',
        'Описание 8' => 'img/adygea_all/adygea_location_8.jpg',
        'Описание 9' => 'img/adygea_all/adygea_location_9.jpg',
        'Описание 10' => 'img/adygea_all/adygea_location_10.jpg',
        'Описание 11' => 'img/adygea_all/adygea_location_11.jpg',
        'Описание 12' => 'img/adygea_all/adygea_location_12.jpg',
        'Описание 13' => 'img/adygea_all/adygea_location_13.jpg',
        'Описание 14' => 'img/adygea_all/adygea_location_14.jpg',
        'Описание 15' => 'img/adygea_all/adygea_location_15.jpg',
        'Описание 16' => 'img/adygea_all/adygea_location_16.jpg',
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
    'like_text' => "<p><strong>Наша страна</strong> — это бесконечный калейдоскоп живописных пейзажей, богатой истории и культуры. От величественных гор Кавказа до бескрайних просторов Сибири, от древних городов Золотого кольца до уникальных природных парков — каждый уголок России скрывает свои неповторимые сокровища. Откройте для себя всю красоту и величие нашей необъятной страны вместе с <strong>МирТуризма 46</strong>!</p>",
];
