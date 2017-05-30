<?php
function growingPlant($upSpeed, $downSpeed, $desiredHeight) {
    $height = 0;
    $day = 1;
    while ($height < $desiredHeight) {
        $height += $upSpeed;
        if ($height >= $desiredHeight) {
            break;
        }
        $height -= $downSpeed;
        $day++;
    }
    return $day;
}
