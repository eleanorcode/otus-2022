<?php

declare (strict_types = 1);

function power(float | int $val, int $pow): float | int
{
    if ($pow === 0) {
        return 1;
    } elseif ($pow === 1) {
        return $val;
    }
    return $val * power($val, $pow - 1);
}
