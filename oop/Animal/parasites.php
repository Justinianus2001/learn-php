<?php
    include_once './animal.php';
    class Parasites extends AnimalRoot implements eatAndDrink{
        
        public function __construct($parents = []){
            $this->foot = 0;
            $this->hand = 0;
            $this->gender = random_int(0,1) ? "nam":"nu";
            $this->parents = $parents;
        }

        public function voice(){
            echo " ";
        }

        public function move(){
            echo "";
        }

        
        public function getHand(){
            echo "";
        }
        
        public function homeGuard(){
            echo "";
        } 
        
        public function isPet(){
            echo "";
        }

        public function eat(){
            echo "yyy";
        }

        public function drink(){
            echo "xx";
        }

        public function born($animal){
            if($animal instanceof Parasites){

                $parents = $animal != $this ? [$this,$animal] : [$animal];
                
                $child = new Parasites( $parents );
                if(count($parents) >1){

                    $this->addChilds($child);
                    $animal->addchilds($child);
                    
                }else{
                    $animal->addchilds($child);
                }
                return $child;
            }else{
                throw new Exception("Không phù hợp");
            }
        }
    }
    

    interface eatAndDrink{
        function eat();
        function drink();
    }

?>