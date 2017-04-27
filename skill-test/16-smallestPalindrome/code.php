<?php
function smallestPalindrome($s0)
{

    $i = intval(strlen($s0) / 2);
    while ($i < strlen($s0) && $s0[$i] == $s0[strlen($s0) - $i - 1]) {
        $i++;
    }
    if ($i == strlen($s0)) {
        return $s0;
    }
    if ($s0[$i] < $s0[strlen($s0) - $i - 1]) {
        while ($i < strlen($s0)) {
            $s0[$i] = $s0[strlen($s0) - $i - 1];
            $i++;
        }
        return $s0;
    } else {
        $i = intval((strlen($s0) - 1) / 2);
        while ($s0[$i] == 'z') {
            $i--;
        }
        $c = $s0[$i];
        ++$c;
        $s0[$i] = $c;
        $i++;
        while (2 * $i < strlen($s0)) {
            $s0[$i] = 'a';
            $i++;
        }
        while ($i < strlen($s0)) {
            $s0[$i] = $s0[strlen($s0) - $i - 1];
            $i++;
        }
        return $s0;
    }
}