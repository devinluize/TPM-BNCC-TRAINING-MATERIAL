<?php

// 1. for loop 
// 2. while 
// 3. do while 
// 4. for each 
// -=-=-=-=-=-=-=-=--=-=-=
// 1. for loop 
// 2. foreach 

// 1.for loop -> kita gunakan ketika kita sudah tau mau melakukan berapa banyak perulangan 
// contoh : aku mau input sebanyak n kali 
// lalu aku mau looping sebanyak n kali 

// $n = (int)trim(fgets(STDIN));

// terdiri dari 3 bagian
// for (declaration;condition;increment){

// }
$myArr = [4,2,5,1,2,5,2,"devin","luize",12.1234,true];

// for($i=0;$i<$n;$i+=1){
//     // echo $i . "\n"; 
//     echo $myArr[$i];
// }

// foreach -> dia bakal ngelakuin iterasi terhadap $myArr

foreach($myArr as $obj){
    echo $obj . "\n";
}