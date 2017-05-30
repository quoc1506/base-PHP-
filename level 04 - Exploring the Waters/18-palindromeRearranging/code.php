<?php
function palindromeRearranging($inputString)
{
    $c = strlen($inputString) % 2;
    for ($i = 0; $i < strlen($inputString); $i++) {
        $notFound = true;
        if ($inputString[$i] !== "@") {
            for ($j = $i + 1; $j < strlen($inputString); $j++) {
                if ($inputString[$i] == $inputString[$j]) {
                    $inputString[$j] = "@";
                    $notFound = false;
                    break;
                }

            }

        } else {
            $notFound = false;
        }
        if ($notFound) {
            if (!$c)
                return false;
            $c--;
        }

    }
    return true;
}