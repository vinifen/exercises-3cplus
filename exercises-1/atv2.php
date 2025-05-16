<?php

function atv2(int $dividend, int $divider)
{
    $quotient = $dividend / $divider;
    $rest = $dividend % $divider;
    return ["quotient" => $quotient, "rest" => $rest];
}

$result = atv2(10, 3);
print_r($result);