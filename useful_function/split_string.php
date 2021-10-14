<?php

    $split_string = "hello world what is up guys?";

    print_r(str_split($split_string));                      //normal split
    echo "<br>";

    echo str_word_count($split_string);                     //word count
    echo "<br>";

    echo substr($split_string,5,strlen($split_string));     //split as we like
    echo "<br>";

    echo chunk_split($split_string,4,'%');                  //after 4 letters, split with %
?>