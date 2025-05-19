<?php

function atv(int $start, int $end)
{  
    $sum = 0;
    $count = 0;
    if ($start + 1 == $end) return 0;
    for ($i=$start + 1; $i < $end; $i++) { 
        $count += 1;
        $sum += $i;
    }
    $anv = $sum / $count;
    return ["average"=>$anv, "sum"=>$sum, "count" => $count];
}

$result = atv(5, 8);
print_r($result);