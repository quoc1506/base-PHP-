<?php
function chipMoving($grid)
{
    $data = challenge($grid);
    return $data;
}

function challenge($grid)
{
    // https://codefights.com/challenge/JiJvCrCqAoGYAjS8N/solutions/SwMyYzEQ7fJxjZn6G
    $MAX_COST = 1e7;

    $n = count($grid);
    $m = count($grid[0]);
    $dp = [];

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            for ($k = 0; $k < 2; $k++) {
                $dp[$i][$j][$k] = $MAX_COST;
            }
        }
    }

    $dp[0][0][0] = 0;
    $dp[0][0][1] = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($i < $n - 1) {
                $dp[$i + 1][$j][0] = min(min($dp[$i + 1][$j][0],
                    $dp[$i][$j][0] + $grid[$i + 1][$j]),
                    $dp[$i][$j][1] + $grid[$i + 1][$j] + 10);
            }
            if ($j < $m - 1) {
                $dp[$i][$j + 1][1] = min(min($dp[$i][$j + 1][1],
                    $dp[$i][$j][1] + $grid[$i][$j + 1]),
                    $dp[$i][$j][0] + $grid[$i][$j + 1] + 10);
            }
        }
    }

    return min($dp[$n - 1][$m - 1][0], $dp[$n - 1][$m - 1][1]);
}
