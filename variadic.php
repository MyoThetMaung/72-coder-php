<?php

    //variadic can access many parameters and use any numbers of parameters we wanna use

    function varia(...$var){
        echo $var[0][2];
    }
    $arr = [["one","two","hello"],"morning","evening"];
    varia($arr);

?>