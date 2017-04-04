<?php
function boxBlur($image)
{
    $answer = [];
    for ($x = 1; $x < count($image) - 1; $x++) {
        $line = [];
        for ($y = 1; $y < count($image[0]) - 1; $y++) {
            $sum = 0;
            for ($dx = -1; $dx <= 1; $dx++) {
                for ($dy = -1; $dy <= 1; $dy++) {
                    $sum += $image[$x + $dx][$y + $dy];
                }
            }
            array_push($line, intval($sum / 9));
        }
        array_push($answer, $line);
    }
    return $answer;
}