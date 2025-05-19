<?php

function atv(array $n)
{   
    $pair = 0;
    $odd = 0;
    $negative = 0;
    $positive = 0; 
    for ($i=0; $i < count($n); $i++) { 
        $n[$i] % 2 == 0 ? $pair++ : $odd++;
        $n[$i] >= 0 ? $positive++ : $negative++;
    }
    return ["positives"=>$positive, "negatives"=>$negative, "pairs"=>$pair, "odds"=>$odd];
}

$result = atv([5, 10, -1, 10]);
print_r($result);