<?php
function isDigit($symbol) {
    for ($i = 0; $i< strlen($symbol); $i++) {
        if (!ctype_alnum($symbol[$i])) {
            return false;
        }
    }
    return true;
}
