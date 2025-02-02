<?php
include_once "DBs.php";
class Student {
    // Properties
    private $id;
    private $name;
    private $age;
    private $major;
    private $classes;

    function __construct($id, $name, $age, $major) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->major = $major;
        $this->classes = [];
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }

    function getMajor() {
        return $this->major;
    }

    function getClasses() {
        return $this->classes;
    }

    public function getInfo() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'major' => $this->major,
            'classes' => $this->classes
        ];
    }

    public function getInfoNotClasses() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'major' => $this->major,
        ];
    }

    static function getList() {
        $conn = DB::connect();
        $sql = "SELECT * FROM `students`";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Student($row['id_sv'], $row['name'], $row['age'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function getSubList($page) {
        $conn = DB::connect();
        if (is_null($page)) {
            $page = 1;
        }
        $sql = "SELECT * FROM `students` LIMIT " . (($page - 1) * 5) . ", 5";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Student($row['id_sv'], $row['name'], $row['age'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function getListSearch($keyword) {
        $conn = DB::connect();
        $keyword = '%' . $keyword . '%';
        $sql = "SELECT * FROM `students`
                WHERE `id_sv` LIKE '" . $keyword .
                "' OR `name` LIKE '" . $keyword .
                "' OR `age` LIKE '" . $keyword .
                "' OR `major` LIKE '" . $keyword . "'";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Student($row['id_sv'], $row['name'], $row['age'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function getSubListSearch($keyword, $page) {
        $conn = DB::connect();
        if (is_null($page)) {
            $page = 1;
        }
        $keyword = '%' . $keyword . '%';
        $sql = "SELECT * FROM `students`
                WHERE `id_sv` LIKE '" . $keyword .
                "' OR `name` LIKE '" . $keyword .
                "' OR `age` LIKE '" . $keyword .
                "' OR `major` LIKE '" . $keyword . "' LIMIT " . (($page - 1) * 5) . ", 5";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new Student($row['id_sv'], $row['name'], $row['age'], $row['major']);
            }
        }
        $conn->close();
        return $ls;
    }

    static function add($student) {
        $conn = DB::connect();
        $sql = "INSERT INTO `students` (`name`, `age`, `major`) 
                VALUES ('" . $student->name  . "',
                        '" . $student->age   . "',
                        '" . $student->major . "')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }

    static function delete($id) {
        $conn = DB::connect();
        $sql = "DELETE FROM `students` WHERE `id_sv` = " . $id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $sql = "DELETE FROM `dangky` WHERE `id_sv` = " . $id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }

    static function edit($student) {
        $conn = DB::connect();
        $sql = "UPDATE `students` 
                SET `name`  = '" . $student->name  . "', 
                    `age`   = '" . $student->age   . "',
                    `major` = '" . $student->major . "' 
                WHERE `id_sv` = " . $student->id;
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }

    static function joinClass($studentId, $classId) {
        $conn = DB::connect();
        $sql = "INSERT INTO `dangky` (`id_sv`, `id_mh`)
                VALUES ('" . $studentId . "',
                        '" . $classId   . "')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $con->error;
            return null;
        }
        $conn->close();
    }
} ?>