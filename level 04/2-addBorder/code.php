<?php
function addBorder($picture) {
    $len = strlen($picture[0]) + 2;
    $res = [];
    for ($i = 0; $i < count($picture) + 2; $i++) {
        $s = "";
        for ($j = 0; $j < $len; $j++) {
            if ($i == 0 || $i == count($picture) + 1 || $j == 0 || $j == $len -1) {
                $s .= "*";
            } else {
                $s .= $picture[$i - 1][$j-1];
            }
        }
        $res[$i] = $s;
    }
    return $res;
}
