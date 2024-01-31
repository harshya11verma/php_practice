<?php
function filodds($numbers){
    $evenmbr=[];
    $oddnmbr=[];
    foreach($numbers as $number){
        if($number%2==0){
            $evenmbr[]=$number;
            $res=array_sum($evenmbr);
        }
        else{
            $oddnmbr[]=$number;
            $res2=array_sum($oddnmbr);
        }
    }
    echo "array numbers:".implode(", ",$numbers)."<br><br>";
    echo "even numbers :" .implode(", ",$evenmbr)."<br>";
    echo "even numbers sum  :".$res."<br><br>";
    echo "odd numbers :" .implode(", ",$oddnmbr)."<br>";
    echo "odd numbers sum  :".$res2;

}
$arr=[2,3,4,5,6,7,8];
filodds($arr);
?>