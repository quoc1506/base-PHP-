<?php
function isIPv4Address($inputString)
{
    $arr = explode(".", $inputString);
    if (count($arr) !== 4) {
        return false;
    }
    foreach ($arr as $i) {
        if ($i !== "") {
            if (strlen($i) !== strlen(intval($i)))
                return false;
            $i = intval($i);
        } else
            return false;
        if ($i < 0 || $i > 255)
            return false;
    }
    return true;
}