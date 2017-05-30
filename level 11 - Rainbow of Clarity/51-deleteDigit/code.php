<?php
function deleteDigit($n)
{
    $max = -$n;
    $s = $n . "";
    for ($i = 0; $i < strlen($s); $i++) {
        $t = $s;
        $t = substr($t, 0, $i). substr($t, $i+1);
        $t = intval($t);
        if ($t > $max)
            $max = $t;
    }
    return $max;
}
