<?php

    //mail(to,subject,message,headers,parameters)

    $arr = ["saimon@localhost","agag@localhost","susu@localhost","ayeaye@localhost"];
    $to = implode(",",$arr);
    $subject = "PHP mail testing";
    $message = "hello thunderbird, i am testing mail with you";                                 //plain text sending         
    $message .= "<p style='color: green;'>I am green and i am html</p>";                        //html text sending         
    $header = "From: Myanmar@gmail.com\r\n";  
    $header.= "Content-Type:text/html";                               

    mail($to,$subject,$message,$header);                                                         //mail sending to thunderbird software
    

?>
