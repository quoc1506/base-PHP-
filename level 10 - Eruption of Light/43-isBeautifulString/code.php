<?php
function isBeautifulString($inputString)
{
    $temp = str_split($inputString);
    sort($temp);
    $inputString = implode('', $temp);
    $a = 97;
    if (ord($inputString[0]) != $a) {
        return 0;
    }
    $k = 0;
    $arr = [1];
    for ($i = 1; $i < strlen($inputString); $i++) {
        if ($inputString[$i] == $inputString[$i - 1]) {
            $arr[$k]++;
        } else {
            if (ord($inputString[$i]) != ++$a)
                return 0;
            $arr[++$k] = 1;
        }
    }
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($max < $arr[$i])
            return 0;
        $max = $arr[$i];
    }
    return 1;
}