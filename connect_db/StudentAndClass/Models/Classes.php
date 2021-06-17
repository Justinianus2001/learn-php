<?php
include_once "Student.php";
include_once "DBs.php";
class Classes {
    //properties
    private $id;
    private $name;
    private $subject;
    private $students;
    //method
    function __construct($id, $name, $subject) {
        $this->id = $id;
        $this->name = $name;
        $this->subject = $subject;
        $this->students = [];
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getSubject() {
        return $this->subject;
    }

    function getStudents() {
        return $this->students;
    }

    function getInfo() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'subject' => $this->subject,
            'students' => $this->students
        ];
    }

    function getInfoNotStudent() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'subject' => $this->subject,
        ];
    }

    static function getList() {
        $conn = DB::connect();
        $sql = "SELECT * FROM classes";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Classes($row['id_mh'], $row['name'], $row['subject']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function add($class) {
        $conn = DB::connect();
        $sql = "INSERT INTO `classes` (`name`, `subject`) 
                VALUES ('" . $class->name . "',
                        '" . $class->subject . "')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }

    static function delete($id) {
        $conn = DB::connect();
        $sql = "DELETE FROM `classes` WHERE `id_mh` = " . $id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $sql = "DELETE FROM `dangky` WHERE `id_mh` = " . $id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }

    static function edit($class) {
        $conn = DB::connect();
        $sql = "UPDATE `classes` 
                SET `name`    = '" . $class->name    . "', 
                    `subject` = '" . $class->subject . "'
                WHERE `id_mh` = " . $class->id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
}