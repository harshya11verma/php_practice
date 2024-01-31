<?php
session_start();
function countvisit(){
    if(!isset($_SESSION["visit_count"])){
        $_SESSION["visit_count"]=1;
    }
    else{
        $_SESSION["visit_count"]++;
    }
    setcookie("visit_count_cookie",$_SESSION["visit_count"],time()+86400,"/");
}
if(isset($_COOKIE["visit_count_cookie"])){
    $visitcount=$_COOKIE["visit_count_cookie"];
}
else{
    $visitcount=0;
}
countvisit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Again!</title>
    <style>
        h1{
            color: black;
            font-weight: bold;
            background-color: red;
            text-align: center;
            height: 250px;
            margin: auto;
        }
        h2{
           background-color: yellow;
           color: black;
           text-align: center;
           
        }
        body{
            background-color: gray;
        }
        .php{
            background-color: black;
            color: aliceblue;
            text-align: center;
            height: 200px;
            /* margin: 100px; */
            font-size: large;
            padding: 100px;
        }
        span{
            color: green;
            font-weight: bold;
            height: 250px;
        }

    </style>
</head>
<body>
    <h1>WELCOME TO VISIT COUNTER</h1>
    <div class="php">
    <?php
    if($visitcount==0){
        echo " Hi this is your first visit on this site. ";
    }
    else{
        echo " You have visited this site <span>$visitcount</span> times before. ";
    }
    ?>
    </div>
    <h2>Kindly Referesh this page to check counts.</h2>
</body>
</html>