<?php
function circleOfNumbers($n, $firstNumber) {
    return $firstNumber >= $n / 2 ? $firstNumber - $n / 2: $n / 2 + $firstNumber;
}
