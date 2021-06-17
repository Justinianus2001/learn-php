<?php
include_once "../Models/DBs.php";
include_once "../Models/Student.php";
include_once "../Models/Classes.php";
class StudentController {

    static public function index() {
        try {
            //code...
            $list_student = Student::getList();
            include_once "../Views/student/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function info($id) {
        try {
            $list_student = Student::getList();
            $student = null;
            foreach ($list_student as $val_student)
                if ($val_student->getId() == $id) {
                    $student = $val_student;
                    break;
                }
            include_once "../Views/student/detail-student.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function joinClass($id) {
        try {
            $list_student = Student::getList();
            $list_class = Classes::getList();
            $student = null;
            foreach ($list_student as $val_student)
                if ($val_student->getId() == $id) {
                    $student = $val_student;
                    break;
                }
            include_once "../Views/student/join-class.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function add($request) {
        try {
            //code...
            if (!$request['name'] || !$request['age'] || !$request['major']) {
                echo "Dữ liệu không hợp lệ";
                return;
            }
            $student = new Student(null, $request['name'], $request['age'], $request['major']);
            $result = Student::add($student);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function delete($request) {
        try {
            if (!$request['id']) {
                echo "Dữ liệu không hợp lệ";
                return;
            }
            $id = $request['id'];
            $conn = DB::connect();
            $sql = "SELECT * FROM `students` WHERE `id_sv` = " . $id;
            $result = $conn->query($sql);
            $conn->close();
            if ($result->num_rows == 0) {
                echo '<script type="text/javascript">';
                echo 'alert("Mã id không hợp lệ")';
                echo '</script>';
            } else {
                $result = Student::delete($id);
                var_dump($result);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function edit($request) {
        try {
            if (!$request['id'] || !$request['name'] || !$request['age'] || !$request['major']) {
                echo "Dữ liệu không hợp lệ";
                return;
            }
            $conn = DB::connect();
            $sql = "SELECT * FROM `students` WHERE `id_sv` = " . $request['id'];
            $result = $conn->query($sql);
            $conn->close();
            if ($result->num_rows == 0) {
                echo '<script type="text/javascript">';
                echo 'alert("Mã id không hợp lệ")';
                echo '</script>';
            } else {
                $student = new Student($request['id'], $request['name'], $request['age'], $request['major']);
                $result = Student::edit($student);
                var_dump($result);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
} ?>