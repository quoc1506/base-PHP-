<?php
function concatenationProcess($init)
{
    # https://github.com/gayaniloxavier/CodeFights/blob/master/Javascript/tasks/concatenationProcess.js
    while (count($init) > 1) {
        $minInd1 = 0;
        $minInd2 = count($init) - 1;
        for ($i = 1; $i < count($init); $i++) {
            if (strlen($init[$i]) < strlen($init[$minInd1])) {
                $minInd1 = $i;
            }
        }
        if ($minInd2 === $minInd1) {
            $minInd2--;
        }
        for ($i = count($init) - 2; $i >= 0; $i--) {
            if (strlen($init[$i]) < strlen($init[$minInd2]) && $i !== $minInd1) {
                $minInd2 = $i;
            }
        }
        $init[] = $init[$minInd1] . $init[$minInd2];
        array_splice($init, max($minInd1, $minInd2), 1);
        array_splice($init, min($minInd1, $minInd2), 1);
    }
    return $init[0];
}