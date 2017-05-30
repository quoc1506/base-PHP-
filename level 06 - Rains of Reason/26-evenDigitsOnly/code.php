<?php
function evenDigitsOnly($n)
{
    while ($n > 0) {
        $m = $n % 10;
        if ($m % 2 !== 0)
            return false;
        $n = (intval($n / 10));
    }
    return true;
}
