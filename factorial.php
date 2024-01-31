<?php
// function facto($n){
//     $result=1;
//     for($i=$n;$i>1;$i--){
//       $result*=$i;
//     }
//     return $result;
// }
function facto($n){
  if($n<1){
    return 1;
  }
  else{
   return $n*facto($n-1);
  }
}
$num=6;
$fact= facto($num);
echo $fact;
?>