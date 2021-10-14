<?php
    /*
    md5
        true => Raw 16 character binary format
        false => Default 32 character hex number

    sha1
        true => Raw 20 character binary format
        false => Default 40 character hex number

    crypt
        Return hashed string using DES,Blowfish or D5 Algorithms
    */

    $pass = 1234567;

    $pass = md5($pass,true);                            //secure
    $pass = sha1($pass,false);                          //more secure
    $pass = crypt($pass,$pass);                         //most secure

    echo $pass;

?>