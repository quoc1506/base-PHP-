<?php
function digitsProduct($product)
{
    if ($product === 0)
        return 10;
    if ($product < 10)
        return $product;
    return getDigits($product);
}

function getDigits($p)
{
    $arr = [2, 3, 5, 7];
    $i = 0;
    $s = "";
    while ($p !== 1) {
        if ($p % $arr[$i] === 0) {
            $p /= $arr[$i];
            $s .= $arr[$i];
        } else {
            $i++;
            count($arr);
            if ($i > count($arr) - 1) {
                $s = -1;
                break;
            }
        }
    }
    if ($s === -1)
        return $s;
    $res = smallestDigit($s);
    return $res;
}

function smallestDigit($s)
{
    $n2 = 0;
    $n3 = 0;
    $res = "";
    for ($i = 0; $i < strlen($s); $i++) {
        $n = intval($s[$i]);
        $res .= $n;
        if ($n === 2) {
            $n2++;
            if ($n2 === 2) {
                for ($j = 0; $j < strlen($res); $j++) {
                    $m = intval($res[$j]);
                    if (2 === $m) {
                        $res[$j] = $m * 2;
                        $res = substr($res, 0, strlen($res) - 1);
                        break;
                    }
                }
            } else if ($n2 === 3) {
                $n2 = 0;
                for ($j = 0; $j < strlen($res); $j++) {
                    $m = intval($res[$j]);
                    if (4 === $m) {
                        $res[$j] = $m * 2;
                        $res = substr($res, 0, strlen($res) - 1);
                        break;
                    }
                }
            }
        } else if ($n === 3) {
            $n3++;
            if ($n3 === 2) {
                $n3 = 0;
                for ($j = 0; $j < strlen($res); $j++) {
                    $m = intval($res[$j]);
                    if (3 === $m) {
                        $res[$j] = $m * 3;
                        $res = substr($res, 0, strlen($res) - 1);
                        break;
                    }
                }
            }
        }
    }
    if ($n2 === 2 && $n3 === 1) { // 34
        for ($j = 0; $j < strlen($res); $j++) {
            $m = intval($res[$j]);
            if (3 === $m) {
                $res[$j] = 6;
            }
            if (4 === $m) {
                $res[$j] = 2;
            }
        }
    }
    if ($n2 === 1 && $n3 === 1) { // 34
        for ($j = 0; $j < strlen($res); $j++) {
            $m = intval($res[$j]);
            if (2 === $m) {
                $res[$j] = 0;
            }
            if (3 === $m) {
                $res[$j] = 6;
            }
        }
    }
    $res = floatval($res);
    $arr = str_split($res);
    sort($arr);
    return floatval(implode($arr));
}
