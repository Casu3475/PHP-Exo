<?php

$arr = array(1, 2, 3, 4, "Nathan");

function print_array($arr){
foreach ($arr as &$value) {
    echo "$value\n";
}
}


?>

