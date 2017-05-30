<?php
function electionsWinners($votes, $k) {
    $max = $votes[0];
    $t = 1;
    for ($i = 1; $i < count($votes); $i++) {
        if ($votes[$i] == $max)
            $t = 0;
        if ($votes[$i] > $max) {
            $max = $votes[$i];
            $t = 1;
        }
    }
    $c = 0;
    for ($i = 0; $i < count($votes); $i++) {
        if ($votes[$i] + $k > $max) {
            $c++;
        }
    }
    return $c == 0 ? $t : $c;
}
