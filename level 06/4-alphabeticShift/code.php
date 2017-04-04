<?php
function alphabeticShift($inputString)
{
    for ($i = 0; $i < strlen($inputString); $i++) {
        $s = $inputString[$i];
        $temp = ++$s;
        if (strlen($temp) > 1) {
            $inputString[$i] = 'a';
        } else {
            $inputString[$i] = $temp;
        }
    }
    return $inputString;
}
