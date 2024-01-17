<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db = "db2";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql="SELECT name,email,gender,comment from form";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)) {
        echo " - Name: " . $row["name"]. " " ."Email:". $row["email"]." ".
        "Gender:".$row["gender"]." "."Comment:".$row["comment"]. "<br>";
      }
}
else {
  echo "0 results";
}

mysqli_close($conn);

?>