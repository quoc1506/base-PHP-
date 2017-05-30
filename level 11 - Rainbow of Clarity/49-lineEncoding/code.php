<?php
function lineEncoding($s) {
    // $a = str_split($s);
    // sort($a);
    // $s = implode("", $a);
    $arr = [1];
    $index = 0;
    $c = $s[0];
    for ($i = 1; $i < strlen($s); $i++) {
        if ($s[$i] !== $s[$i-1]) {
            $index++;
            $arr[$index] = 1;
            $c[$index] = $s[$i];
        } else
            $arr[$index]++;
    }
    $res = "";
    for ($i =0; $i < count($arr); $i++) {
        $res .= ($arr[$i] != 1 ?$arr[$i] : "").$c[$i];
    }
    return $res;
}
