<?php
function chessKnight($cell) {
    $pos = [[1, 2],
        [2, 1],
        [2, -1],
        [1, -2],
        [-1, -2],
        [-2, -1],
        [-2, 1],
        [-1, 2]];
    $i = ord($cell[0]) - 97;
    $j = $cell[1]-1;
    $c = 0;
    for ($k = 0; $k < count($pos); $k++) {
        $k1 = $i + $pos[$k][0];
        $k2 = $j + $pos[$k][1];
        if ($k1 < 0 || $k1 > 7 || $k2  < 0 || $k2 > 7)
            continue;
        $c++;
    }
    return $c;
}
