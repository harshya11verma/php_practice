<?php
$multiarray=[
    ["name"=>"Johny","age"=>40],
["name"=>"Scarlet","age"=>25],
["name"=>"Sam","age"=>19]];
function sortbyage($a,$b){
    return $a['age']-$b['age'];
}
usort($multiarray,'sortbyage');
print_r($multiarray);

?>