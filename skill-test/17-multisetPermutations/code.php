<?php
function multisetPermutations($multiset)
{
    #https://codefights.com/tournaments/gp4iidZELqnn6cjLy/G/solutions/fXG8RmSNsksQwPf5b
    $num = recursive(count($multiset));
    $a = [];
    $den = 1;
    for ($i = 0; $i <= 10; $i++) {
        $a[$i] = count(array_filter($multiset, function ($q) use ($i) {
            return $q === $i;
        }));
        $a[$i] = recursive($a[$i]);
        $den *= $a[$i];
    }
    return $num / $den;
}

function recursive($n)
{
    return $n <= 1 ? 1 : $n * recursive($n - 1);
}