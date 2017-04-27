<?php
function numberGuessingNaive($n)
{
    # https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/numberGuessingNaive.js
    $pay = [0, 0];
    for ($i = 2; $i <= $n; $i++) {
        $pay[count($pay)] = $i;
        for ($m = 1; $m < $i; $m++) {
            $pay[$i] = min($pay[$i], max(1 + $pay[$m], 2 + $pay[$i - $m]));
        }
    }
    return $pay[$n];
}