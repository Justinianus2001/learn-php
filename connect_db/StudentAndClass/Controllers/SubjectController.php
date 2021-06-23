<?php
include_once "../Models/DBs.php";
include_once "../Models/Subjects.php";
class SubjectController {
    static public function index() {
        try {
            //code...
            $list_subject = Subject::getList();
            include_once "../Views/subject/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function search($request) {
        try {
            //code...
            $list_subject = Subject::getListSearch($request['keyword']);
            include_once "../Views/subject/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function info($request) {
        try {
            $id = $request['detail'];
            $list_subject = Subject::getList();
            $subject = null;
            foreach ($list_subject as $val_subject)
                if ($val_subject->getId() == $id) {
                    $subject = $val_subject;
                    break;
                }
            include_once "../Views/subject/detail-subject.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function add($request) {
        try {
            //code...
            $subject = new Subject(null, $request['subject']);
            $result = Subject::add($subject);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function delete($request) {
        try {
            $subject = $request['delete'];
            $result = Subject::delete($subject);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function edit($request) {
        try {
            $id = $request['edit'];
            $list_subject = Subject::getList();
            $subject = null;
            foreach ($list_subject as $val_subject)
                if ($val_subject->getId() == $id) {
                    $subject = $val_subject;
                    break;
                }
            include_once "../Views/subject/edit-subject.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}