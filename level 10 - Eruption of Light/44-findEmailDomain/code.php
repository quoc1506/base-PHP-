<?php
function findEmailDomain($address) {
    for ($i = strlen($address) -1; $i >= 0; $i--) {
        if ($address[$i] == "@") {
            return substr($address, $i+1);
        }
    }
    return "";
}
