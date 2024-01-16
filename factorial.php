<?php
function facto($n){
    $result=1;
    for($i=1;$i<=$n;$i++){
      $result*=$i;
    }
    return $result;
}
$num=5;
$fact= facto($num);
echo $fact;
?>