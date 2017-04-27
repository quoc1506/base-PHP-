<?php
function digitRootSort($a)
{
    for ($i = 0; $i < count($a) - 1; $i++) {
        for ($j = $i + 1; $j < count($a); $j++) {
            $t1 = digitRoot($a[$i]);
            $t2 = digitRoot($a[$j]);
            if ($t2 < $t1 || ($t2 === $t1 && $a[$j] < $a[$i])) {
                swap($a[$j], $a[$i]);
            }
        }
    }
    return $a;
}

function swap(&$a, &$b) {
    $t = $a;
    $a = $b;
    $b = $t;
}
function digitRoot($n) {
    $m = 0;
    while($n > 0) {
        $m += $n %10;
        $n = intval($n / 10);
    }
    return $m;
}
