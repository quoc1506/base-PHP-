<?php
function countVisibleTowerPairs($position, $height)
{
    #https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/countVisibleTowerPairs.js
    $result = 0;
    for ($i = 0; $i < count($position) - 1; $i++) {
        for ($j = $i; $j < count($position); $j++) {
            if ($position[$i] > $position[$j]) {
                swapArr($position, $i, $j);
                swapArr($height, $i, $j);
            }
        }
    }
    for ($i = 0; $i < count($position); $i++) {
        for ($j = $i + 1; $j < count($position); $j++) {
            $visible = true;
            $A = $height[$j] - $height[$i];
            $B = $position[$j] - $position[$i];
            $C = $A / $B;
            for ($k = $i + 1; $k < $j; $k++) {
                if ($height[$k] > $height[$i] + $C * ($position[$k] - $position[$i])) {
                    $visible = false;
                    break;
                }
            }
            if ($visible) {
                $result++;
            }
        }
    }
    return $result;
}

function swapArr(&$A, $i, $j)
{
    $A[$i] += $A[$j];
    $A[$j] = $A[$i] - $A[$j];
    $A[$i] -= $A[$j];
}
