<?php
include_once "../Models/DBs.php";
include_once "../Models/Majors.php";
class MajorController {
    static public function index() {
        try {
            //code...
            $list_major = Major::getList();
            include_once "../Views/major/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function search($request) {
        try {
            //code...
            $list_major = Major::getListSearch($request['keyword']);
            include_once "../Views/major/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function info($request) {
        try {
            $id = $request['detail'];
            $list_major = Major::getList();
            $major = null;
            foreach ($list_major as $val_major)
                if ($val_major->getId() == $id) {
                    $major = $val_major;
                    break;
                }
            include_once "../Views/major/detail-major.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function add($request) {
        try {
            //code...
            $major = new Major(null, $request['major']);
            $result = Major::add($major);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function delete($request) {
        try {
            $major = $request['delete'];
            $result = Major::delete($major);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function edit($request) {
        try {
            $id = $request['edit'];
            $list_major = Major::getList();
            $major = null;
            foreach ($list_major as $val_major)
                if ($val_major->getId() == $id) {
                    $major = $val_major;
                    break;
                }
            include_once "../Views/major/edit-major.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}