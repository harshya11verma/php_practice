
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

    <?php
    
    $nameErr=$emailErr=$genderErr="";
    $name=$email=$comment=$gender="";
  
    if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        if(empty($_POST["name"])){
            $nameErr="name is required";
             }
             
        else{
            $name=test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $nameErr="Only letters and white space allowed";
            }
        }
     
        
        if(empty($_POST["email"])){
            $emailErr="please enter email";
        }
        else{
            $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
        }
        
          if(empty($_POST["gender"])){
            $genderErr="fill gender";
          }
          else{
            echo "<br>";
            $gender=test_input($_POST["gender"]);
          }
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          } 
          
    }
    ?>
    <h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="form.php<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Name</label><input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
    <label>Email</label><input type="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
    <label>Gender</label><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   
    <button type="submit">Submit</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>