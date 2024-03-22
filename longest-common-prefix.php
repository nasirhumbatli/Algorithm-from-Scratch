<?php

// DESCRIPTION: https://leetcode.com/problems/longest-common-prefix/description/

// Solution: #1

// $allItems1 = []; // All values splited and added in one array
// $allItems2 = []; // All values splited and added different array
// $allItems3 = []; // Result
// foreach ($strs as $item) {
//     $allItems2[] = str_split($item);
//     for ($i = 0; $i < strlen($item); $i++) {
//         $allItems1[] = str_split($item)[$i];
//     }
// }
// for ($z = count(min($allItems2)); $z > 0; $z--) {
//     for ($a = 0; $a < count($strs); $a++) {
//         for ($b = 0; $b < $z; $b++) {
//             @$allItems3[$a] .= $allItems2[$a][$b];
//         }
//     }
//     if (count(array_unique($allItems3)) === 1) {
//         break;
//     }
//     $allItems3 = [];
// }
// return empty($allItems3) ? '' : $allItems3[0];

// Best Solution: 

// for ($i = strlen($strs[0]); $i > 0; $i--) {
//     foreach ($strs as $val) $tempArray[] = substr($val, 0, $i);
//     if (count(array_unique($tempArray)) == 1) return array_unique($tempArray)[0];
//     $tempArray = array();
// }
// return "";

$strs = ["flower", "flow", "flight"];
// $strs = ["fl", "ffl", "fl"];
// $strs = ["dog", "racecar", "car"];



function longestCommonPrefix($strs)
{
    for ($i = strlen($strs[0]); $i > 0; $i--) {
        foreach ($strs as $val) $tempArray[] = substr($val, 0, $i);
        if (count(array_unique($tempArray)) == 1) return array_unique($tempArray)[0];
        $tempArray = array();
    }
    return "";
}



var_dump(longestCommonPrefix($strs));
