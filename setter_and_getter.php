<?php

    class GetterAndSetter{
        private $name = 'agag';
        public function getter(){
            return $this->name;
        }
        public function setter($data){
            $this->name = $data;
        }
    }

    $obj = new GetterAndSetter();
    $obj1 = $obj -> getter();
    print_r($obj1);
    $obj2 = $obj -> setter(123);
    print_r($obj2);
?>