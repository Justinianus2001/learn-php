<?php
include_once "./Class.php";
class Student {
    // Properties
    protected $id;
    protected $name;
    protected $age;
    protected $major;
    protected $classes;
    
    function __construct($id,$name,$age,$major){
        $this->id=$id;
        $this->name=$name;
        $this->age=$age; 
        $this->major=$major; 
        $this->classes=[]; 

    }
    public function getInfo(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'major' => $this->major,
            'classes' => $this->classes
        ];
    }

    public function getInfoNotClasses(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'major' => $this->major,
        ];
    }

    public function addClass(Classes $class){
        $info_class = $class->getInfo();

        foreach($this->classes as $key => $value){
            if($info_class['id'] == $value['id']){
                echo "fail";
                return;
            }
        }
        $this->classes[] = $class->getInfo();
    }

    public function joinClass(Classes $class){
        $this->addClass($class);
        
        $class->addStudent($this);
    }
}

?>