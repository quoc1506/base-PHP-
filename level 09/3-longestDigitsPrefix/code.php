<?php
function longestDigitsPrefix($inputString) {
    $sum = "";
    for ($i = 0; $i < strlen($inputString); $i++) {
        if (is_numeric($inputString[$i]))
            $sum .= $inputString[$i];
        else
            return $sum;
    }
    return $inputString;

}
