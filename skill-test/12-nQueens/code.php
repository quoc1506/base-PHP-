<?php
function nQueens($n)
{
    // https://en.wikibooks.org/wiki/Algorithm_Implementation/Miscellaneous/N-Queens#C.2B.2B
    $position = [];
    $res = [];
    solve(0, $n, $position, $res);
    foreach ($res as $k1 => $item) {
        foreach ($item as $k2 => $i) {
            $res[$k1][$k2] = $i + 1;
        }
    }
    array_multisort($res);
    return $res;
}

// Recursively generate a tuple like [0 0 0 0], then [0 0 0 1] then etc...
function solve($k, $n, &$position, &$res)
{
    if ($k == $n) // We placed N-1 queens (0 included), problem solved!
    {
        // Solution found!
//        print_r("Solution: ");
        array_push($res, $position);
//        for ($i = 0; $i < $n; $i++)
//
//            print_r($position[$i] . ' ');
//        print_r("\n");

    } else {
        for ($i = 0; $i < $n; $i++) // Generate ALL combinations
        {
            // Before putting a queen (the k-th queen) into a row, test it for safeness
            if (isSafe($k, $i, $position)) {
                $position[$k] = $i;
                // Place another queen
                solve($k + 1, $n, $position, $res);
            }
        }
    }
}

// Check if a position is safe
function isSafe($queen_number, $row_position, $position)
{
    // Check each queen before this one
    for ($i = 0; $i < $queen_number; $i++) {
        // Get another queen's row_position
        $other_row_pos = $position[$i];

        // Now check if they're in the same row or diagonals
        if ($other_row_pos == $row_position || // Same row
            $other_row_pos == $row_position - ($queen_number - $i) || // Same diagonal
            $other_row_pos == $row_position + ($queen_number - $i)
        )   // Same diagonal
            return false;
    }
    return true;
}