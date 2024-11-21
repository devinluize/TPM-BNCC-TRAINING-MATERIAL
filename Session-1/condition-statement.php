<?php
// flow program 

// yang paling basic ada 
// if, else if, else
// switch case
// ternary operator
// if -> seperti artinya jika 

// $gpa = 3.8;
// echo "masukan gpa anda : ";
// $gpa = (float)trim(fgets(STDIN));
// if ($gpa>=3.9){
//     //block of code 
//     echo "selamat anda summa cumlaude";
// }else if($gpa >3.7 && $gpa < 3.9){
//     echo "selamat anda magna cumlaude";
// }else{
//     echo "maaf anda tidak cumlaude";
// }
$name = "dennis";
switch ($name){
    case "devin":
        echo "halo devin";
        break;
    case "bncc" : 
        echo "hello bncc";
        break;
    case "luize" : 
        echo "hello luize";
        break;
    default:
        echo "kamu ga dikenal siapa ya?";
        break;
}