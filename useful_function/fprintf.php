<?php
    $num = 5000000;
    $city = "Yangon";
    $val = 50.5;


    $file_create = fopen("text.txt",'w');
    fprintf($file_create,"There are %u of people in %s.Double value is %f",$num,$city,$val);  

    //creating new file and writing text

?>