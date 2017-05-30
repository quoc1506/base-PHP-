<?php
function messageFromBinaryCode($code) {
    $s = "";
    for ($i = 0; $i < strlen($code); $i+= 8) {
        $t = substr($code, $i, 8);

        $s .= chr(bindec($t));
    }
    return $s;
}
