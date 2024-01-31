<?php
function binarySearch($arr,$x,$l,$h){
    while($l<=$h){
    if($l>$h){
        return -1;
    }
    $mid= ($l+$h)/2;
    if($arr[$mid]==$x){
        return floor($mid);
    }
    elseif($arr[$mid]>$x){
        return binarySearch($arr,$x,$l,$mid-1);
    }
    else{
        return binarySearch($arr,$x,$mid+1,$h);
    }
}
return -1;
}

$array=[22,34,56,78,89];
$n=count($array);
$el=78;
$res=binarySearch($array,$el,0,$n-1);
if($res==-1){
    echo "Element not present in array";
}
else{
    echo "element fount at: ".$res;
}
?>