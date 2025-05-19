<?php

function atv(int $dmin, int $dmax)
{
    $result = ($dmin * $dmax) / 2;
    return $result;
}

$result = atv(10, 3);
print_r($result);