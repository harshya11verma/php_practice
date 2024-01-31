<?php
function linearSearch($arr,$n,$x){

    for($i=0;$i<$n;$i++){
        if($arr[$i]==$x){
            return $i;
        }
    }
    return -1;

}
$array=[34,4,64,7,23,22,3,5,8];
$size=count($array);
$el=7;
$res= linearSearch($array,$size,$el);
if($res==-1){
    echo "element not present in array";
}
else{
    echo "element present at index: ".$res;
}

?>