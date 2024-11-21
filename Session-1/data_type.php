<?php

//declare variable 
// $ nama_variable;
$value;
$string_data_Type = "tpm_bnnc";
$int_data_type = 12;
$float_data_type = 12.3;
$boolan_data_type = true;

// array adalah suatu kumpulan data
// di php mulai dari index ke 0
// [2,5,6,8,9];
// index ke 0 nya berarti -> 2
// index ke 1 nya berarti -> 5
//declare array di php
//2 cara declare array
//cara 1
$myArr = [1,2,3,"devin","tpm",true,1.123];
//cara 2
$myArr2 = array(1,2,3,"devin","tpm",true,1.123);

// tipe object -> 
$myObj = [
    "nama" =>"devin",
    "semester" => 7,
    "mahasiswa_aktif" =>true
];
// yang depan sebagai index yang belakang sebagai value
//echo -> kita gunakan sebagai cara untuk mengoutput value atau nilai dari suatu variable 
// echo "hello world\n";
// // . -> concat -> menggabungkan sesuatu 
// echo $string_data_Type . "\n";
// echo $int_data_type . "\n";
// echo "nama saya adalah : " . $string_data_Type . "\n";
// echo $float_data_type . "\n";
// echo $boolan_data_type . "\n";

// echo $myArr[3];
//cara print kedua -> cara ngeprint object atau array 
print_r($myArr);
print_r($myObj);

echo $myArr[6] . PHP_EOL;
echo $myObj["mahasiswa_aktif"] . PHP_EOL;

// 1 cara yang tadi var_dunp -> adalah suatu cara untuk mengoutput value berserta tipe datanya 
var_dump($string_data_Type);

var_dump($myArr);
?>