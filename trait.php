<?php
    //trait is not same like class. It can join with many trait or classes

    trait first {
        var $name = "saimon";
        public function bio(){
            echo "my name is $this->name";
        }

    }
    trait second {
        var $age = 24;
    }
    trait third {

        use first,second;
    }

    class all {
        use third;
    }

    $object = new all();
    echo $object -> name;   echo "<br>";
    $object -> bio();                 

?>