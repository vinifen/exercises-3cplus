<?php

function atv(int $n)
{  
    if($n > 10) return $n . " > " . 10;
    if($n < 10 )return $n . " < " . 10;
    return $n . " = " . 10;
}

$result = atv(11);
print_r($result);