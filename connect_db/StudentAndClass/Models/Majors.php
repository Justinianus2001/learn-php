<?php
include_once "DBs.php";
class Major {
    //properties
    private $id;
    private $major;
    //method
    function __construct($id, $major) {
        $this->id = $id;
        $this->major = $major;
    }

    function getId() {
        return $this->id;
    }

    function getMajor() {
        return $this->major;
    }

    function getInfo() {
        return [
            'id' => $this->id,
            'major' => $this->major
        ];
    }

    static function getList() {
        $conn = DB::connect();
        $sql = "SELECT * FROM `majors`";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Major($row['id_major'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function getListSearch($keyword) {
        $conn = DB::connect();
        $keyword = '%' . $keyword . '%';
        $sql = "SELECT * FROM `majors`
                WHERE `id_major` LIKE '" . $keyword .
                "' OR `major` LIKE '" . $keyword . "'";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Major($row['id_major'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function add($major) {
        $conn = DB::connect();
        $sql = "INSERT INTO `majors` (`major`) 
                VALUES ('" . $major->major . "')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }

    static function delete($major) {
        $conn = DB::connect();
        $sql = "SELECT * FROM `majors` WHERE `id_major` = " . $major;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $oldMajor = $row['major'];
            $sql = "DELETE FROM `majors` WHERE `id_major` = " . $major;
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
            $sql = "UPDATE `students` 
                    SET `major` = '" . null . "'
                    WHERE `major` = " . $oldMajor;
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
        }
        $conn->close();
        return $result;
    }

    static function edit($major) {
        $conn = DB::connect();
        $sql = "SELECT * FROM `majors` WHERE `id_major` = " . $major->id;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $oldMajor = $row['major'];
            $sql = "UPDATE `majors` 
                    SET `major` = '" . $major->major . "'
                    WHERE `id_major` = " . $major->id;
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
            $sql = "UPDATE `students` 
                    SET `major` = '" . $major->major . "'
                    WHERE `major` = " . $oldMajor;
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