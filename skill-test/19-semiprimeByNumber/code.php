<?php
function semiprimeByNumber($n)
{
    # https://codefights.com/tournaments/FmDhLkrkdr6ckmaYc/C/solutions/TYqvWKADMXgp8hGTC
    $sp = [];
    for ($i = 2; $i < 100; $i++) {
        if (isP($i)) {
            for ($j = 2; $j < 100; $j++) {
                if (isP($j)) {
                    $tmp = $i * $j;
                    if (!in_array($tmp, $sp)) {
                        $sp[] = $tmp;
                    }
                }
            }
        }
    }
    sort($sp);
    return $sp[$n - 1];
}

function isP($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}