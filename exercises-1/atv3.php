<?php
function atv(array $numbers, array $weights )
{   
    if(count($numbers) != count($weights)){
        return null;
    }
    $result1 = 0;
    $result2 = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result1 = $result1 + ($numbers[$i] * $weights[$i]);
        $result2 = $result2 + $weights[$i]; 
    }
    $result = $result2 % $result1;
    
    return $result; 
}

$result = atv([12, 12], [12, 12]);
print_r($result);