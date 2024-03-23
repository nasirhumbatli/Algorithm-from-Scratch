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

// $s = "()[]";
// $s = "()[]{}";
// $s = "([)]"; // 1212
// $s = "([])()"; //1221
// $s = "(]"; //312213
// $s = "{([]})"; //312231
// $s = "()"; //11
$s = "((";
// $s = "(}{)";

function isValid($s)
{
    
}

var_dump(isValid($s));