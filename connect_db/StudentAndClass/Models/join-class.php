<?php
    //code...
    include_once "./DBs.php";
    include_once "./Student.php";
    $conn = DB::connect();
    $first = true;
    $studentId = null;
    foreach ($_REQUEST as $classId) {
        if ($first) {
            $studentId = $classId;
            $sql = "DELETE FROM `dangky` WHERE `id_sv` = " . $studentId;
            $result = $conn->query($sql);
            $first = false;
        } else {
            Student::joinClass($studentId, $classId);
        }
    }
    $conn->close();
    header('Location: http://localhost/learn-php/connect_db/StudentAndClass/public/students');
?>