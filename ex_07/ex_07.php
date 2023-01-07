<?php

function get_angry_dog($nbr) {
    $content = "";
    for ($i = 0; $i<$nbr; $i++) {
    $content .= "woof";
}
return $content."\n";
}

echo(get_angry_dog(3))

?>




