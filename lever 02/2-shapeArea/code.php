<?php
function shapeArea($n) {
    $v = 1;
    if ($n == 1) {
        return 1;
    }
    loop($v, $n);
    return $v;
}
function loop(&$v, &$l) {
    if ($l === 1) {
        return $v;
    }
    $l--;
    $v += 4*$l;
    return loop($v, $l);
}