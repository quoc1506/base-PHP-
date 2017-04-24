<?php
function shortestPathWithEdge($start, $finish, $weight, $graph)
{
    $max1 = dijkstra($start, $finish, $graph, $weight);
    return $max1;

}

function dijkstra($a, $b, $G, $w)
{
    // http://www.nguyenvanquan7826.com/2013/10/13/thuat-toan-tim-duong-di-ngan-nhat-dijkstra-floyd/
    $n = count($G);
    $sum = 0;
    $S = [];
    $Len = [];
    $P = [];
    $nodes = [];
    for ($i = 0; $i < $n; $i++)
        for ($j = 0; $j < $n; $j++) {
            $sum += $G[$i][$j] + $w;
        }
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $nodes[$i][$j] = 0;
            if ($i != $j && $G[$i][$j] == 0) {
                $nodes[$i][$j] = 1;
                $G[$i][$j] = $w;
            }
            if ($i == $j)
                $G[$i][$j] = $sum;
        }
    }
    $a--;
    $b--;

    for ($i = 0; $i < $n; $i++) {
        $Len[$i] = $sum;
        $S[$i] = 0;
        $P[$i] = $a;
    }

    $Len[$a] = 0;

    while ($S[$b] == 0) {
        for ($i = 0; $i < $n; $i++)
            if (!$S[$i] && $Len[$i] < $sum)
                break;
        if ($i >= $n) {
            break;
        }

        for ($j = 0; $j < $n; $j++) {
            if (!$S[$j] && $Len[$i] > $Len[$j]) {
                $i = $j;
            }
        }

        $S[$i] = 1;
        for ($j = 0; $j < $n; $j++) {
            if (!$S[$j] && $Len[$i] + $G[$i][$j] < $Len[$j]) {
                if ($nodes[$i][$j]) {
                    if (count($P)) {
                        for ($t = 0; $t < count($P) - 1; $t++) {
                            if ($nodes[$P[$t]][$P[$t + 1]]) {
                                continue;
                            }
                        }
                    }
                    if ($nodes[$P[count($P) - 1]][$i]) {
                        continue;
                    }
                }
                $Len[$j] = $Len[$i] + $G[$i][$j];
                $P[$j] = $i;
            }
        }
    }
    if ($Len[$b] > 0 && $Len[$b] < $sum) {
        while ($i != $a) {
//            echo ($i + 1) . " <-- ";
            $i = $P[$i];
        }
//        echo ($a + 1) . "\n";
        return $Len[$b];
    } else {
        return $w;
    }
}