<?php
function average($arr){
    $count=count($arr);
    $sum=0;
    foreach($arr as $number){
        $sum+=$number;
    }
    return $sum/$count;
}
$array=[1,2,3,4,5];
$res=average($array);
echo "The average of array elements".implode(", ",$array)." is: "."<br>". $res;
?>