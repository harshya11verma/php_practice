<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pangram</title>
</head>
<body>
    <?php
    function ispangram($sen){
        $sen=strtolower($sen);
        $lettercount=count_chars($sen,1);

        for($i=ord('a');$i<ord('z');$i++){
            if(!isset($lettercount[$i])){
                return false;
            }
        }
        return true;
    }
    $v="The quick brown fox jumps over the lazy dog";
    $res=ispangram($v);
    if($res){
        echo "sentence is pangram";
    }
    else{
        echo "not pangram";
    }
    ?>
</body>
</html>