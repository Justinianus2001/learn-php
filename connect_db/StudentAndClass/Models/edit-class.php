<?php
    //code...
    include_once "./Classes.php";
    Classes::edit(new Classes($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['subject']));
    header('Location: http://localhost/learn-php/connect_db/StudentAndClass/public/classes');
?>