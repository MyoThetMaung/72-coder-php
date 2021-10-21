<?php

    interface Games{                                                   //methods must be empty;
        public function createGameScene();
        public function createVegetables();
        public function createHousing();
        public function createActor($actor);
    }

    class Index implements Games{    
        private $actor;                                              //implements interface
        public function createGameScene()
        {
            echo "this is create game scene. ";
        }
        public function createVegetables(){
            echo "this is create vegetables. ";
        }
        public function createHousing(){
           
        }   
        public function createActor($actor){  
            $this->actor = $actor;
            echo "this is our ".$this->actor;
        }
        
    }

    $game = new Index();
    $game -> createGameScene();
    $game -> createVegetables();
    $game -> createHousing();
    $game -> createActor("saimon");

?>