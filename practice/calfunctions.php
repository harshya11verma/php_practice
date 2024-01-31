<?php
function sum($n1,$n2){
    $res=$n1+$n2;
    echo "The sum of $n1 and $n2 is: <br> $res <br><br>";
}
function sub($n1,$n2){
    $res=$n1-$n2;
    echo "The subtraction of $n1 from $n2 is: <br> $res<br><br>";
}
function product($n1,$n2){
    $res=$n1*$n2;
    echo "The Product of $n1 and $n2 is: <br> $res<br><br>";
}
function divide($n1,$n2){
    $res=$n1/$n2;
    echo "The Quotient of $n1 and $n2 is: <br> $res<br><br>";
}
function raisepower($n1,$n2){
    $res=$n1**$n2;
    echo "$n1 raised power $n2 is: <br> $res<br><br>";
}
function modulas($n1,$n2){
    $res=$n1%$n2;
    echo " modulas of $n1 and $n2 is: <br> $res";
}
$n1=100;
$n2=20;
sum($n1,$n2);
sub($n1,$n2);
product($n1,$n2);
divide($n1,$n2);
raisepower(2,5);
modulas($n1,6);

?>