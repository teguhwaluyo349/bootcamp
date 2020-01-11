<?php

$arr = ['T','S','Q', 'P', 'R', 'W', 'U', 'V'];

function quickSort($arr)
{
    $count = count($arr);

    if ($count < 2) {
        return $arr;
    }

    $leftArray = $rightArray = array();
    $middle = $arr [0];

    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] < $middle) {
            $leftArray[] = $arr[$i];
        } else {
            $rightArray[] = $arr[$i];
        }
    }

    $leftArray = quickSort($leftArray);
    $rightArray = quickSort($rightArray);

    return array_merge($leftArray, array($middle), $rightArray);
}

print_r(quickSort($arr));