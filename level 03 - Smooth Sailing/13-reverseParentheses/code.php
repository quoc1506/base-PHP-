<?php
function reverseParentheses($s)
{
    $loop = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        $k = $s[$i];
        if ($k != ")") {
            continue;
        }
        $loop++;
        $s[$i--] = '@';
        $s = str_replace('@', '', $s);
        for ($j = $i; $j >= 0; $j--) {
            if ($s[$j] == "(") {
                $s[$j] = '@';
                $i--;
                $s = str_replace('@', '', $s);
                reverse($s, $j, $i);
                break;
            }
        }
    }
    return $s;
}

function reverse(&$s, $i, $j)
{
    $max = intval(round($i + (($j - $i) / 2)));
    for ($k = $i; $k < $max; $k++) {
        $t = $max + ($max - $k);
        if (($j - $i) % 2 != 0)
            $t--;
        po($s, $k, $t);
    }
}

function po(&$s, $i, $j)
{
    $t = $s[$i];
    $s[$i] = $s[$j];
    $s[$j] = $t;
}