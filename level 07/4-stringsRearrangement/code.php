<?php
function stringsRearrangement($inputArray)
{
    for ($i = 0; $i < count($inputArray); $i++) {
        if (check($inputArray, $i))
            return true;
    }
    return false;
}

function check($inputArray, $i)
{
    $cur = $inputArray[$i];
    array_splice($inputArray, $i, 1);
    if (count($inputArray) === 1) {
        if (isValid($cur, $inputArray[0]))
            return true;
        return false;
    }
    while (count($inputArray) > 1) {
        echo '<pre>';
        echo $cur;
        print_r($inputArray);
        $flag = 1;
        for ($j = count($inputArray) - 1; $j >= 0; $j--) {
            if (isValid($cur, $inputArray[$j])) {
                $cur = $inputArray[$j];
                array_splice($inputArray, $j, 1);
                $flag = 0;
                break;
            }
        }
        if ($flag)
            return false;
    }
    if (isValid($cur, $inputArray[0]))
        return true;
    return false;
}

function isValid ($s1, $s2) {
    $time = 0;
    for ($i = 0; $i < strlen($s1); $i++) {
        if ($s1[$i] !== $s2[$i]) {
            if ($time)
                return false;
            $time = 1;
        }
    }
    return $time == 1;
}