<?php

function atv(array $n)
{   
    $result = [];
    $max = 0;
    $maxPosition = 0;
    for ($i=1; $i <= count($n); $i++) { 
        if($n[$i] < 0) return "negative no unauthorized";
        if($n[$i] > $max){
            $max = $n[$i];
            $maxPosition = $i + 1;
        }
    }
    return ["max"=>$max, "max_position"=> $maxPosition];
}

$result = atv([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
print_r($result);