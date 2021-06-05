<?php
    session_start();
    include_once "../Model/Class.php";
    if(
        isset($_POST['name']) 
        && isset($_POST['subject'])
    ){
        $list_Class = [];
        if(!isset($_SESSION['list_class'])) $_SESSION['list_class']= [];
        $_SESSION['list_class'][] = serialize(new Classes("st_".time(),$_POST['name'],$_POST['subject']));
    }
    if(isset($_SERVER['HTTP_REFERER'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }else{
        echo "Not found";
    }

?>