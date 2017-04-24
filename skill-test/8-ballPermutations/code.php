<?php
function ballPermutations($N, $M, $K)
{
    // https://github.com/agusmakmun/CodeFights-1/blob/master/tasks/ballPermutations.js
    $dp = [];
    for ($i = 0; $i <= $N; $i++) {
        $dp[$i] = [];
        for ($j = 0; $j <= $M; $j++) {
            $dp[$i][$j] = [];
            for ($k = 0; $k <= $K; $k++) {
                $dp[$i][$j][$k] = [0, 0];
            }
        }
    }
    $dp[0][0][0][0] = 1;
    for ($cnt = 0; $cnt < $N + $M + $K; $cnt++) {
        for ($n = 0; $n <= min($N, $cnt); $n++) {
            for ($m = 0; $m <= min($M, $cnt - $n); $m++) {
                $k = $cnt - $n - $m;
                if ($k > $K) {
                    continue;
                }
                if ($n < $N) {
                    $dp[$n + 1][$m][$k][0] += ($dp[$n][$m][$k][0] + $dp[$n][$m][$k][1]) % 1000000007;
                }
                if ($m < $M) {
                    $dp[$n][$m + 1][$k][1] += $dp[$n][$m][$k][0] % 1000000007;
                }
                if ($k < $K) {
                    $dp[$n][$m][$k + 1][0] += ($dp[$n][$m][$k][0] + $dp[$n][$m][$k][1]) % 1000000007;
                }
            }
        }
    }

    $v1 = $dp[$N][$M][$K][0];
    $v2 = $dp[$N][$M][$K][1];
    return $v = ($v1 + $v2) % 1000000007;
}