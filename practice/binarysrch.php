<?php
function binarySearch($arr,$l,$h,$target){
    while($l<$h){
        if($l>$h){
            return -1;
        }
        $mid=($l+$h)/2;
        if($arr[$mid]==$target){
            return floor($mid);
        }
        elseif($arr[$mid]>$target){
            return binarySearch($arr,$l,$mid-1,$target);
        }
        else{
            return binarySearch($arr,$mid+1,$h,$target);
        }
        
    }

return -1;
}

$array=[23,56,78,90,101];
$n=count($array);
$target=90;
$res=binarySearch($array,0,$n-1,$target);
if($res==-1){
    echo "element not in this list";
}
else{
    echo "element found at index: ".$res;
}
?>