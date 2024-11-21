<?php
// function adalah suatu cara untuk kita dalam
// memodularisasi codingan kita 

// bikin kalkulator 
// function memiliki return type 
// 1. void artinya dia ga return value apa apa 
// 2. non void -> int, string,float,bool 
function addData($value1,$value2): mixed{
    return $value1+$value2;
}

function CheckLengthString($myString){
    echo "your string length is : " . strlen($myString) ."\n";
}

function CheckLengthArray($myArray){
    echo "your array length is : " . count($myArray) ."\n";
}
// $result = addData(10,20);
// echo $result;
// echo addData(10,20);

$myArr = [1,2,4,5,6,7,8,9,9,4,4,4,44];
CheckLengthString("devinluize");
CheckLengthArray($myArr);

//build in function

//empty 
//empty digunakan untuk ngecek apakah suatu value kosong

$value ="";
var_dump(empty($value));
//isset
$value2 = 123;
if (isset($value2)){
    echo "variable is in set\n";
}
// var_dump(isset($value));

//toupper
// function untuk jadiin semua huruf kita huruf besar
echo strtoupper("hallo semua \n");

//tolower
echo strtolower("INI HARUSNYA HURUF BESAR SEMUA");

//explode
//suatu function untuk ngepecah suatu string menjadi array berdasarkan delimitier tertentu

$myString = "algoprog, bahasaindonesia, matamatika diskrit";
$myStringArray = explode(",", $myString);

print_r($myStringArray);

//implode
// ini untuk gabungin array menjadi string 
$myNewString = implode("_", $myStringArray);
echo $myNewString . "\n";

//strreplace
//untuk mengganti suatu text atau suatu string didalam string
$myString = "the sky is blue";
$myString = str_replace("blue","yellow", $myString);
echo $myString;