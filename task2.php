<?php

$var = 0;

do {
    if ($var === 0) {
        echo $var . " – это ноль." . PHP_EOL;
    } elseif ($var % 2 === 0) {
        echo $var . " – четное число." . PHP_EOL;
    } else {
        echo $var . " – нечетное число." . PHP_EOL;
    }
    $var += 1;

} while ($var <= 10);
