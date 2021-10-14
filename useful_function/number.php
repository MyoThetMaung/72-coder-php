<?php

    $number = 500000;

    echo number_format($number);                //default
    echo "<br>";

    echo number_format($number,'2');            // two zeros adding
    echo "<br>";

    echo number_format($number,'2','#','%');    

?>