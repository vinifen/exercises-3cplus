<?php

function atv(int $a, int $b, int $c)
{   
    $result = 0;
    for ($i = $b; $i <= $c; $i++) { 
        if($i % $a == 0){
            $result += $i; 
        }
    }
    return $result;
}

$result = atv(2 ,5, 10);
print_r($result);