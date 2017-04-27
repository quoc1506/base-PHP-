<?php
function zigzag($a)
{
    # https://github.com/team-orca/CodeFights/blob/master/Answers/zigzag.java
    $best = 1;
    $left = 0;
    while ($left < count($a)) {
        $right = $left + 1;
        while ($right < count($a)) {
            if ($right == $left + 1) {
                if ($a[$left] == $a[$right]) {
                    break;
                }
            } else {
                if (($a[$right - 1] - $a[$right - 2]) * ($a[$right - 1] - $a[$right]) <= 0) {
                    break;
                }
            }
            $right++;
        }
        $best = max($best, $right - $left);
        $left = $right;
        if ($left < count($a) && $a[$left - 1] != $a[$left]) {
            $left--;
        }
    }

    return $best;
}