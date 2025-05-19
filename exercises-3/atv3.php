<?php

function atv(array $n)
{  
    $sum = 0;
    $count = 0;
    for ($i=0; $i < count($n); $i++) { 
        $count += 1;
        $sum += $n[$i];
        if($n[$i + 1] == 0) $i = count($n);
    }
    $anv = $sum / $count;
    return ["average"=>$anv, "sum"=>$sum, "count" => $count];
}

$result = atv([10, 10, 10, 10, 10, 0, 10, 10, 10, 10]);
print_r($result);