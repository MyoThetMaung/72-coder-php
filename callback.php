<?php

    class Cal{
        public function doIt($sum){
            echo "I am now starting doIt function <br>";         //after doIt()function, sum()function will work
            $this->$sum($sum);                                   // $sum is equal to sum()
        }
        public function sum($sum){      
            $sum = 0;
            $i = 0;
            while($i<100){
                $sum += $i;
                $i++;
            }
            echo $sum;
        }
    }

    $obj = new Cal();
    $obj -> doIt("sum");                                            //"sum" call back sum()function 
?>