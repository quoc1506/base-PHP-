<?php
function commonCharacterCount($s1, $s2)
{
    $res = [];
    for ($i = 0; $i < strlen($s1); $i++) {
        for ($j = 0; $j < strlen($s2); $j++) {
            if ($s1[$i] == $s2[$j]) {
                array_push($res, $s1[$i]);
                $s2 = substr($s2, 0, $j) . '?' . substr($s2, $j + 1, strlen($s2) - $j);
                break;
            }
        }
    }
    return count($res);
}