<?php

function atv(array $n)
{   
    $result = [];
    for ($i=count($n) - 1; 0 <= $i; $i--) { 
       array_push($result, $n[$i]);
    }
    return $result;
}

$result = atv([7, 8, 10, 20, 90, 73, 1, 2, 3, 4]);
print_r($result);