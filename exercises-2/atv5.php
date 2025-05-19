<?php

function atv(int $bYear)
{
    $currentYear = 2025;
    $old = $currentYear - $bYear;
    $isVote = "Is not able to vote";
    if($old >= 18) $isVote = "Is able to vote";
    return ["is_vote"=>$isVote, "old" => $old];
}

$result = atv(2007);
print_r($result);