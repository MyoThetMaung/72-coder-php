<?php


$string = "There are 50000 of people in Yangon.Double value is 50.5";  

echo strtoupper($string);               //all letters to uppercase
echo "<br>"; 
echo strtolower($string);               //all letters to lowercase
echo "<br>"; 
echo ucwords($string);                  //beginning of word will be uppercase
echo "<br>"; 
echo lcfirst($string);                  //beginning of word will be lowercase
echo "<br>"; 



$str = 'hello world my name is saimon world';
echo strpos($str,'world')."<br>";       //show word index
echo stripos($str,"world")."<br>";      //show word index but case sensitive  

echo strrpos($str,'world')."<br>";      //same as strpos but show not first one
echo strripos($str,"world");            //show word index but case sensitive 


?>