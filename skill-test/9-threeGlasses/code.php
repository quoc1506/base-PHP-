<?php
function threeGlasses($cap)
{
    // https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/threeGlasses.js
$wasCnt = [];
    $queue = [];
    $l = 0;
    $was = [];
    $result = 0;

    for ($i = 0; $i < $cap[0] + 1; $i++) {
        $layer = [];
        for ($j = 0; $j < $cap[1] + 1; $j++) {
            $line = [];
            for ($k = 0; $k < $cap[2] + 1; $k++) {
                $line[count($line)] = false;
            }
            $layer[count($layer)] = $line;
        }
        $was[count($was)] = $layer;
    }

    for ($i = 0; $i < $cap[0] + $cap[1] + $cap[2] + 1; $i++) {
        $wasCnt[$i] = false;
    }
    tryAdd($cap, $was, $wasCnt, $queue);
    while ($l < count($queue)) {
        $cur = $queue[$l];
        $l++;
        for ($i = 0; $i < 3; $i++) {
            $next = $cur;
            $next[$i] = 0;
            tryAdd($next, $was, $wasCnt, $queue);

            for ($j = 0; $j < 3; $j++) {
                if ($i !== $j && $cur[$i] + $cur[$j] > $cap[$j]) {
                    $next = $cur;
                    $next[$i] -= $cap[$j] - $cur[$j];
                    $next[$j] = $cap[$j];
                    tryAdd($next, $was, $wasCnt, $queue);
                } else if ($i !== $j) {
                    $next = $cur;
                    $next[$j] += $next[$i];
                    $next[$i] = 0;
                    tryAdd($next, $was, $wasCnt, $queue);
                }
            }
        }
    }

    for ($i = 0; $i <= $cap[0] + $cap[1] + $cap[2]; $i++) {
        if ($wasCnt[$i]) {
            $result++;
        }
    }
    return $result - 1;
}

function tryAdd($cap, &$was, &$wasCnt, &$queue)
{
    if (!$was[$cap[0]][$cap[1]][$cap[2]]) {
        $was[$cap[0]][$cap[1]][$cap[2]] = true;
        $wasCnt[$cap[0] + $cap[1] + $cap[2]] = true;
        $queue[count($queue)] = $cap;
    }

}