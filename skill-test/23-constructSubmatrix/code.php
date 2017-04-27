<?php
function constructSubmatrix($matrix, $rowsToDelete, $columnsToDelete)
{
    $res = [];
    $k1 = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        if (in_array($i, $rowsToDelete))
            continue;
        $k2 = 0;
        for ($j = 0; $j < count($matrix[0]); $j++) {
            if (in_array($j, $columnsToDelete)) {
                continue;
            }
            $res[$k1][$k2++] = $matrix[$i][$j];
        }
        $k1++;
    }
    return $res;
}
