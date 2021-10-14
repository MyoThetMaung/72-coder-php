<?php

    $trim = '   Trim   ';
    $tri = trim($trim);                     //trim with 'space'
    echo strlen($tri);

    echo "<br>";

    $ltrim = '%%%LeftTrim';
    $ltri = ltrim($ltrim,'%');              //left trim with '%'
    echo strlen($ltri);

    echo "<br>";

    $rtrim = 'RightTrim&&&&';
    $rtri = rtrim($rtrim,'&');              //right trim with '&'
    echo strlen($rtri);

?>