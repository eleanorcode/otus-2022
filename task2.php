<?php
declare (strict_types = 1);

require 'task1.php';

function mathOperation(float | int $arg1, float | int $arg2, string $operation): float | int
{
    $result = match($operation) {
        'addition' => addition($arg1, $arg2),
        'subtraction' => subtraction($arg1, $arg2),
        'multiplication' => multiplication($arg1, $arg2),
        'division' => division($arg1, $arg2),
    };
    return $result;
}
