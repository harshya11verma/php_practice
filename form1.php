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
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="get" action="credentials.php" enctype="multipart/form-data">
    <label>Name</label><input type="text" name="name">
    
  <br><br>
    <label>Email</label><input type="email" name="email">
    
  <br><br>
    <label>Gender</label><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   
    <br><br>
    <button type="submit" name="submit" value="submit">submit</button>
    <!-- Upload file:
    <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit"> -->

</form>
</body>
</html>