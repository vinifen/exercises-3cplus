<?php

function atv(int $minPay, int $kw)
{
    $cust100Kw = $minPay / 7;
    $eachKwCust = $cust100Kw / 100;
    $result = ($kw / 100) * $cust100Kw;
    $withDescont = $result - ($result * 0.1);
    return ["each"=>$eachKwCust, "result"=> $result, "result_descont"=> $withDescont];
}

$result = atv(1500, 50);
print_r($result);