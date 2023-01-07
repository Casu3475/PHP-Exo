<?php

function my_print_args(...$args) {  


   for ($i=1; $i < count($args[0]); $i++) {
    echo $args[0][$i]."\n";

}
}

?>

