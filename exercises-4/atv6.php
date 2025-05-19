<?php

function atv(array $n1, array $n2)
{   
    $multiplication = [];

    if (count($n1) != count($n2)) return 0;

    for ($i = 0; $i < count($n2); $i++) { 
        $multi = $n1[$i] * $n2[$i];
        $result = "position: $i - {$n1[$i]} X {$n2[$i]} = $multi";
        array_push($multiplication, $result);
    }

    return $multiplication;
}

$result = atv(
    [10, 20, 90, 73, 8, 21, 13, 56, 23, 9, 12], 
    [7, 8, 10, 20, 90, 73, 1, 2, 3, 4, 10]
);

print_r($result);
