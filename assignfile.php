<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$path="practice/test/example/example.php";
if(file_exists($path)){
echo realpath($path);
}
else{
    echo " file does not exist in this path:  ".$path;
}


?>
</body>
</html>
