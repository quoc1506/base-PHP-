<?php
function extractEachKth($inputArray, $k) {
    $i = 1;
    $index = 0;
    while($k <= count($inputArray) - 1) {
        $k = $k * $i - 1 + $index;
        $index++;
        $i++;
        array_splice($inputArray, $k, 1);
    }
    return $inputArray;
}
