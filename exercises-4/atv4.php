<?php

function atv(array $n, int $n2)
{   
    $result = [];
    for ($i=0; $i < count($n); $i++) { 
       array_push($result, $n[$i] * $n2);
    }
    return $result;
}

$result = atv([7, 8, 10, 20, 90, 73, 1, 2, 3, 4], 10);
print_r($result);