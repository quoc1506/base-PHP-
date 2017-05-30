<?php
function sortByHeight($a) {
    for ($i = 0; $i < count($a) - 1; $i++) {
        if ($a[$i] != -1) {
            for ($j = $i+1; $j < count($a); $j++) {
                if ($a[$j] != -1 && $a[$j] < $a[$i]) {
                    rearrange($a[$j], $a[$i]);
                }
            }
        }
    }
    return $a;
}
function rearrange(&$a, &$b) {
    $c = $a;
    $a = $b;
    $b = $c;
}