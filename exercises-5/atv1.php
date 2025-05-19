<?php

function atv(int $n)
{   
    return $n % 4 == 0;
}

$result = atv(8);
print_r($result);