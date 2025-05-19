<?php

function atv(int $min, int $max)
{   
    $result = 0;
    for ($i= $min + 1; $i < $max; $i++) { 
        $result += $i;
    }
    return $result;
}

$result = atv(1, 5);
print_r($result);