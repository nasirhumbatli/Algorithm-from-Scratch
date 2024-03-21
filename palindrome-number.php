<?php

// DESCRIPTION: https://leetcode.com/problems/palindrome-number/
// Follow up: Could you solve it without converting the integer to a string?

// String Solution:

// return $x == strrev($x);

// --------------------------- Follow up: without converting --------------------------- //

// Solution: #1

// if ($x < 0) return false;

// $divider = 1;
// $count = 0;
// $modul = 10;
// $div = 1;
// $temp = array();
// $temp2 = array();

// while(intval($x / $divider) != 0) {
//     $divider*=10;
//     $count++;
// }


// for($i = 0; $i < $count; $i++) {
//     $temp[] = intval(($x%$modul)/$div);
//     $temp2[] = intval(($x%$divider)/($divider/10));
//     $modul*=10;
//     $div*=10;
//     $divider/=10;
// }

// for($z = 0; $z < $count; $z++) {
//     if($temp[$z] !== $temp2[$z]) {
//         return false;
//     }
// }
// return true;

// Solution: #2

// if ($x < 0) return false;
//     $divider = 1;
//     $count = 0;
//     $modul = 10;
//     $div = 1;
//     $temp = array();
//     $temp2 = array();

//     while(intval($x / $divider) != 0) {
//         $temp[] = intval(($x%$modul)/$div);
//         $modul*=10;
//         $div*=10;
//         $divider*=10;
//         $count++;
//     }
//     for($i = 0; $i < $count; $i++) {
//         $temp2[] = intval(($x%$divider)/($divider/10));
//         $divider/=10;
//         if($temp[$i] !== $temp2[$i]) {
//             return false;
//         }
//     }
//     return true;

// Solution: #3

// if ($x < 0) return false;
//     $divider = 1;
//     $count = 0;
//     $temp = array();
//     $temp2 = array();

//     while (intval($x / $divider) != 0) {
//         $temp[] = intval(($x % ($divider*10)) / $divider);
//         $divider *= 10;
//         $count++;
//     }
//     for ($i = 0; $i < $count; $i++) {
//         $temp2[] = intval(($x % $divider) / ($divider / 10));
//         $divider /= 10;
//         if ($temp[$i] !== $temp2[$i]) {
//             return false;
//         }
//     }
//     return true;

// Best Solution:

$x = 12521;

function isPalindrome($x)
{
    if ($x < 0 || $a = 0 === $x % 10 && $x !== 0) return false;
    while ($a < $x) list($a, $x) = [$a * 10 + $x % 10, (int)($x / 10)];
    return $a === $x || $x === (int)($a / 10);
}

var_dump(isPalindrome($x));
