<?php
function makeArrayConsecutive2($statues) {
    $min = $max = $statues[0];
    for ($i = 1; $i < count($statues); $i++) {
        if ($statues[$i] < $min)
            $min = $statues[$i];
        if ($statues[$i] > $max)
            $max = $statues[$i];
    }
    $res = [];
    for ($i = $min + 1; $i < $max; $i++) {
        if (array_search($i, $statues) === false) {
            $res[count($res)] = $i;
        }
    }
    return count($res);
}