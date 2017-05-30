<?php
function sudoku($grid) {
    for ($i = 0; $i < 9; $i++) {
        $a = [];
        $t1 = 0;
        for ($j = 0; $j < 9; $j++) {
            $t2 = ($j + 1) % 3;
            $a[$t1][$t2] = $grid[$i][$j];
            if ($t2 == 0) {
                $t1++;
            }
        }
        if (!checkMatrix($a))
            return false;
    }
    for ($j = 0; $j < 9; $j++) {
        $a = [];
        $t1 = 0;
        for ($i = 0; $i < 9; $i++) {
            $t2 = ($i + 1) % 3;
            $a[$t1][$t2] = $grid[$i][$j];
            if ($t2 == 0)
                $t1++;
        }
        if (!checkMatrix($a))
            return false;
    }
    for ($k1 = 0; $k1 < 9; $k1 += 3) {
        for ($k2 = 0; $k2 < 9; $k2 += 3) {
            $a = [];
            $t1 = 0;
            for ($i = $k1; $i < $k1+3; $i++) {
                $t2 = 0;
                for ($j = $k2; $j < $k2 +3; $j++) {
                    $a[$t1][$t2++] = $grid[$i][$j];
                }
                $t1++;
            }
            if (!checkMatrix($a))
                return false;
        }
    }
    return true;
}
function checkMatrix($a) {
    $arr = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $n = $a[$i][$j];
            if ($n < 0 || $n > 9 || in_array($n, $arr)) {
                return false;
            }
            array_push($arr, $n);
        }
    }
    return true;
}
