<?php
function longestWord($text) {
    $arr = explode(" ", $text);
    $max = 0;
    $s = "";
    foreach($arr as $item) {
        $item = trim($item);
        $item = str_replace(["(", ")"], ' ', $item);
        $t = '';
        $c = 0;
        for($i = 0; $i < strlen($item); $i++) {
            if (ctype_alpha($item[$i]) || $item[$i] === "'") {
                $c++;
                $t .= $item[$i];
            }
        }
        if ($c > $max) {
            $max = $c;
            $s = $t;
        }
    }
    return $s;
}
