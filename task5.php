<?php

declare (strict_types = 1);

function replaceSpaces(string $text): string
{
    $new_text = str_replace(' ', '_', $text);

    return $new_text;
}
