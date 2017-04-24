<?php
function booleanParenthesization($expression)
{
    $symb = "";
    $oper = "";
    for ($i = 0; $i < strlen($expression); $i++) {
        $item = $expression[$i];
        if ($item == "F" || $item == "T")
            $symb .= $item;
        else
            $oper .= $item;
    }
    $res = countParenth($symb, $oper);
    return $res;
}

function countParenth($symb, $oper)
{
    // http://www.geeksforgeeks.org/dynamic-programming-set-37-boolean-parenthesization-problem/
    $n = strlen($symb);
    $F = [];
    $T = [];
    // Fill diaginal entries first
    // All diagonal entries in T[i][i] are 1 if symbol[i]
    // is T (true).  Similarly, all F[i][i] entries are 1 if
    // symbol[i] is F (False)
    for ($i = 0; $i < $n; $i++) {
        $F[$i][$i] = ($symb[$i] == 'F') ? 1 : 0;
        $T[$i][$i] = ($symb[$i] == 'T') ? 1 : 0;
    }

    // Now fill T[i][i+1], T[i][i+2], T[i][i+3]... in order
    // And F[i][i+1], F[i][i+2], F[i][i+3]... in order
    for ($gap = 1; $gap < $n; ++$gap) {
        for ($i = 0, $j = $gap; $j < $n; ++$i, ++$j) {
            $T[$i][$j] = $F[$i][$j] = 0;
            for ($g = 0; $g < $gap; $g++) {
                // Find place of parenthesization using current value
                // of gap
                $k = $i + $g;

                // Store Total[i][k] and Total[k+1][j]
                $tik = $T[$i][$k] + $F[$i][$k];
                $tkj = $T[$k + 1][$j] + $F[$k + 1][$j];

                // Follow the recursive formulas according to the current
                // operator
                if ($oper[$k] == '&') {
                    $T[$i][$j] += $T[$i][$k] * $T[$k + 1][$j];
                    $F[$i][$j] += ($tik * $tkj - $T[$i][$k] * $T[$k + 1][$j]);
                }
                if ($oper[$k] == '|') {
                    $F[$i][$j] += $F[$i][$k] * $F[$k + 1][$j];
                    $T[$i][$j] += ($tik * $tkj - $F[$i][$k] * $F[$k + 1][$j]);
                }
                if ($oper[$k] == '^') {
                    $T[$i][$j] += $F[$i][$k] * $T[$k + 1][$j] + $T[$i][$k] * $F[$k + 1][$j];
                    $F[$i][$j] += $T[$i][$k] * $T[$k + 1][$j] + $F[$i][$k] * $F[$k + 1][$j];
                }
            }
        }
    }
    return $T[0][$n - 1] % 1003;
}