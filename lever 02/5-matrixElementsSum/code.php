<?php
function matrixElementsSum($matrix)
{
    $sum = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] > 0 && ($i == 0 || $matrix[$i - 1][$j] != 0)) {
                $sum += $matrix[$i][$j];
            } else {
                $matrix[$i][$j] = 0;
            }
        }
    }
    return $sum;
}
