<?php
// $x="Harshya";
// echo " Hi my name is $x";

// $arr=[1,2,3,4,5];
// echo implode(", ",$arr);

// $str = "Hello World! This Is an Example.";
// $capitalLetters = preg_replace('/[^A-Z]/', '', $str);
// echo "Capital Letters: " . $capitalLetters;

// function rev($str){
//     $exstr=explode(" ",$str);
//     $rev=array_reverse($exstr);
//     return implode(" ",$rev);
// }
// $str="Hi how are you";
// $res=rev($str);
// echo  $res;

// function addspace($str){
//     $chr=str_split($str);
//     $res=implode(" ",$chr);
//     return $res;
// }
// function inc($str){
//     $spc=addspace($str);
//     $ex=str_split($spc);
//     for($i=0;$i<strlen($spc);$i++){
        
//     }
    
//     return $ex;
// }
// $str="aXnzf";

// $result=inc($str);
// echo $result;

$inputString="aXnzf";
$output=strtr($inputString,"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPUVWXYZ","bcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPUVWXYZa");
echo $output;




?>