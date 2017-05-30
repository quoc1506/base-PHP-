<?php
function digitDegree($n) {
    $t = 0;
    while ($n >= 10) {
        $m = $n;
        if ($m < 10) {
            break;
        }
        $t++;
        $n = 0;
        while ($m / 10 > 0) {
            $n += $m % 10;
            $m = intval($m / 10);
        }
    }
    return $t;
}
