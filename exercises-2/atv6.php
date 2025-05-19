<?php

function atv(int $n1, int $n2)
{  
    if($n1 == $n2) return $n1;
    if($n1 > $n2) return $n1;
    return $n2;
}

$result = atv(30, 30);
print_r($result);