<?php
function maximalSquare($matrix)
{
    // http://www.geeksforgeeks.org/maximum-size-sub-matrix-with-all-1s-in-a-binary-matrix/
    $S = [];
    for ($i = 0; $i < count($matrix); $i++) {
        $S[$i][0] = $matrix[$i][0];
    }
    for ($j = 0; $j < count($matrix[0]); $j++)
        $S[0][$j] = $matrix[0][$j];
    for ($i = 1; $i < count($matrix); $i++) {
        for ($j = 1; $j < count($matrix[0]); $j++) {
            if ($matrix[$i][$j] == 1)
                $S[$i][$j] = min($S[$i][$j - 1], $S[$i - 1][$j], $S[$i - 1][$j - 1]) + 1;
            else
                $S[$i][$j] = 0;
        }
    }
    $max_of_s = $S[0][0];
    $max_i = 0;
    $max_j = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[0]); $j++) {
            if ($max_of_s < $S[$i][$j]) {
                $max_of_s = $S[$i][$j];
                $max_i = $i;
                $max_j = $j;
            }
        }
    }
    return $max_of_s * $max_of_s;
    //
    for ($i = $max_i; $i > $max_i - $max_of_s; $i--) {
        for ($j = $max_j; $j > $max_j - $max_of_s; $j--) {
            printf("%d ", $matrix[$i][$j]);
        }
        printf("\n");
    }
}
