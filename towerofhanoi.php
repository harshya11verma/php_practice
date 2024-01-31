<?php
function toh($n,$source,$help,$destination){
    if($n==1){
        echo "move  1 from $source to $destination<br>";
        return;
    }
     toh($n-1,$source,$destination,$help);
     echo "move $n from $source to $destination <br>";
     toh($n-1,$help,$source,$destination);
}
$ndisks=4;
echo "The solution of toh for $ndisks is:<br>";
 toh($ndisks,'A','B','C');
?>