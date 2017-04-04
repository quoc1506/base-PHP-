<?php
function alternatingSums($a) {
    $res = [];
    $res[0] = 0;
    $res[1] = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($i % 2 == 0)
            $res[0] += $a[$i];
        else
            $res[1] += $a[$i];
    }
    return $res;
}
