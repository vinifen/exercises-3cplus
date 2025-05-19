<?php

function atv(int $n)
{  
    $cont = [];
    for ($i=1; $i < 11; $i++) { 
        array_push($cont, $i);
    }
    return $cont;
}

$result = atv(7);
print_r($result);