<?php
include_once "../Models/DBs.php";
include_once "../Models/Student.php";
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

    static public function search($request) {
        try {
            //code...
            $list_student = Student::getListSearch($request['keyword']);
            include_once "../Views/student/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function info($request) {
        try {
            $id = $request['detail'];
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

    static public function joinClass($request) {
        try {
            include_once "../Views/student/join-class.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function add($request) {
        try {
            //code...
            $cnt = 0;
            $Name = null;
            $Age = null;
            $Major = null;
            foreach ($request as $val) {
                if ($cnt == 1) {
                    $Name = $val;
                } elseif ($cnt == 2) {
                    $Major = $val;
                } elseif ($cnt == 3) {
                    $Age = $val;
                    $student = new Student(null, $Name, $Age, $Major);
                    $idStudent = Student::add($student);
                } elseif ($cnt > 3 and $cnt + 1 != count($request)) {
                    $result = Student::joinClass($idStudent, $val);
                }
                $cnt ++;
            }
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function delete($request) {
        try {
            $id = $request['delete'];
            $result = Student::delete($id);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function edit($request) {
        try {
            $id = $request['edit'];
            $list_student = Student::getList();
            $student = null;
            foreach ($list_student as $val_student)
                if ($val_student->getId() == $id) {
                    $student = $val_student;
                    break;
                }
            include_once "../Views/student/edit-student.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
} ?>