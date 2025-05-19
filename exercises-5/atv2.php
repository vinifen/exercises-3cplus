<?php

function atv(int $n)
{   
    return $n % 2 == 0;
}

$result = atv(9);
print_r($result);