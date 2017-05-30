<?php
function absoluteValuesSumMinimization($a) {
    $min = 999999999;
    $res = 0;
    for($i=0;$i<count($a); $i++) {
        $t = smallest($a, $a[$i]);
        if ($t < $min) {
            $min = $t;
            $res = $a[$i];
        }
    }
    return $res;
}
function smallest($a, $x) {
    $t = 0;
    for ($i = 0; $i < count($a); $i++) {
        $t += abs($a[$i] - $x);
    }
    return $t;
}
