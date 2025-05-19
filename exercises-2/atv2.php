<?php

function atv(int $n)
{  
    if($n >= 0) return $n . " is positive.";
    return $n . " is negative.";
}

$result = atv(0);
print_r($result);