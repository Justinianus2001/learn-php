<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>List Student!</title>
    </head>
    <body>
        <?php
        $url = isset($_GET['url']) ? $_GET['url'] : "";
        $method = $_SERVER['REQUEST_METHOD'];
        include_once "../Controllers/StudentController.php";
        include_once "../Controllers/ClassController.php";
        switch ($url) {
            case 'students':
                # code...
                switch ($method) {
                    case 'GET':
                        if (!empty($_GET['id']) && !empty($_GET['join'])) {
                            StudentController::joinClass($_GET['id']);
                        } elseif (!empty($_GET['id'])) {
                            StudentController::info($_GET['id']);
                        } else {
                            StudentController::index();
                        }
                        return;
                    case 'POST':
                        if (!empty($_REQUEST['add'])) {
                            StudentController::add($_REQUEST);
                        } elseif (!empty($_REQUEST['delete'])) {
                            StudentController::delete($_REQUEST);
                        } elseif (!empty($_REQUEST['edit'])) {
                            StudentController::edit($_REQUEST);
                        } else {
                            echo "Dữ liệu không hợp lệ";
                        }
                        return;
                }
            case 'classes':
                switch ($method) {
                    case 'GET':
                        if (!empty($_GET['id'])) {
                            ClassController::info($_GET['id']);
                        } else {
                            ClassController::index();
                        }
                        return;
                    case 'POST':
                        if (!empty($_REQUEST['add'])) {
                            ClassController::add($_REQUEST);
                        } elseif (!empty($_REQUEST['delete'])) {
                            ClassController::delete($_REQUEST);
                        } elseif (!empty($_REQUEST['edit'])) {
                            ClassController::edit($_REQUEST);
                        } else {
                            echo "Dữ liệu không hợp lệ";
                        }
                        return;
                }
            default: ?>
                <div class="container mt-5">
                    <a href="./students">
                        <button class="btn btn-primary">List Students</button>
                    </a>
                    <a href="./classes">
                        <button class="btn btn-primary">List Classes</button>
                    </a>
                </div>
        <?php } ?>
    </body>
</html>