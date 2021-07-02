<?php
    //code...
    include_once "./Student.php";
    Student::edit(new Student($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['age'], $_REQUEST['major']));
    header('Location: http://localhost/learn-php/connect_db/StudentAndClass/public/students');
?>