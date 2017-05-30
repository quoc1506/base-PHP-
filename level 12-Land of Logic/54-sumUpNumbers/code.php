<?php
function sumUpNumbers($inputString)
{
    $s = 0;
    $tempN = 0;
    for ($i = 0; $i < strlen($inputString); $i++) {
        $n = $inputString[$i];
        if (ctype_digit($inputString[$i])) {
            $tempN *= 10;
            $tempN += $n;
        } else {
            $s += $tempN;
            $tempN = 0;
        }
    }
    if ($tempN !== 0)
        $s += $tempN;
    return $s;
}
