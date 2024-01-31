<?php
function intavrg($arr){
    $int=array_filter($arr, 'is_int');
    $count=count($int);
    $sum=0;
    foreach($int as $value){
        $sum+=$value;
    }
    return $sum/$count;
}
$array=[1,1.1,2,"teddy",3,4,5];
$res=intavrg($array);
echo  "The average of array elements".implode(", ",$array)." is: "."<br>". $res;
?>