<?php

return [
    'h1' => "Тур в Адыгею ⛰️ из Курска <br> Лучшее путешествие весны",
    'start_price' => "20 000",
    'dey_count' => "3",
    'head_photo' => [
        'Яркие эмоции' => 'img/adygea_all/adygea_location_8.jpg',
        'Потрясающие виды' => 'img/bn_present/2.jpg',
        'Новые впечатления' => 'img/bn_present/3.jpg',
        'Приключения для всех' => 'img/bn_present/4.jpg',
    ],

    'dates_list' => [
            // [
            //     "data" => "&#127799; 6-9 марта",
            //     "comment" => "&#128073; 2 дня в Адыгее",
            // ],
            [
                "data" => "&#127799; 30 апреля - 4 мая",
                "comment" => "&#128073; 3 дня в Адыгее",
            ],
            [
                "data" => "&#127799; 7-11 мая",
                "comment" => "&#128073; 3 дня в Адыгее",
            ],
            [
                "data" => "&#127799; 11-15 июня",
                "comment" => "&#128073; 3 дня в Адыгее",
            ],

    ],

    'program' => [
        // "2 дня в Адыгее" => [
        //     '06.03 — 16:00 выезд из Курска',
        //     '07.03 — Адыгея',
        //     '08.03 — Адыгея',
        //     '09.03 — 12:00 прибытие в Курск',
        // ],

        "Апрель" => [
            '30.04  — 16:00 выезд из Курска',
            '01.05  — Адыгея',
            '02.05  — Адыгея',
            '03.05 — Адыгея',
            '04.05 — 12:00 прибытие в Курск',
        ],

        "Май" => [
            '7.05 — 16:00 выезд из Курска',
            '8.05 — Адыгея',
            '9.05 — Адыгея',
            '10.05 — Адыгея',
            '11.05 — 12:00 прибытие в Курск',
        ],

        "Июнь" => [
            '11.06 — 16:00 выезд из Курска',
            '12.06 — Адыгея',
            '13.06 — Адыгея',
            '14.06 — Адыгея',
            '15.05 — 12:00 прибытие в Курск',
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
        'Древние Азишские пещеры' => 'img/adygea_all/adygea_location_1.jpg',
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

        ["price" => 21000, "comment" => "30 апреля - 4 мая. Взрослые."],
        ["price" => 20000 , "comment" => "30 апреля - 4 мая. Дети до 16 лет."],

        ["price" => 21000, "comment" => "7-11 мая. Взрослые."],
        ["price" => 20000 , "comment" => "7-11 мая. Дети до 16 лет."],

    ],

    'prices_dat' => [

        "30 апреля - 4 мая" => [

            ['type' => 'Взрослые', 'price' => 21000],
            ['type' => 'Дети до 16 лет.', 'price' => 20000],
            ['type' => '1-местное размещение', 'price' => 24000],
        ],

        "7-11 мая" => [

            ['type' => 'Взрослые', 'price' => 21000],
            ['type' => 'Дети до 16 лет.', 'price' => 20000],
            ['type' => '1-местное размещение', 'price' => 24000],
        ],


        "11 - 15 июня" => [

            ['type' => 'Взрослые', 'price' => 21000],
            ['type' => 'Дети до 16 лет.', 'price' => 20000],
            ['type' => '1-местное размещение', 'price' => 24000],
        ]
    ],

    'in_price' => file_get_contents(public_path('lend_text/in_price.html')),
    'dop_price' => file_get_contents(public_path('lend_text/dop_price.html')),
    'like_text' => "<p><strong>Адыгея</strong> — это бесконечный калейдоскоп живописных пейзажей, богатой истории и культуры. Откройте для себя всю красоту и величие потрясающей Адыгеи вместе с <strong>МирТуризма 46</strong>!</p>",
];
