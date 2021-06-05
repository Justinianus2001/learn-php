<?php
try {
    //code...
    session_start();

    include_once "../Model/Student.php";
    include_once "../Model/Class.php";

    if(
        isset($_POST['student_id']) 
        && isset($_POST['class_id'])
    ){
        $list_student = isset($_SESSION['list_student'])?$_SESSION['list_student']:[]; 
        $list_class = isset($_SESSION['list_class'])?$_SESSION['list_class']:[]; 
        
        $detail_student = null;
        $index_student = null;
        foreach($list_student as $key=> $student){
            $student = unserialize( $student);
            $info_student = $student->getInfo();
            if($info_student['id'] == $_POST['student_id']){
                $detail_student = $student;
                $index_student = $key;
            }
        } 

        $detail_class = null;
        $index_class = null;

        foreach($list_class as $key=> $class){
            $class = unserialize( $class);
            $info_class = $class->getInfo();
            if($info_class['id'] == $_POST['class_id']){
                $detail_class = $class;
                $index_class = $key;
            }
        } 
        echo "<pre>";
        var_dump($detail_student);
        var_dump($detail_class);
        echo "</pre>";

        if($detail_student && $detail_class){
            $detail_student->joinClass($detail_class);
            $_SESSION['list_student'][$index_student] = serialize($detail_student);
            $_SESSION['list_class'][$index_class] = serialize($detail_class);
        }
    }else{
        echo "Not found";
    }
} catch (\Throwable $th) {
    //throw $th;
          echo "</br>-------------";
          echo "</br>Line: ".$th->getLine();
          echo "</br>Line: ".$th->getMessage();
}
    
    // if(isset($_SERVER['HTTP_REFERER'])) {
    //     header('Location: http://localhost/learn_php/oop/StudentAndClass/view/');
    //     exit;
    // }else{
    //     echo "Not found";
    // }

?>


