<?php
include_once("config.php");

if(isset($_POST['submit'])){
    // echo "inside if";
$name=$_GET["name"];
$email=$_GET["email"];
$gender=$_GET["gender"];
$comment=$_GET["comment"];





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