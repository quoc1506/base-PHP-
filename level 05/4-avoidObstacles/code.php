<?php
function avoidObstacles($inputArray) {
    $min = $inputArray[0];
    $max = $inputArray[1];
    for ($i = 1; $i< count($inputArray); $i++) {
        if ($inputArray[$i] > $max)
            $max = $inputArray[$i];
        if ($inputArray[$i] < $min)
            $min = $inputArray[$i];
    }

    for ($i = 2; $i < $max; $i++) {
        $valid = true;
        $cur = $i;
        while (1) {
            if (array_search($cur, $inputArray) !== false) {
                $valid = false;
                break;
            }
            $cur += $i;
            if ($cur > $max) {
                break;
            }
        }
        if ($valid)
            return $i;

    }
    return $max + 1;
}