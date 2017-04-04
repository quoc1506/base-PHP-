<?php
function chessBoardCellColor($cell1, $cell2)
{
    $c = ord($cell1[0]) - ord($cell2[0]);
    $c1 = intval(substr($cell1, 1, strlen($cell1) - 1));
    $c2 = intval(substr($cell2, 1, strlen($cell2) - 1));
    $c += ($c1 - $c2);
    return  $c % 2 === 0;
}