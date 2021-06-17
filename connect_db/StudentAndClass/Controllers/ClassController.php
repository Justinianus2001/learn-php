<?php
include_once "../Models/DBs.php";
include_once "../Models/Classes.php";
class ClassController {

    static public function index() {
        try {
            //code...
            $list_class = Classes::getList();
            include_once "../Views/class/list_view.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function info($id) {
        try {
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
            if (!$request['name'] || !$request['subject']) {
                echo "Dữ liệu không hợp lệ";
                return;
            }
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
            if (!$request['id']) {
                echo "Dữ liệu không hợp lệ";
                return;
            }
            $id = $request['id'];
            $conn = DB::connect();
            $sql = "SELECT * FROM `classes` WHERE `id_mh` = " . $id;
            $result = $conn->query($sql);
            $conn->close();
            if ($result->num_rows == 0) {
                echo '<script type="text/javascript">';
                echo 'alert("Mã id không hợp lệ")';
                echo '</script>';
            } else {
                $result = Classes::delete($id);
                var_dump($result);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    static public function edit($request) {
        try {
            if (!$request['id'] || !$request['name'] || !$request['subject']) {
                echo "Dữ liệu không hợp lệ";
                return;
            }
            $conn = DB::connect();
            $sql = "SELECT * FROM `classes` WHERE `id_mh` = " . $request['id'];
            $result = $conn->query($sql);
            $conn->close();
            if ($result->num_rows == 0) {
                echo '<script type="text/javascript">';
                echo 'alert("Mã id không hợp lệ")';
                echo '</script>';
            } else {
                $class = new Classes($request['id'], $request['name'], $request['subject']);
                $result = Classes::edit($class);
                var_dump($result);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}