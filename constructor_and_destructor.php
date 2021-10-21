<?php
    class Constr{
        var $t = 0;
        public function __construct($name,$age)
        {
            echo "my name is $name and my age is $age and i am constructor beginning";
        }
        public function loopit(){
            for ($i=0; $i <100 ; $i++) { 
                $this->t+=$i;
            }
        }
    
        public function __destruct()
        {
            echo  "i am destructor. class work is done. t value is ".$this->t;
        }
    }

    $bio = new Constr('saimon',24);
    $bio -> loopit();

?>