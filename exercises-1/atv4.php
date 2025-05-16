<?php

function atv4(int $n)
{
    $result = ($n * 0.1) + $n;
    return $result;
}

$result = atv4(10);
print_r($result);