<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pregmatch</title>
</head>
<body>
    <?php
    $str="Amidst the tranquil echoes of nature,
     a gentle breeze whispered through the leaves of ancient trees. 
     The soft murmur of a distant stream added a soothing melody to the symphony of the forest.
      Shafts of golden sunlight danced between the branches, 
      casting a warm glow on the moss-covered ground.";
    $pattern="/tranquil/i";
    echo preg_match($pattern,$str);
    ?>
<?php
    $str="Amidst the tranquil echoes of nature,
     a gentle breeze whispered through the leaves of ancient trees. 
     The soft murmur of a distant stream added a soothing melody to the symphony of the forest.
      Shafts of golden sunlight danced between the branches, 
      casting a warm glow on the moss-covered ground.";
    $pattern="/ee/i";
    echo preg_match_all($pattern,$str);
    ?>
    <?php
    $str="Amidst the tranquil echoes of nature,
     a gentle breeze whispered through the leaves of ancient trees. 
     The soft murmur of a distant stream added a soothing melody to the symphony of the forest.
      Shafts of golden sunlight danced between the branches, 
      casting a warm glow on the moss-covered ground.";
    $pattern="/a/i";
    echo preg_replace($pattern,"x",$str);
    ?>
</body>
</html>