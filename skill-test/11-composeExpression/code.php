<?php
function composeExpression($digits, $target)
{
    # https://leetcode.com/problems/expression-add-operators/#/solutions
    $ret = [];
    $path = [];
    $n = 0;
    for ($i = 0; $i < strlen($digits); $i++) {
        $n = $n * 10 + $digits[$i] - '0';
        $path[$i] = $digits[$i];
        dfs($ret, $path, $i + 1, 0, $n, $digits, $i + 1, $target);
        if ($n == 0) break;
    }
    $res = [];
    for ($i = 0; $i < count($ret); $i++) {
        $s = "";
        for ($j = 0; $j < count($ret[$i][0]); $j++) {
            $s .= $ret[$i][0][$j];
        }
        array_push($res, $s);
    }
    natsort($res);
    $res2 = [];
    foreach ($res as $item) {
        array_push($res2, $item);
    }
    return $res2;
}
function dfs(&$ret, $path, $len, $left, $cur, $digits, $pos, $target)
{
    if ($pos == strlen($digits)) {
        if ($left + $cur == $target)
            $ret[count($ret)] = [
                $path, 0, $len
            ];
        return;
    }
    $n = 0;
    $j = $len + 1;
    for ($i = $pos; $i < strlen($digits); $i++) {
        $n = $n * 10 + $digits[$i] - '0';
        $path[$j++] = $digits[$i];
        $path[$len] = '+';
        dfs($ret, $path, $j, $left + $cur, $n, $digits, $i + 1, $target);
        $path[$len] = '-';
        dfs($ret, $path, $j, $left + $cur, -$n, $digits, $i + 1, $target);
        $path[$len] = '*';
        dfs($ret, $path, $j, $left, $cur * $n, $digits, $i + 1, $target);
        if ($digits[$pos] == '0') break;
    }
}