A: 90 - 100
B: 80 - 89
C: 70 - 79
D: 60 - 69
F: 0 - 59
<?php
function grades($grade){
    switch(true){
        case $grade>90:
            echo "Congrats you got A grade";
            break;
            case $grade>80 && $grade<89:
                echo "You got B grade";
                break;
                case $grade>70 && $grade<79:
                    echo "You got C grade";
                    break;
                    case $grade>60 && $grade<69:
                        echo "You got D grade";
                        break;
                        default:
                        echo "You got F grade";

    }

}
$grades=[35,86,91,55,74];
foreach($grades as $grade){
    echo "<pre>"."You got $grade marks and your grade is: ". grades($grade)."</pre>";
}
?>