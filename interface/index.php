<?php

    include_once "heInter.php";
    include_once "sheInter.php";
?>

<?php

    class Index{
        private $data;
        public function Shegotoschool($data){
            $this->data = $data;

        }
        public function Hegotoschool($data){
            $this->data = $data;

        }
        public function busy(){
            echo "this person is busy with ".$this->data[count($this->data)-1];
        }

    }
    $girl = new Index();
    $garr = ['pen','book','umberlla','cosmetic'];
    $girl -> Shegotoschool($garr);
    $girl -> busy();

    $boy = new Index();
    $barr = ['pen','book','umberlla','hat']; 
    $boy -> Hegotoschool($barr);
    $boy -> busy();

?>