<?php
    //code...
    include_once "./Majors.php";
    Major::edit(new Major($_REQUEST['id'], $_REQUEST['major']));
    header('Location: http://localhost/learn-php/connect_db/StudentAndClass/public/majors');
?>