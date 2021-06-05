<?php

$url = isset($_GET['url']) ? $_GET['url'] : "";
$method = $_SERVER['REQUEST_METHOD'];
include_once "../Controllers/StudentController.php";
switch ($url) {
    case 'students':
        # code...
        switch ($method) {
            case 'GET':
                StudentController::index();
                return;
            case 'POST':
                StudentController::add($_REQUEST);
                return;
        }
}