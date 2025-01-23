@extends('layouts.all')

@php
    $title = "Тур в Адыгею из Курска - МирТуризма 46";
    $description = "Тур в Адыгею из Курска на комфортабельном автобусе - МирТуризма 46";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="banner_video">
        <video autoplay muted loop class="_video">
            <source src="{{ asset('img/video_bg_2.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text tour_page_title">
            <div class="bnr_text">
                <h1>{!! config('lend_data.h1') !!}</h1>

                <p class="label label_gold">от {{ config('lend_data.start_price') }} ₽</p>

                <p class="label label_white">от {{ config('lend_data.dey_count') }} дней</p>


                <div class=toyr_program>

                    <tap :header="{{ json_encode(["06.03.2025", "07.05.2025"]) }}">
                        <template v-slot:body1>
                                @foreach ( config('lend_data.program')['06.03.2025'] as $step)
                                    <div class="step">
                                        <div class="point"></div>
                                        <span>{{$step}}</span>
                                    </div>
                                @endforeach
                                <div class="line"></div>
                        </template>
                        <template v-slot:body2>
                            @foreach ( config('lend_data.program')['07.05.2025'] as $step)
                                    <div class="step">
                                        <div class="point"></div>
                                        <span>{{$step}}</span>
                                    </div>
                            @endforeach

                            <div class="line"></div>
                        </template>
                    </tap>


                </div>


                <a class="button yakor" href="#program">Программа тура</a>
            </div>

            <div class="dop_param page_top_galery">
                @foreach (config('lend_data.head_photo') as $key => $item)
                    <x-palaroid :url="asset($item)" :title="$key"></x-palaroid>
                @endforeach
            </div>
        </div>
    </section>

    <section id="about" class="about_section">
        <div class="container">
            <div class="about">
                <div class="photo">
                    <div class="col">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp.webp') }}" alt="">
                        </div>
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp1.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col">
                        <div class="photo_wrap photo_smile">
                            <img src="{{ asset('img/dp/dp2.webp') }}" alt="">
                        </div>

                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp3.webp') }}" alt="">
                        </div>
                    </div>

                    <div class="col col_one">
                        <div class="photo_wrap photo_big">
                            <img src="{{ asset('img/dp/dp4.webp') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="text">
                    <div class="inner">
                        <h2>{!! config('lend_data.priv_head') !!}</h2>
                        <p>
                            {!! config('lend_data.priv_text') !!}
                        </p>
                        <x-persons></x-persons>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="location_section">
        <div class="container">
            <h2>{!! config('lend_data.location_header') !!}</h2>
            <x-moments></x-moments>
        </div>
    </section>

    <section id="program" class="program_section central_section">
        <div class="container">
            <h2>Ознакомьтесь с<br>программой тура в Адыгею</h2>
            <x-program></x-program>
        </div>
    </section>


    <section id="philosophy" class="program_section central_section">
        <div class="container">
            <x-philosophy></x-philosophy>
        </div>
    </section>


    <section id="in_tur" class="in_tur">
        <div class="container text_styles">
            <div class="wrapper" id="price_app">
                <h2>Даты туров:</h2>
                <ul>
                    @foreach (config('lend_data.dates_list') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>


                @if (config('lend_data.in_price') )
                    <h2>В цену тура входит:</h2>
                    {!! config('lend_data.in_price') !!}
                @endif

                @if ( config('lend_data.dop_price')  )
                    <h2>За дополнительную плату:</h2>
                    {!! config('lend_data.dop_price') !!}
                @endif



                <h2>Купить тур:</h2>
                <div class="pay_wrapper">
                    <tour-price title="Кремлевская ёлка 2025" img="{{asset('img/bn_present/4.jpg')}}"  :prices="{{json_encode(config('lend_data.prices'))}}"></tour-price>
                </div>

            </div>

        </div>
    </section>

    <section id="contacts" section="contacts_section">
        <div class="container">
            <div class="contacts_blk">
                <x-map.map-in-page></x-map.map-in-page>
                <div class="text">
                    <h2>Свяжитесь с нами любым удобным способом:</h2>
                    <a class="phone" href="tel:+7{{ phone_format(config('contacts.phone')) }}">{{ config('contacts.phone') }}</a>
                    <a class="email" href="mailto:{{ phone_format(config('contacts.email')) }}">{{ config('contacts.email') }}</a>
                    <p>{{ config('contacts.adress') }}</p>

                    <x-social-net></x-social-net>
                </div>
            </div>
        </div>
    </section>

@endsection

