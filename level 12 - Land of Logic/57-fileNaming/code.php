<?php
function fileNaming($names) {
    $arr = [];
    $indexs = [];
    for ($i = 0; $i < count($names); $i++) {
        $s = $names[$i];
        $k = array_search($s, $arr);
        if ($k !== false) {
            if (isset($indexs[$k])) {
                $indexs[$k]++;
            } else {
                $indexs[$k] = 1;
            }
            $s .= '('.$indexs[$k].')';
            if (array_search($s, $arr) !== false) {
                $i--;
                continue;
            }
            $names[$i] = $s;
        }
        array_push($arr, $s);
    }
    return $names;
}
