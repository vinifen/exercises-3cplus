<?php

function atv(int $n)
{  
    $price = 1.30;
    if($n > 12){
        $price = 1;
    }
    $result = $price * $n;
    return $result;
}

$result = atv(20);
print_r($result);