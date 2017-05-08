<?php
function depositProfit($deposit, $rate, $threshold) {
    $year = 0;
    while ($deposit < $threshold) {
        $year++;
        $deposit += ($deposit*$rate/100);
    }
    return $year;
}
