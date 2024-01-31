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

echo "<h1>Select query</h1>";

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
echo "<h1> Where operation querry</h1> <br> ";

$sql2= "SELECT name,email FROM form WHERE name='harshya'" ;
$res2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($res2)>0){
  while($row=mysqli_fetch_assoc($res2)){
    echo "Name: ".$row["name"]." "." Email: ".$row["email"]."<br>" ;
  }
}
else{
  echo" 0 results";
}
echo "<h1> order by operation querry</h1> <br> ";

$sql3= "SELECT name,email FROM form ORDER BY name" ;
$res3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($res3)>0){
  while($row=mysqli_fetch_assoc($res3)){
    echo "Name: ".$row["name"]." "." Email: ".$row["email"]."<br>" ;
  }
}
else{
  echo" 0 results";
}
echo "<h1> order by desc operation querry</h1> <br> ";

$sql4= "SELECT name,email FROM form ORDER BY name DESC" ;
$res4=mysqli_query($conn,$sql4);
if(mysqli_num_rows($res4)>0){
  while($row=mysqli_fetch_assoc($res4)){
    echo "Name: ".$row["name"]." "." Email: ".$row["email"]."<br>" ;
  }
}
else{
  echo" 0 results";
}
echo "<h1> Delete operation querry</h1> <br> ";

$sql5= "DELETE FROM form WHERE name='Jarrod Bernard'" ;
$res5=mysqli_query($conn,$sql5);

echo "<h1> Update operation querry</h1> <br> ";

$sql6= "UPDATE form SET name='HarshyaVerma' where email='hrshya@dfdf.com'" ;
$res6=mysqli_query($conn,$sql6);
if($res6){
  echo" Record updated successfully ";
}
else{
  echo "error updating record";
}
mysqli_close($conn);

?>