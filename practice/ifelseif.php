<?php
//Problem: Time of Day Greeting
function greetings($time){
    if($time<12){
        echo "Hi Good Morning";
    }
    elseif($time>12 && $time<16){
        echo "Hi Good Afternoon";
    }
    elseif($time>17 && $time<20){
        echo "Hi Good Evening";
    }
    elseif($time>21 && $time<24){
        echo"good night";
    }
    else{
        echo "Not valid time";
    }
}
$times=[4,13,18,22,33];
foreach($times as $time){
    $res=greetings($time);
    echo "Time: $time <br>";
    echo $res."<br><br>";
}
?>