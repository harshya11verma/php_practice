<?php
function selectionSort($arr){
    $n=count($arr);
    for($i=0;$i<$n;$i++){
        $low=$i;
        for($j=$i+1;$j<$n;$j++){
            if($arr[$j]<$arr[$low]){
                $low=$j;
            }
        }
        if($arr[$i]>$arr[$low]){
            $temp=$arr[$i];
            $arr[$i]=$arr[$low];
            $arr[$low]=$temp;
        }
    }
    return $arr;
}
$arr=[23,43,2,45,66,22];

echo "Sorted array equal to: <br>";
$res=selectionSort($arr);
print_r($res);

?>