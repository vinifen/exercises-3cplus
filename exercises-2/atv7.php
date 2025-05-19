<?php

function atv(int $n)
{  
    if($n < 5) return "Not able";
    if($n >= 18) return "Senior";
    if($n >= 14) return "Youthful B";
    if($n >= 11) return "Youthful A";
    if($n >= 8) return "Childish B";
    return "Childish A";
}

$result = atv(7);
print_r($result);