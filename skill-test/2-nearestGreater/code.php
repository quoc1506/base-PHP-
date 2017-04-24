<?php
function nearestGreater($a)
{
    $b = [];
    $len = count($a);
    for ($i = 0; $i < $len; $i++) {
        $times = 0;
        while (1) {
            $times++;
            if ($i + $times >= $len && $i - $times < 0) {
                $b[$i] = -1;
                break;
            }
            if ($i - $times >= 0)
                if ($a[$i - $times] > $a[$i]) {
                    $b[$i] = $i - $times;
                    break;
                }
            if ($i + $times < $len)
                if ($a[$i + $times] > $a[$i]) {
                    $b[$i] = $i + $times;
                    break;
                }
        }
    }
    return array_values($b);
}
