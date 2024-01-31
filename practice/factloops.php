<?php
echo "factorial by For loop <br>";
$number=5;
$result=1;
for($i=$number;$i>1;$i--){
    $result*=$i;
}
echo $result;
?>
<?php
echo "factorial by While loop <br>";
$n=6;
$res=1;
$i=$n;

while($i>1){
    $res*=$i;
    $i--;
}
echo $res;
?>
<?php
echo "factorial by do-While loop <br>";
$nmb=7;
$r=1;
$i=$nmb;
do{
    $r*=$i;
    $i--;
}while($i>1);
echo $r;
?>