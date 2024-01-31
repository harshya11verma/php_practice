<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feof</title>
</head>
<body>
<?php
$myfile = fopen("rm.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  echo fgetc($myfile) ;
}
fclose($myfile);
?>
</body>
</html>