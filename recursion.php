<?php 
 
 function recursion($y){
    if($y===10){
        return;
    }
    else{
    $x=$y;
    echo nl2br("\n $x");
    $x++;
    recursion ($x);
        }
}
recursion(1);
?>