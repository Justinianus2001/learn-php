<?php
include_once "./DBs.php";
class Student
{
    // Properties
    public $id;
    public $name;
    public $age;
    public $major;

    function __construct($id, $name, $age, $major)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->major = $major;
    }

    static function getList()
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Student($row['id'], $row['name'], $row['age'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function add($student)
    {
        $conn = DB::connect();
        $sql = "INSERT INTO `students` (`name`, `age`,`major`) 
                VALUES ('" . $student->name . "',
                        '" . $student->age . "',
                        '" . $student->major . "')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }

    static function delete($id)
    {
        $conn = DB::connect();
        $sql = "DELETE FROM `students` WHERE `id` = " . $id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
}