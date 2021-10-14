<?php


    $var = 'saimon mtmg';
    $bol = preg_match("/mtmg/",$var);                         // % + ! # / anything can be used
    /*
        ^sai => true if starts with sai
        mg$ => true if ends with mg
        ^sai$ => true if start and end is sai
    */
    echo $bol ? "true" : "false";

    $bool = preg_match("/^[a-z]/",$var);                    // true if start a letter with a to z
    echo $bool ? "true" :  "false";

    $bo = preg_match("/s+/",$var);                          // true if a 'p' or
    $bo = preg_match("/s*/",$var);                          // true if more than a 'p'
    $bo = preg_match("/s{2,3}/",$var);                      // true if between two to three 'p'
    $bo = preg_match("/s{2,}/",$var);                      // true if at least two 'p'
    echo $bo ? "true" :  "false";


?>