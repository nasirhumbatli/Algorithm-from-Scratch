<?php

// DESCRIPTION: https://leetcode.com/problems/valid-parentheses/

// Solution: #1

// $pattern = [
//     '[]',
//     '()',
//     '{}',
// ];
// $check = 1;
// $result = $s;
// while (!empty($result) && $check <= strlen($s) / 2) {
//     for ($i = 0; $i < 3; $i++) {
//         $result = str_replace($pattern[$i], '', $result);
//         if (empty($result)) return true;
//     }
//     $check++;
// }
// return false;

// Best Solution: 

// $pattern = [
//     '(' => ')',
//     '[' => ']',
//     '{' => '}',
// ];

// $length = strlen($s);
// $tempArray = [];
// for ($i = 0; $i < $length; $i++) {
//     if (array_key_exists($s[$i], $pattern)) {
//         $tempArray[] = $pattern[$s[$i]];
//     } elseif (array_pop($tempArray) !== $s[$i]) {
//         return false;
//     }
// }
// return count($tempArray) === 0;

$s = "(}{)";

function isValid($s)
{
    $pattern = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    $length = strlen($s);
    $tempArray = [];
    for ($i = 0; $i < $length; $i++) {
        if (array_key_exists($s[$i], $pattern)) {
            $tempArray[] = $pattern[$s[$i]];
        } elseif (array_pop($tempArray) !== $s[$i]) {
            return false;
        }
    }
    return count($tempArray) === 0;
}

var_dump(isValid($s));
