<?php
function areSimilar($A, $B)
{
    $cases = [];
    $i = 0;
    for (; $i < count($A); $i++) {
        if ($A[$i] !== $B[$i]) {
            $cases = strposArray($B, $A[$i], $i);
            if (count($cases) === 0)
                return false;
            break;
        }
    }
    for ($k = 0; $k < count($cases); $k++) {
        swap($B, $i, $cases[$k]);
        if (perfectSimilar($A, $B))
            return true;
        else
            swap($B, $i, $cases[$k]);
    }
    return count($cases) === 0;
}

function strposArray($A, $search, $from = 0)
{
    $res = [];
    for ($i = $from; $i < count($A); $i++) {
        if ($A[$i] === $search)
            $res[count($res)] = $i;
    }
    return $res;
}

function perfectSimilar($A, $B)
{
    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] !== $B[$i]) {
            return false;
        }
    }
    return true;
}

function swap(&$B, $i, $j)
{
    $t = $B[$i];
    $B[$i] = $B[$j];
    $B[$j] = $t;
}
