<?php

declare (strict_types = 1);

function translitReplaceSpaces(string $text): string
{
    $alfavit = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'ye', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'tch', 'ь' => '`', 'ы' => 'y', 'ъ' => '"', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'Ye', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Tch', 'Ь' => '`', 'Ы' => 'Y', 'Ъ' => '"', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya'];

    $new_text = str_replace(' ', '_', $text);

    $text_arr = mb_str_split($new_text);

    $text_translit = '';
    foreach ($text_arr as $val) {
        $text_translit .= (isset($alfavit[$val])) ? $alfavit[$val] : $val;
    }
    return $text_translit;
}
