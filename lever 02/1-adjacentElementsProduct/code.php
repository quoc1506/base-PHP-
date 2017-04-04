<?php
function adjacentElementsProduct($inputArray) {
    $i = $inputArray[0];
    $j = $inputArray[1];
    $p = $i * $j;
    for ($k = 1; $k < count($inputArray) - 1 ; $k++) {
        if ($inputArray[$k] * $inputArray[$k+1] > $p) {
            $p = $inputArray[$k] * $inputArray[$k+1];
        }
    }
    return $p;
}
