<?php
    session_start();
    include_once "../Model/Student.php";
    if(
        isset($_POST['name']) 
        && isset($_POST['major'])
        && isset($_POST['age'])
    ){
        $list_student = [];
        if(!isset($_SESSION['list_student'])) $_SESSION['list_student']= [];
        $_SESSION['list_student'][] = serialize(new Student("st_".time(),$_POST['name'],$_POST['age'],$_POST['major']));
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }else{
            echo "Not found";
        }
    }else{
        echo "Not found";
    }
  
?>