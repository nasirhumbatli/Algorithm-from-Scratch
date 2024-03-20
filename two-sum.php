<?php

// Solution 1

// $limit = count($nums);
//     for($i = 0; $i < $limit; $i++) {
//         for($z = $i + 1; $z < $limit; $z++) {
//             if(($nums[$i] + $nums[$z]) == $target) {
//                 return array($i, $z);
//             }
//         }
//     }

// Solution 2

// $limit = count($nums);
//         for ($i = 0; $i < $limit; $i++) {
//             if($result = array_search($target-$nums[$i], array_replace($nums, [$i => 'x']))) {
//                 return array($i, $result);
//             }
//         }

// Solution 3

// $tempArray = array();
//     foreach($nums as $key => $value) {
//         $result = $target - $value;
//         if (array_key_exists($value, $tempArray)) {
//             return array($tempArray[$value], $key);
//         }
//         $tempArray[$result] = $key;
//     }

// Best Solution
$nums = [2, 5, 3, 4];
$target = 6;

function twoSum($nums, $target)
{
    $tempArray = array();
    foreach ($nums as $key => $value) {
        $result = $target - $value;
        if (isset($tempArray[$value])) {
            return array($tempArray[$value], $key);
        }
        $tempArray[$result] = $key;
    }
}

var_dump(twoSum($nums, $target));
