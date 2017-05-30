<?php
function validTime($time) {
    $time = explode(":", $time);
    $h = intval($time[0]);
    if ($h < 0 || $h > 23)
        return false;
    $m = intval($time[1]);
    if ($m < 0 || $m > 59)
        return false;
    return true;
}
