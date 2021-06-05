<?php
    abstract class AnimalRoot {
        protected $foot;
        protected $hand;
        protected $gender;
        
        protected $parents;
        protected $childs;

        abstract public function voice();
        abstract public function move();

        public function getFoot(){
            echo $this->foot;
        }
        
        public function getHand(){
            echo $this->hand;
        }

        private function getGender(){
            echo $this->gender;
        }

        public function getGenderRoot(){
            echo $this->gender;
        }

        public function getParents(){
            return $this->parents;
        }

        public function getChilds(){
            return $this->childs;
        }

        public function addChilds($child){
            $this->childs[] = $child;
        }

        abstract public function born($animal);
    }
?>