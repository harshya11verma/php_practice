<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unix</title>
</head>
<body>
    <?php
    $d1=strtotime("11 july");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are $d2"." until your bday" ;
    ?>
</body>
</html>