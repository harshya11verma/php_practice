<?php
function arrayops($arr){
    $sum= array_sum($arr);
    $product = array_product(array_filter($arr, function ($value) {
        return $value !== 0;
    }));
    return ['sum'=>$sum,'product'=>$product];
}
$array=array(1,2,3,4,4,5);
$res=arrayops($array);
echo "Sum:{$res['sum']},Product:{$res['product']}";
?>