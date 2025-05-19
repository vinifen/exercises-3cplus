<?php

function atv(int $multiples, int $lenght)
{   
    $result = [];
    for ($i=1; $i <= $lenght; $i++) { 
        array_push($result, $i * $multiples);
    }
    return $result;
}

$result = atv(5, 10);
print_r($result);