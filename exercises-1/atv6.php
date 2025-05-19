<?php

function atv(int $base, int $height)
{
    $perimeter = ($base * 2) + ($height * 2);
    $area = $base * $height;
    $diagonal = sqrt(($base * $base) + ($height * $height));
    return ["perimeter"=>$perimeter,"area" => $area,"diagonal"=>$diagonal];
}

$result = atv(100, 10);
print_r($result);