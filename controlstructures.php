<?php

// Function to classify the grade
function classifyGrade($grade) {
    if($grade>90){
        echo " congrats you got A grade ";
    }
    elseif($grade>80 && $grade<89){
        echo "  you got B grade ";
    }
    elseif($grade>70 && $grade<79){
        echo "  you got C grade ";
    }
    elseif($grade>60 && $grade<69){
        echo "  you got D grade ";
    }
    else{
        echo " you got F grade";
    }
}


$studentGrade = 85; // You can change this value for testing
echo "Student's numerical grade: $studentGrade<br>";
echo "Grade Classification: " . classifyGrade($studentGrade);

?>
A: 90 - 100
B: 80 - 89
C: 70 - 79
D: 60 - 69
F: 0 - 59