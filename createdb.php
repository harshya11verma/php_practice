<?php
$conn= mysqli_connect("localhost","root","password") or die( mysqli_connect_error());
$sql="CREATE DATABASE hello";
if(mysqli_query($conn,$sql)){
    echo "data base created successfully";
}
else{
    echo " database creation error";
}
mysqli_close($conn);
?>