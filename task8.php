<?php

$arr = [
    'Московская область' => [
        'Москва', 'Зеленоград', 'Клин',
    ],
    'Ленинградская область' => [
        'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт',
    ],
    'Тверская область' => [
        'Ржев', 'Конаково', 'Бологое', 'Кимры', 'Вышний Волочёк',
    ],
];

foreach ($arr as $key => $val) {
    echo $key . ':' . PHP_EOL;
    $sorted_arr = [];
    foreach ($val as $value) {
        if (strpos($value, 'К') === 0) {
            array_push($sorted_arr, $value);
        }
    }
    echo implode(', ', $sorted_arr) . PHP_EOL;
}
