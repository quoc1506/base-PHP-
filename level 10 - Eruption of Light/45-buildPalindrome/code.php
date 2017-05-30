<?php
function buildPalindrome($st)
{
    $s = $st;
    while (!checkPalindrome($s)) {
        $i = 0;
        while ($s[$i] !== $s[strlen($s) - 1]) {
            $i++;
        }
        $s .= $s[$i - 1];
    }
    return $s;
}

function checkPalindrome($inputString)
{
    $len = strlen($inputString);
    for ($i = 0; $i < intval($len / 2); $i++) {
        if ($inputString[$i] !== $inputString[$len - $i - 1]) {
            return false;
        }
    }
    return true;
}