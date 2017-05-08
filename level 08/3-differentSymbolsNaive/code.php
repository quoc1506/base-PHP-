<?php
function differentSymbolsNaive($s) {
    $arr = [];
    for ($i = 0; $i < strlen($s); $i++) {
        if (!in_array($s[$i], $arr))
            $arr[] = $s[$i];
    }
    return count($arr);
}
