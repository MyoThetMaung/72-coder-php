<?php

//create_function("","");  first parameter is for parameters. second parameter is for code

// $first = create_function("$hi","echo 'welcome'.$hi.'to you';");
// $first("good morning");

// $second = create_function("$one,$two","print_r($one.$two);");
// $second("hello","world");


//function writing other method
    $fun = function ($name){
        echo $name."<br>";
    };
    $fun("saimon");


//Anonymous function
    $num =20;
    $harhar = function (&$num){                                                             //work within function variable
        $num = 50;
        echo "i am anonymous function and number is $num";
    };

    echo $num."<br>";
    $harhar($num);
    echo "<br>".$num."<br>";


//lambda function
    function doIt($para1,$para2,$para3){
        $total = $para1 + $para2;
        $para3($total);

    }
    doIt(1,2,function ($something){                                                             //have no function name
        echo $something."<br>";
    });   


//Closure
    $number = 24;
    function doSomething($some){
        $some();
    }

    doSomething(function () use($number){                                                       //input parameter in "use()" function
        echo "this is number {$number}";
    });




?>

