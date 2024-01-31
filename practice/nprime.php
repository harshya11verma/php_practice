<?php
function isprime($num){
    if($num<2){
        return false;
    }
    for($i=2;$i<sqrt($num);$i++){
        if($num%$i==0){
            return false;
        }
    }
    return true;
}
function genprime($n){
    $primes=[];
    $num=2;
    while(count($primes)<$n){
        if(isprime($num)){
            $primes[]=$num;
        }
        $num++;
    }
    return "Prime numbers for first $n natural numbers are : <br>". implode(", ",$primes);
}
$nmb=20;
echo genprime($nmb);
?>