<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
        Upload image: 
        <input type="file" name="filetoupload" id="filetoupload" >
        <input type="submit" name="submit" value="upload image">

    </form>
    <?php
    $target_dir="SAMPL/";
    $target_file=$target_dir.basename($_FILES["filetoupload"]['name']);
    $uploadok=1;
    $imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST['submit'])){
        $check= getimagesize($_FILES['filetoupload']['tmp_name']);
        if(!$check==false){
            echo "it is a valid image".$check['mime'];
            $uploadok=1;
        }
        else{
            echo "file is not image";
            $uploadok=0;
        }

    }

    ?>
</body>
</html>