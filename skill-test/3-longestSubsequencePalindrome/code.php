<?php
function longestSubsequencePalindrome($a)
{
    // http://stackoverflow.com/questions/12892912/how-to-find-the-longest-palindromic-subsequence-not-its-length
    $n = count($a);
    $i = $j = $cl = 0;
    $L = [];
    $Way = [];
    for ($i = 0; $i < $n; $i++) {
        $L[$i][$i] = 1;
        $Way[$i][$i] = 0;
    }

    // substring
    for ($cl = 2; $cl <= $n; $cl++) {
        for ($i = 0; $i < $n - $cl + 1; $i++) {
            $j = $i + $cl - 1;
            if ($a[$i] == $a[$j] && $cl == 2) {
                $L[$i][$j] = 2;
                $Way[$i][$j] = 0;
            } else if ($a[$i] == $a[$j]) {
                $L[$i][$j] = $L[$i + 1][$j - 1] + 2;
                $Way[$i][$j] = 0;
            } else {
                if ($L[$i][$j - 1] > $L[$i + 1][$j]) {
                    $L[$i][$j] = $L[$i][$j - 1];
                    $Way[$i][$j] = 1;
                } else {
                    $L[$i][$j] = $L[$i + 1][$j];
                    $Way[$i][$j] = 2;
                }

            }

        }
    }

    $index = 0;
    $s = 0;
    $e = $n - 1;

    while ($s <= $e) {
        if ($Way[$s][$e] == 0) {
            $result[$index++] = $a[$s];
            $s += 1;
            $e -= 1;

        } else if ($Way[$s][$e] == 1) $e -= 1;
        else if ($Way[$s][$e] == 2) $s += 1;
    }

    $endIndex = ($L[0][$n - 1] % 2) ? $index - 1 : $index;

    for ($k = 0; $k < $endIndex; ++$k) $result[$L[0][$n - 1] - 1 - $k] = $result[$k];

    $result[$index + $endIndex] = '\0';


    return $L[0][$n - 1];

}
