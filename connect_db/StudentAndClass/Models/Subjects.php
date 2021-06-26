<?php
include_once "DBs.php";
class Subject {
    //properties
    private $id;
    private $subject;
    //method
    function __construct($id, $subject) {
        $this->id = $id;
        $this->subject = $subject;
    }

    function getId() {
        return $this->id;
    }

    function getSubject() {
        return $this->subject;
    }

    function getInfo() {
        return [
            'id' => $this->id,
            'subject' => $this->subject
        ];
    }

    static function getList() {
        $conn = DB::connect();
        $sql = "SELECT * FROM `subjects`";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Subject($row['id_subject'], $row['subject']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function getListSearch($keyword) {
        $conn = DB::connect();
        $keyword = '%' . $keyword . '%';
        $sql = "SELECT * FROM `subjects`
                WHERE `id_subject` LIKE '" . $keyword .
                "' OR `subject` LIKE '" . $keyword . "'";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Subject($row['id_subject'], $row['subject']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function add($subject) {
        $conn = DB::connect();
        $sql = "INSERT INTO `subjects` (`subject`) 
                VALUES ('" . $subject->subject . "')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }

    static function delete($subject) {
        $conn = DB::connect();
        $sql = "SELECT * FROM `subjects` WHERE `id_subject` = " . $subject;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $oldSubject = $row['subject'];
            $sql = "DELETE FROM `subjects` WHERE `id_subject` = " . $subject;
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
            $sql = "UPDATE `classes` 
                    SET `subject` = NULL
                    WHERE `subject` = '" . $oldSubject . "'";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
        }
        $conn->close();
        return $result;
    }

    static function edit($subject) {
        $conn = DB::connect();
        $sql = "SELECT * FROM `subjects` WHERE `id_subject` = " . $subject->id;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $oldSubject = $row['subject'];
            $sql = "UPDATE `subjects` 
                    SET `subject` = '" . $subject->subject . "'
                    WHERE `id_subject` = '" . $subject->id . "'";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
            $sql = "UPDATE `classes` 
                    SET `subject` = '" . $subject->subject . "'
                    WHERE `subject` = '" . $oldSubject . "'";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
        }
        $conn->close();
        return $result;
    }
}