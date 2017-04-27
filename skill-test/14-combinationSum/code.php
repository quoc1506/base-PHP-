<?php
function combinationSum($a, $sum)
{
    #https://leetcode.com/problems/combination-sum/#/solutions
    $list = [];
    sort($a);
    backtrack($list, [], $a, $sum, 0);
    $res = "";
    $check = [];
    foreach ($list as $item) {
        $s = "(";
        foreach ($item as $k => $i) {
            if ($k != 0)
                $s .= " ";
            $s .= $i;
        }
        $s .= ")";
        if (in_array($s, $check))
            continue;
        array_push($check, $s);
        $res .= $s;

    }
    if ($res == "")
        $res .= "Empty";
    return $res;
}

function backtrack(&$list, $tempList, $nums, $remain, $start)
{
    if ($remain < 0) return;
    else if ($remain == 0)
        $list[count($list)] = $tempList;
    else {
        for ($i = $start; $i < count($nums); $i++) {
            $tempList[count($tempList)] = $nums[$i];
            backtrack($list, $tempList, $nums, $remain - $nums[$i], $i); // not i + 1 because we can reuse same elements
            unset($tempList[count($tempList) - 1]);
        }
    }
}
