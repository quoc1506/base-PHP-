<?php
function countCircleColorings($points, $colors)
{
    $i = 2;
    $sum = fullCases($colors, $i);
    while ($i < $points) {
        $i++;
        $sum = fullCases($colors, $i) - $sum;
    }
    return $sum;
}

function fullCases($colors, $i)
{
    return $colors * pow($colors - 1, $i - 1);
}
