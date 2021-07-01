<?php
include_once "../Models/DBs.php";
include_once "../Models/Classes.php";
class ClassController {
    static public function index($get) {
        try {
            //code...
            $list_class = Classes::getSubList(isset($get['page']) ? $get['page'] : null);
            include_once "../Views/class/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function search($get) {
        try {
            //code...
            $list_class = Classes::getSubListSearch($get['keyword'], isset($get['page']) ? $get['page'] : null);
            include_once "../Views/class/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function info($request) {
        try {
            $id = $request['detail'];
            $list_class = Classes::getList();
            $class = null;
            foreach ($list_class as $val_class)
                if ($val_class->getId() == $id) {
                    $class = $val_class;
                    break;
                }
            include_once "../Views/class/detail-class.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function add($request) {
        try {
            //code...
            $class = new Classes(null, $request['name'], $request['subject']);
            $result = Classes::add($class);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function delete($request) {
        try {
            $id = $request['delete'];
            $result = Classes::delete($id);
            var_dump($result);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function edit($request) {
        try {
            $id = $request['edit'];
            $list_class = Classes::getList();
            $class = null;
            foreach ($list_class as $val_class)
                if ($val_class->getId() == $id) {
                    $class = $val_class;
                    break;
                }
            include_once "../Views/class/edit-class.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}