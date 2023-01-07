<?php
function my_get_args(...$var){  
    $my_array=array();
    foreach ($var as $element) {
        $my_array []= $element;
    }
    return $my_array;
    
}


?>
