<?php
function factr($n){
    if($n==0 || $n==1){
        return 1;
    }
    return $n*factr($n-1);
}
$res=factr(6);
echo $res;
?>