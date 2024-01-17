<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    <?php
    interface Animal{
        public function makesound();
    }
    class dog implements Animal{
        public function makesound(){
            echo "voof";
        }
    }
    class cat implements Animal{
        public function makesound(){
            echo "meow";
        }
    }
    class horse implements Animal{
        public function makesound(){
            echo "eee";
        }
    }
    $dog=new dog();
    $cat=new cat();
    $horse=new horse();
    $animal= array($dog,$cat,$horse);
    foreach($animal as $animal){
        $animal->makesound();
    }

    ?>
</body>
</html>