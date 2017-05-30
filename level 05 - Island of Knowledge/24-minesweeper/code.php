<?php
function minesweeper($matrix)
{
    $res = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $row = [];
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            $num = 0;
            for ($x = -1; $x <= 1; $x++) {
                for ($y = -1; $y <= 1; $y++) {
                    $r = $i + $x;
                    $c = $j + $y;
                    if ($r !== -1 && $r !== count($matrix) && $c !== -1 && $c !== count($matrix[$i])) {
                        if ($x !== 0 || $y !== 0) {
                            $num += $matrix[$r][$c] ? 1 : 0;
                        }
                    }
                }
            }
            array_push($row, $num);
        }
        array_push($res, $row);
    }
    return $res;
}