<?php

function atv(int $base, int $height)
{
    $result = ($base * $height) / 2;
    return $result;
}

$result = atv(10, 3);
print_r($result);