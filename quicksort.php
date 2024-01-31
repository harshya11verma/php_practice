<?php
function quickSort($arr){
    $length=count($arr);
    if($length<=1){
        return $arr;
    }
    else{
        $pivot=$arr[0];
        $left=$right=[];
        for($i=1;$i<$length;$i++){
            if($arr[$i]<$pivot){
                $left[]=$arr[$i];
            }
            else{
                $right[]=$arr[$i];
            }
        }


    }
    return array_merge(quickSort($left),[$pivot],quickSort($right));
}
$array = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
$sortedArray = quickSort($array);

echo "Original Array: " . implode(", ", $array) . "<br>";
echo "Sorted Array: " . implode(", ", $sortedArray);
?>