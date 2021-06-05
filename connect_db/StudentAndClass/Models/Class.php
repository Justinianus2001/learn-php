<?php
include_once "./Student.php";
include_once "./DB.php";
class Classes
{
    //properties
    protected $id;
    protected $name;
    protected $subject;
    //method
    function __construct($id, $name, $subject)
    {
        $this->id = $id;
        $this->name = $name;
        $this->subject = $subject;
    }

    static function getList()
    {
        $conn = db::connect();
        $sql = "SELECT * FROM classes";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Classes($row['id'], $row['name'], $row['subject']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function add($class)
    {
        $conn = db::connect();
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

    static function delete($id)
    {
        $conn = db::connect();
        $sql = "DELETE FROM `classes` WHERE `id` = " . $id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
}