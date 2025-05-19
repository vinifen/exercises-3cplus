<?php

function atv(string $sex, int $height)
{   
    if($sex == "woman") return (72.7 * $height) - 58;
    if($sex == "man") return (62.1 * $height) - 44.7;
    return 0;
}

$result = atv("man", 1.90);
print_r($result);