<?php

    //compare string length
    
    $str_compare_1 = "Whatareyoudoing";
    $str_compare_2 = "Whatareyoudoing";
    $str_compare_3 = "Whatareyoudoingbaby";

    echo strcmp($str_compare_1,$str_compare_2);
    echo "<br>";
    echo strcmp($str_compare_1,$str_compare_3);
    echo "<br>";
    echo strcmp($str_compare_3,$str_compare_1);
    

?>