<?php
function numberOfSolutions($n) {
    # https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/numberOfSolutions.js
    $result = 0;
    for ($a = $n + 1; $a < 2 * $n; $a++) {
        if (($a * $n) % ($a - $n) === 0) {
            $result++;
        }
    }

    return $result * 2 + 1;
}
