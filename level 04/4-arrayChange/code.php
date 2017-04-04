<?php
function arrayChange($inputArray) {
    $res = 0;
    for ($i = 1; $i < count($inputArray); $i++) {
        if ($inputArray[$i] <= $inputArray[$i-1]) {
            $t = $inputArray[$i-1] - $inputArray[$i] + 1;
            $res += $t;
            $inputArray[$i] += $t;
        }
    }
    return $res;
}
