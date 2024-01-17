<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstract class</title>
</head>
<body>
    <?php
    abstract class Parentclass{
        abstract protected function prefix($name);
    }
    class childclass extends Parentclass{
        public function prefix($name,$sep=".",$greet="Dear"){
            if($name=='Sonu'){
                $prefix="Mr";
            }
            elseif($name=='Sonia'){
                $prefix="Mrs";
            }
            else{
                $prefix="";
            }
            return "{$greet}{$prefix}{$sep}{$name}";
        }
    }
    $obj=new childclass;
    echo $obj->prefix('Sonu');
    echo "<br>";
    echo $obj->prefix('Sonia');
    echo "<br>";
    echo $obj->prefix('Raju');

    ?>
</body>
</html>