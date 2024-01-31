<?php
// function fib($n){
//     $fib=[0,1];
//     for($i=2;$i<$n;$i++){
//         $fib[$i]=$fib[$i-1] + $fib[$i-2];
//     }
//     return implode(", ",$fib);
// }
function fib($n){
    $first=0;
    $second=1;
    for($i=0;$i<$n;$i++){
        echo $first.", ";
        $temp=$first+$second;
        $first=$second;
        $second=$temp;
    }
}
$nmbr=10;
$res= fib($nmbr);
echo $res;
?>