<?php
function bubsort($arr){
    $n=count($arr);
    for($i=0;$i<$n-1;$i++){
        for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$temp;
            }
        }
    }
    return $arr;
}
$array=[34,21,55,65,64];
$res=bubsort($array);
echo "Array to be sorted: ".implode(", ",$array)."<br>";
echo "Sorted Array: ".implode(", ",$res);
?>