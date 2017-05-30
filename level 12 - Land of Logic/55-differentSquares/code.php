<?php
function differentSquares($matrix) {
    if (count($matrix) === 1) {
        return 0;
    }
    if (count($matrix) === 2) {
        return 1;
    }
    $arr = [];
    for ($i = 0; $i < count($matrix)-1; $i++) {
        for ($j = 0; $j < count($matrix[$i]) - 1; $j++) {
            $s = ""+ $matrix[$i][$j] . $matrix[$i+1][$j]. $matrix[$i][$j+1] . $matrix[$i+1][$j+1];
            $arr[] = $s;
        }
    }
    $res = array_unique($arr);
    return count($res);
}

