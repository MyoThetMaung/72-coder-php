<?php
    class Member{
        var $name = 'saimon';
        var $age = 24;
        var $subject = 'html';
    
        public function __construct()
        {
           echo "my name is $this->name";
           echo "<br>";
        }
        public function old(){
            echo "i am $this->age year old";
        }
        
    }
    
    class Goldmember extends Member{
        public function friendCount(){
            parent::__construct();                                      //calling parent constructor in child constructor
            echo 'my favorit subject is '.$this->subject;
        }
        public function old(){
            echo "Age is $this->age";
        }
    }

    $member = new Goldmember();
    $member -> friendCount(); echo "<br>";
    $member -> old(); echo "<br>";
    echo $member -> name;
    
?>