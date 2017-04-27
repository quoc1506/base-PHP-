<?php
function segmentDeletionSlow($left, $right)
{
    $result = 0;
    for ($i = 0; $i < count($left); $i++) {
        $arr = [];
        for ($j = 0; $j < count($left); $j++) {
            if ($i == $j)
                continue;
            for ($k = $left[$j]; $k <= $right[$j]; $k += 0.5) {
                if (!in_array($k, $arr)) {
                    $arr[] = $k;
                }
            }
        }
        for ($j = $left[$i]; $j <= $right[$i]; $j += 0.5) {
            if (!in_array($j, $arr)) {
                $result++;
                break;
            }
        }
    }
    return $result;
}