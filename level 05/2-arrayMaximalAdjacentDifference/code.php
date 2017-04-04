<?php
function arrayMaximalAdjacentDifference($inputArray) {
    $max = -1;
    for ($i = 0; $i < count($inputArray) - 1; $i++) {
        $t = $inputArray[$i] - $inputArray[$i+1];
        if ($t < 0)
            $t = -$t;
        if ($t > $max)
            $max = $t;
    }
    return $max;
}
