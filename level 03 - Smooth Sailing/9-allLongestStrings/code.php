<?php
function allLongestStrings($inputArray)
{
    $max = count($inputArray[0]);
    for ($i = 1; $i < count($inputArray); $i++) {
        if (strlen($inputArray[$i]) > $max) {
            $max = strlen($inputArray[$i]);
        }
    }
    $res = [];
    for ($i = 0; $i < count($inputArray); $i++) {
        if (strlen($inputArray[$i]) == $max) {
            array_push($res, $inputArray[$i]);
        }
    }
    return $res;

}
