<?php
    include_once './animal.php';
    class Bird extends AnimalRoot implements featureBird{
        protected $wing;

        public function __construct($parents=[]){
            $this->foot = 2;
            $this->hand = 2;
            $this->gender = random_int(0,1) ? "nam":"nu";
            $this->parents = $parents;
        }
        public function getAll(){
            return [
                'foot' => $this->foot,
                'hand' => $this->hand,
            ];
        }

        public function voice(){
            echo "Hót";
        }

        public function move(){
            echo "Bay trên trời";
        }
        
        public function getGenderChild(){
            echo $this->gender;
        }

        public function changeHand(){
            echo "Tay biên đổi thành cánh";
        }
        public function getHand(){
           echo $this->changeHand().": ".$this->hand;
        }
        
        public function isPet(){
            echo "Đây là thú cưng";
        }

        public function born($animal){
            if($this->gender == "nu" && $animal->gender == "nam" && $animal !=$this && $animal instanceof Bird){
               
                $child =  new Bird([$this,$animal]);
               
               
                $this->addChilds($child);
                $animal->addchilds($child);
                return $child;
            }else{
                throw new Exception("Không phù hợp");
            }
        }
    }
    
    interface featureBird{
        function isPet();
        function changeHand();
    }

?>