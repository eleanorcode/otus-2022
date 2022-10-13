<?php

declare (strict_types = 1);

date_default_timezone_set('Europe/Moscow');

function printTime(): string
{
    $hours = (int) date('H');
    $minutes = (int) date('i');
    $hours_ru = match($hours) {
        1, 21 => 'час',
        2, 3, 4, 22, 23 => 'часа',
    default=> 'часов'
    };
    $minutes_ru = match($minutes) {
        1, 21, 31, 41, 51 => 'минутa',
        2, 3, 4, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54 => 'минуты',
    default=> 'минут'
    };

    return "$hours $hours_ru $minutes $minutes_ru";
}
