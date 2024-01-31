<?php
// $arr=[5,6,7];
// echo implode(", ",$arr);

// $in='1.12-2002';
// $arr=str_replace(array('.','-'),'/',$in);
// echo $arr;

// $vr1="php";
// $vr2="php is a good lang,php";
// $pattern="/^php$/";
// $res1=preg_match($pattern,$vr1);
// $res2=preg_match($pattern,$vr2);
// if($res1){
//     echo  "match found";
// }
// else{
//     echo "not found";
// }
// if($res2){
//     echo  "match found";
// }
// else{
//     echo "not found";
// }

// echo "fibonacci series";
// function fibo($n){
//     $fib=[0,1];
//     for($i=2;$i<$n;$i++){
//         $fib[$i]=$fib[$i-1] + $fib[$i-2];
//     }
//     return $fib;
// }
// $term=20;
// $res= fibo($term);
// echo implode(", ",$res);

// function isprime($num){
//      if($num<2){
//         return false;
//      }
//      else{
//         for($i=2;$i<sqrt($num);$i++){
//             if($num%$i==0){
//                 return false;
//             }
//         }
//      }
//      return true;
// }
// function genprime($n){
//     $num=2;
//     $primes=[];
//     while(count($primes)<$n){
//         if(isprime($num)){
//             $primes[]=$num;
//         }
//         $num++;
//     }
//     return $primes;
// }

// $term=20;
// $res=genprime($term);
// echo implode(", ",$res);

// echo "<br>";
//     echo "<h1>Star pyramid</h1> ";
//     function pyramid($n){
//        for($i=1;$i<=$n;$i++){
//            for($j=1;$j<=(2*$n)-1;$j++){
//             if($j>=$n-($i-1) && $j<=$n+($i-1)){
//                 echo "* ";
//             }
//             else{
//                 echo "  ";
//             }
//            }
//            echo "<br>";
//        }
        
//     }
//     $n=5;
//     pyramid($n);
// echo "bubblesort";
// function bubbleSort($arr){
//     $n=count($arr);
//     for($i=0;$i<=$n-1;$i++){
//         for($j=0;$j<=$n-$i-1;$j++){
//             if($arr[$j]>$arr[$j+1]){
//                 $t=$arr[$j];
//                 $arr[$j]=$arr[$j+1];
//                 $arr[$j+1]=$t;
//             }
//         }
//     }
//     return $arr;
// }
// $array=[23,34,4,56,6];
// $res=bubbleSort($array);
// echo "array: ". implode(", ",$array);
// echo "Sorted array: ". implode(", ",$res);
// $price = 19.99;

// Using sprintf with width and precision
// $result = sprintf("Price: $%05.2f", $price);

// Output: "Price: $19.99"
// echo $result."<br>";
// $s="Test string1\nTest string2";
// echo $s;

// echo "The time is " . date("h:i:sa");
// echo readfile("rm.txt");
$r= fopen("rm.txt","r");
echo fread($r,filesize("rm.txt"));
// echo $r;
fclose($r);
?>