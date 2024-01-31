<?php
//Problem: Sum of Even Numbers in a Range
function sumevenRange($start,$end){
    if($start>$end){
        return "invalid range";
    }
    $sum=0;
    for($i=$start;$i<$end;$i++){
        if($i%2==0){
            $sum+=$i;
        }
    }
    return $sum;
}
$strt=1;
$end=20;
$res=sumevenRange($strt,$end);
echo "The sum of even numbers from $strt to $end is: $res";
?>