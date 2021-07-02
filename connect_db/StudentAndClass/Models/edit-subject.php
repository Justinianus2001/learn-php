<?php
    //code...
    include_once "./Subjects.php";
    Subject::edit(new Subject($_REQUEST['id'], $_REQUEST['subject']));
    header('Location: http://localhost/learn-php/connect_db/StudentAndClass/public/subjects');
?>