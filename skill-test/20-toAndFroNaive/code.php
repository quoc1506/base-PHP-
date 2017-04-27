<?php
function toAndFroNaive($a, $b, $t)
{
    # https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/toAndFroNaive.js
    $position = $a;
    if ($a < $b) {
        $dx = 1;
    } else {
        $dx = -1;
    }
    for ($i = 0; $i < $t; $i++) {
        $position += $dx;
        if ($position === $a || $position === $b) {
            $dx = -$dx;
        }
    }
    return $position;
}