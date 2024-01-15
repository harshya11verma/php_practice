<?php
include_once("config.php");
//echo "outside if";
//if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST['submit'])){
    // echo "inside if";
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$comment=$_POST["comment"];


$res= mysqli_query($conn,"INSERT INTO form(name,email,gender,comment) 
 VALUES('$name','$email','$gender','$comment')");
if($res){
   
    header("location: form1.php");
}
else{
    echo "connection failed";
    echo mysqli_error($conn);
}

mysqli_close($conn);
}
?>