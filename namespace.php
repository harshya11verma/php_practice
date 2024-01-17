<?php
include_once ('namespace2.php');
$obj=new Html\table();
$obj->title='smpl';
$obj->nrows=5;

$row=new Html\row();
$row->numcells=3;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>namespace</title>
</head>
<body>
    <?php
    $obj->message();
    $row->message();
    ?>
    
</body>
</html>