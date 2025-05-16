<?php

function atv7(int $base, int $height)
{
    $result = ($base * $height) / 2;
    return $result;
}

$result = atv7(10, 3);
print_r($result);