<?php

    function varia(...$var){
        echo $var[0][10] ?? "second one is working";                 //First, left condition is checked. if not right, go on right check
    }
    $arr = [["one","two","hello"],"morning","evening"];
    varia($arr);

?>