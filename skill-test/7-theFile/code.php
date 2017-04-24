<?php
function theFile($version1, $version2)
{
    // https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/theFile.js
    $len1 = strlen($version1);
    $len2 = strlen($version2);
    $maxLen = [];
    $take = [];
    $maxLen[0] = [];
    $take[0] = [];
    for ($j = 0; $j <= $len2; $j++) {
        $maxLen[0][count($maxLen[0])] = 0;
        $take[0][count($take[0])] = false;
    }
    for ($i = 1; $i <= $len1; $i++) {
        $maxLen[count($maxLen)] = [0];
        $take[count($take)] = [false];
        for ($j = 1; $j <= $len2; $j++) {
            $maxLen[$i][count($maxLen[$i])] = 0;
            $take[$i][count($take[$i])] = false;
            if ($version1[$i - 1] == $version2[$j - 1]) {
                $maxLen[$i][$j] = $maxLen[$i - 1][$j - 1] + 1;
                $take[$i][$j] = true;
            } else {
                $maxLen[$i][$j] = max($maxLen[$i - 1][$j], $maxLen[$i][$j - 1]);
            }
        }
    }

    $answer = [];
    $i = $len1;
    $j = $len2;
    while ($i > 0 && $j > 0) {
        if ($take[$i][$j]) {
            $i--;
            $j--;
            $answer[count($answer)] = $version1[$i];
        } else {
            if ($maxLen[$i - 1][$j] > $maxLen[$i][$j - 1]) {
                $i--;
            } else {
                $j--;
            }
        }
    }
    return join(array_reverse($answer));
}