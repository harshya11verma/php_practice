<?php
function strp($str,$srch){
    if(strpos($str,$srch)==true){
        return 1;
    }
return -1;
}
$str="Today is a good day";
$res=strp($str,'good');
echo $res;

?>