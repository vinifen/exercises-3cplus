<?php

function atv(array $n)
{  
    $sum = 0;
    for ($i=0; $i < 10; $i++) { 
        $sum += $n[$i];
    }
    $anv = $sum / count($n);
    return ["average"=>$anv, "sum"=>$sum];
}

$result = atv([10, 10, 10, 10, 10, 10, 10, 10, 10, 10]);
print_r($result);