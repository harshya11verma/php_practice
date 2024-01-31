<?php
function mergeSort($arr,$left,$right,$mid){
    $n=count($arr);
    $left=[];
    $right=[];
    if($n<1){
        return $arr;
    }
    if($left<$right){
       $mid=($left+$right)/2;
       for($i=0;$i<$n;$i++){
        if($arr[$i]>$arr[$i+1]){
            $right[]=$arr[$i];
            return mergeSort($arr,$mid+1,$r);
        }
        else{
            $left[]=$arr[$i];
            return mergeSort($arr,$left,$mid);
        }
       }
    }
    return array_merge(mergeSort($left),[$mid],mergeSort($right));

}
$array=[23,43,12,33,55];
$l=23;
$r=55;

$res=mergeSort($array,$l,$r,$mid);
echo implode(", ",$res);
?>