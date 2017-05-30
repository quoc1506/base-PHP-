<?php
function arrayMaxConsecutiveSum($inputArray, $k) {
    $sum = $inputArray[0];
    for ($i = 1; $i < $k; $i++) {
        $sum += $inputArray[$i];
    }
    $max = $sum;
    for ($i = 1; $i < count($inputArray); $i++) {
        $sum -= $inputArray[$i-1];
        if ($i + $k - 1< count($inputArray)) {
            $sum += $inputArray[$i+$k - 1];
        }
        if ($max < $sum)
            $max = $sum;
    }
    return $max;
}
