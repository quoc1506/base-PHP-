<?php
function almostIncreasingSequence($sequence)
{
    $count = 0;
    if (count($sequence) <= 2) {
        return true;
    } else {
        for ($i = 0; (($count < 2) && ($i < (count($sequence) - 1))); $i++) {
            if ($sequence[$i] >= $sequence[$i + 1]) {
                $count++;
                if ((($i - 1) >= 0) && ($sequence[$i - 1] >= $sequence[$i + 1])) {
                    if ((($i + 2) < count($sequence)) && ($sequence[$i] >= $sequence[$i + 2])) {
                        return false;
                    }
                }
            }
        }
        return ($count > 1) ? false : true;
    }
}