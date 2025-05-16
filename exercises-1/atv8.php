<?php

function atv8(int $dmin, int $dmax)
{
    $result = ($dmin * $dmax) / 2;
    return $result;
}

$result = atv8(10, 3);
print_r($result);