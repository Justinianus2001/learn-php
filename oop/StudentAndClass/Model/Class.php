<?php
include_once "./Student.php";
class Classes {
    //properties
    protected $id;
    protected $name;
    protected $subject;
    protected $students = [];
    //method
    function __construct($id,$name,$subject){
        $this->id=$id;
        $this->name=$name;
        $this->subject=$subject; 
        $this->students=[]; 
    }

    public function getInfo(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'subject' => $this->subject,
            'students' => $this->students
        ];
    }

    public function getInfoNotStudent(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'subject' => $this->subject,
        ];
    }

    public function addStudent(Student $student){
        $info_student = $student->getInfo();
        foreach($this->students as $key => $value){
            if($info_student['id'] == $value['id'])
                return;
        }
        $this->students[] = $student->getInfoNotClasses();
    }
}
?>