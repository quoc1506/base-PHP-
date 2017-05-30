<?php
function isMAC48Address($inputString) {
    $arr = explode("-", $inputString);
    if (!count($arr))
        return false;
    for ($i = 0; $i < count($arr); $i++) {
        $s = $arr[$i];
        if (strlen($s) != 2)
            return false;
        if ((!ctype_alnum($s[0]) && !ctype_alpha($s[0])) ||(ctype_alpha($s[0]) && ord($s[0]) > 70))
            return false;
        if ((!ctype_alnum($s[1]) && !ctype_alpha($s[1])) ||(ctype_alpha($s[1]) && ord($s[1]) > 70))
            return false;
    }
    return true;
}
