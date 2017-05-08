<?php
function firstDigit($inputString) {
    for($i= 0; $i< strlen($inputString); $i++) {
        if (is_numeric($inputString[$i])) {
            return $inputString[$i];
        }
    }
    return "";
}
