<?php
function maxarray($arr){
    $max=$arr[0];
    $n=count($arr);
    for($i=0;$i<$n;$i++){
        if($arr[$i]>$max){
            $max=$arr[$i];
        }
    }
    return $max;
}
function minarray($arr){
    $min=$arr[0];
    $n=count($arr);
    for($i=0;$i<$n;$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    }
    return $min;
}
$array=[23,6,43,88,55,66,77];
echo "The Maximum element from array ".implode(", ",$array)." is: <br>". maxarray($array)."<br><br>";
echo "The Minimum element from array ".implode(", ",$array)." is:<br> ". minarray($array);
?>