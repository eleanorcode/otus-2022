<?php

declare (strict_types = 1);

function addition(float | int $a, float | int $b): float | int
{
    return $a + $b;
}
function subtraction(float | int $a, float | int $b): float | int
{
    return $a - $b;
}
function multiplication(float | int $a, float | int $b): float | int
{
    return $a * $b;
}
function division(float | int $a, float | int $b): float | int
{
    assert($b !== 0, 'Division by zero is not allowed!');

    return $a / $b;
}
