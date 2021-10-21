<?php

    /*
    get and set
    class Obj{

        public function __get($name)
        {
            echo "my $name is saimon";                  //getting undefined name
        }

        public function __set($name, $value)            //can define one or more parameters
        {
            echo "my $name is ";
        }
    }

    $obj = new Obj();
    echo $obj -> name."<br>";
    echo $obj->name = 'Christ'."<br>";
    echo $obj -> value = 'Welcome'."<br>";
    */



    /*
    isset or unset
    class Index{
        public function __isset($isset)
        {
            echo "Your are trying to set or not of $isset property";
        }
        public function __unset($unset)
        {
            echo "Your are trying to unset or not of $unset property";
        }
    }
    $index = new Index();
    isset($index -> isset); echo "<br>";
    unset($index -> unset);
    */


    /*
    call and call_static
    class Call{
        public function __call($name, $arguments)
        {
            echo "You are calling none exit method $name with parameters"."<br>";
            print_r($arguments);
        }
        public static function __callStatic($name, $arguments)
        {   
            echo "You are calling static none exit method $name with parameters"."<br>";
            print_r($arguments);
        }
    }
    $call = new Call();
    $call->hey("saimon","love");

    Call::hello("good morning","good night");
    */


    /*
    serialize and unserialize
    $arr = [
        ["one","two","three"],
        ["one","two","three"],
        ["one","two","three"],
        ["one","two","three"]
    ];

    $seri  = serialize($arr);
    echo $seri;

    $unseri = unserialize($seri);
    echo "<pre>".print_r($unseri,true)."</pre>";
    */

    /*
    sleep and wakeup
    class Sleep {
        public function __sleep()
        {
            echo "hello world my name is saimon";
            return [];
        }
        public function __wakeup()
        {
            echo "hello world my name is saimon";
        }
    }
    $ob = new Sleep();
    $aa = serialize($ob);
    $aa = unserialize($ob);
    */

    /*
    toString and invoke  and clone
    class In{
        public function __toString()
        {
            return " i am to string";
        }
        public function __invoke()
        {
            echo "i am to invoke";
        }
        public function __clone()
        {
            echo "cloning data";
        }
    }
    $obj = new In();
    echo $obj;                   echo "<br>";                   //call with obj
    echo $obj();                 echo "<br>";                   //call with function
    $aa = clone $obj;                                           //cloning data
    */

    

    




   
?>