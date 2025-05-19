<?php

function atv(array $n)
{  
    $cont = 0;
    foreach($n as $number ){
        $cont += $number;
    }
    return $cont / count($n) >= 60 ? "aproved" : "reproved";
}

$result = atv([60, 60, 50]);
print_r($result);