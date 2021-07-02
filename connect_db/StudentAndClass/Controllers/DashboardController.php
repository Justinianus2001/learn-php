<?php
class DashboardController {
    static public function index() {
        try {
            //code...
            include_once "../Views/dashboard.php";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
?>