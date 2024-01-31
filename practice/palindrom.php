<?php
function palindrome($str){
    $str=strtolower(str_replace(" ","",$str));
    if($str==strrev($str)){
        echo " It is a palindrome string.";
    }
    else{
        echo " String is not palindrome";
    }
    
}
$s=" Never odd or even";
$ns="hola";
$res=palindrome($s);
echo $res;
?>