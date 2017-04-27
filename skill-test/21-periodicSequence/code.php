<?php
function periodicSequence($S0, $A, $B, $M)
{
    $occurrence = [];
    $currentValue = $S0;

    for ($i = 0; $i < $M; $i++) {
        $occurrence[$i] = -1;
    }
    $occurrence[$S0] = 0;

    for ($i = 1; ; $i++) {
        $currentValue = ($A * $currentValue + $B) % $M;
        if ($occurrence[$currentValue] != -1) {
            return $i - $occurrence[$currentValue];
        }
        $occurrence[$currentValue] = $i;
    }
}
