<?php
function spiralNumbers($n)
{
    $c = 1;
    $moveRight = 1;
    $moveUp = $moveDown = $moveLeft = 0;
    $a = [];
    for ($k = 0; $k < $n; $k++) {
        $a[$k] = [];
        for ($k2 = 0; $k2 < $n; $k2++) {
            $a[$k][$k2] = -1;
        }
    }
    $top = 0;
    $left = 0;
    $right = $n;
    $bottom = $n;
    $i = $j = 0; // cur position
    while ($c !== $n * $n + 1) {
        if ($moveRight) {
            if (!isset($a[$i]))
                $a[$i] = [];
            for ($j = $left; $j < $right; $j++) {
                $a[$i][$j] = $c++;
            }
            $j--;
            $top++;
            $moveRight = 0;
            $moveDown = 1;
        }
        if ($moveDown) {
            if (!isset($a[$i]))
                $a[$i] = [];
            for ($i = $top; $i < $bottom; $i++) {
                $a[$i][$j] = $c++;
            }
            $i--;
            $right--;
            $moveDown = 0;
            $moveLeft = 1;
        }
        if ($moveLeft) {
            if (!isset($a[$i]))
                $a[$i] = [];
            for ($j = $right - 1; $j >= $left; $j--) {
                $a[$i][$j] = $c++;
            }
            $j++;
            $bottom--;
            $moveLeft = 0;
            $moveUp = 1;
        }
        if ($moveUp) {
            if (!isset($a[$i]))
                $a[$i] = [];
            for ($i = $bottom - 1; $i >= $top; $i--) {
                $a[$i][$j] = $c++;
            }
            $i++;
            $left++;
            $moveUp = 0;
            $moveRight = 1;
        }
    }
    return array_values($a);
}