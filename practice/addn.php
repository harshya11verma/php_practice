<?php
function addn($n){
    $args=func_get_args();
    $sum=array_sum($args);
    echo "The sum of arguments element numbers ".implode(", ",$args)." is: <br> $sum";
}
$res= addn(1,2,3,"hello",4,5);
echo $res;
?>