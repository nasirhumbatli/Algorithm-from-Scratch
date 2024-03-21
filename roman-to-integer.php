<?php

// DESCRIPTION: https://leetcode.com/problems/roman-to-integer/

// Solution: #1


// $roman = [
//     'I' => 1,
//     'V' => 5,
//     'X' => 10,
//     'L' => 50,
//     'C' => 100,
//     'D' => 500,
//     'M' => 1000,
// ];

// $input = str_split($s);
// $result = 0;

// for ($i = 0; $i < count($input); $i++) {
//     if ($roman[$input[$i]] < @$roman[$input[$i + 1]]) {
//         $result += $roman[$input[$i + 1]] - $roman[$input[$i]];
//         $i++;
//     } else {
//         $result += $roman[$input[$i]];
//     }
// }

// return $result;

// Best Solution: #2

// $roman = [
//     'I' => 1,
//     'V' => 5,
//     'X' => 10,
//     'L' => 50,
//     'C' => 100,
//     'D' => 500,
//     'M' => 1000,
// ];

// $result = 0;
// $temp = 0;
// for ($i = 0; $i < strlen($s); $i++) {
//     if ($roman[$s[$i]] > $temp && $i > 0) {
//         $result = $result - $temp * 2 + $roman[$s[$i]];
//     } else {
//         $result += $roman[$s[$i]];
//         $temp = $roman[$s[$i]];
//     }
// }
// return $result;

// Best Solution: #3

$s = "IVXIV";

function romanToInt($s)
{
    $roman = strtr(
        $s,
        [
            'M' => '1000,',
            'CM' => '900,',
            'D' => '500,',
            'CD' => '400,',
            'C' => '100,',
            'XC' => '90,',
            'L' => '50,',
            'XL' => '40,',
            'X' => '10,',
            'IX' => '9,',
            'V' => '5,',
            'IV' => '4',
            'I' => '1,'
        ]
    );
    return array_sum(explode(',', $roman));
}

var_dump(romanToInt($s));
