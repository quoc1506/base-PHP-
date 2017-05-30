<?php
function isLucky($n) {
    $sum = 0;
    $len = strlen($n);
    for ($i = 0; $i < $len; $i++) {
        if ($i >= $len / 2) {
            $sum += $n%10;
        } else {
            $sum -= $n%10;
        }
        $n = intval($n/10);
    }
    return $sum == 0;
}