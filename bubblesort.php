<?php
function bubbleSort($arr){
    $n=count($arr);
    for($i=0;$i<$n-1;$i++){
        // $swap=false;
        for($j=0;$j<$n-$i-1;$j++){
            if($arr[$j]>$arr[$j+1]){
                $t=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$t;
                // $swap=true;
            }
        }
        
        
    }
    return $arr;
    
}
$array=[34,5,43,56,8];
$res=bubbleSort($array);
echo "Original Array: " . implode(", ", $array) . "<br>";
echo "Sorted Array: " . implode(", ", $res);


?>