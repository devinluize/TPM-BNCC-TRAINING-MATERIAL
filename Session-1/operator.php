<?php

// - operator (!, ==, !=, >, <, >=, <=, ??)

//arithmetic opertor ( + - * / %)

$value1 = 123;
$value2 = 340;

// echo $value1 + $value2 . "\n";
// echo $value1 - $value2 . "\n";
// echo $value1 * $value2 . "\n";
// echo $value1 / $value2 . "\n";
// echo $value1 % $value2 . "\n";

//assignment operator 
// intinya dia untuk ngeasign suatu value ke value lain 

// aku mau tambain value 1 dengan angka 400
// $value1 = $value1 + 400;
$value1 += 400;
$value2 -= 230;

//  kita lejut ke operator perbandingan (==,<=,>=,<.>,===,!==)
// 1. == untuk value jika dia sama
//1. kita anggap sebagai true 
// 0  kita anggap sebagai false
// echo $value1 . "......" . $value2 ."\n";
// var_dump($value1 == $value2);
// var_dump($value1 <= $value2);
// var_dump($value1 >= $value2);
// var_dump($value1 < $value2);
// var_dump($value1 > $value2);

// var_dump(12 == "12");
// // === -> berfungsi untuk membandingkan secara identik termasuk ke tipe data
// var_dump(12 === "!2");

// var_dump(12 !== "!2");


//logical operator
// && -> dan |and
// || -> false
// ! -> not 
 echo $value1 . "......" . $value2 ."\n";
// T && F
var_dump($value1!=$value2 && $value1 < $value2);
// T && T
var_dump($value1!=$value2 && $value1 > $value2);
// || or 
// T || F
var_dump($value1!=$value2 || $value1 < $value2);
// T || T
var_dump($value1!=$value2 || $value1 > $value2);
//F || F
var_dump($value1==$value2 || $value1 < $value2);
