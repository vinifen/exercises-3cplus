<?php

function atv(int $n)
{
    $result = ($n * 0.1) + $n;
    return $result;
}

$result = atv(10);
print_r($result);