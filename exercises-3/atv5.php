<?php

function atv(array $n)
{  
    $min = $n[0];
    $max = 0;
    for ($i=0; $i < count($n); $i++) { 
        if($n[$i] > $max){
            $max = $n[$i];
        }
        if($n[$i] < $min && $n[$i] != 0){
            echo $n[$i];
            $min = $n[$i];
        }
        if($n[$i + 1] == 0) $i = count($n);
    }
    return ["min"=>$min, "max"=>$max];
}

$result = atv([2, 1 , 0]);
print_r($result);