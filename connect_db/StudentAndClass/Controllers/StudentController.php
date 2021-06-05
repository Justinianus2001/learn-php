<?php
include_once "../Models/DBs.php";
include_once "../Models/Student.php";
class StudentController
{

    static public function index()
    {
        try {
            //code...
            $list_student = Student::getList();
            include_once "../Views/student/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function add($request)
    {
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
}