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
        include_once "../Controllers/MajorController.php";
        include_once "../Controllers/SubjectController.php";
        switch ($url) {
            case 'students':
                # code...
                switch ($method) {
                    case 'GET':
                        if (!empty($_GET['search'])) {
                            StudentController::search($_GET);
                        } else {
                            StudentController::index($_GET);
                        }
                        return;
                    case 'POST':
                        if (!empty($_REQUEST['add'])) {
                            StudentController::add($_REQUEST);
                        } elseif (!empty($_REQUEST['delete'])) {
                            StudentController::delete($_REQUEST);
                        } elseif (!empty($_REQUEST['edit'])) {
                            StudentController::edit($_REQUEST);
                        } elseif (!empty($_REQUEST['join'])) {
                            StudentController::joinClass($_REQUEST);
                        } elseif (!empty($_REQUEST['detail'])) {
                            StudentController::info($_REQUEST);
                        } else {
                            echo "Dữ liệu không hợp lệ";
                        }
                        return;
                }
            case 'classes':
                switch ($method) {
                    case 'GET':
                        if (!empty($_GET['search'])) {
                            ClassController::search($_GET);
                        } else {
                            ClassController::index($_GET);
                        }
                        return;
                    case 'POST':
                        if (!empty($_REQUEST['add'])) {
                            ClassController::add($_REQUEST);
                        } elseif (!empty($_REQUEST['delete'])) {
                            ClassController::delete($_REQUEST);
                        } elseif (!empty($_REQUEST['edit'])) {
                            ClassController::edit($_REQUEST);
                        } elseif (!empty($_REQUEST['join'])) {
                            ClassController::joinClass($_REQUEST);
                        } elseif (!empty($_REQUEST['detail'])) {
                            ClassController::info($_REQUEST);
                        } else {
                            echo "Dữ liệu không hợp lệ";
                        }
                        return;
                }
            case 'majors':
                switch ($method) {
                    case 'GET':
                        if (!empty($_GET['search'])) {
                            MajorController::search($_GET);
                        } else {
                            MajorController::index($_GET);
                        }
                        return;
                    case 'POST':
                        if (!empty($_REQUEST['add'])) {
                            MajorController::add($_REQUEST);
                        } elseif (!empty($_REQUEST['delete'])) {
                            MajorController::delete($_REQUEST);
                        } elseif (!empty($_REQUEST['edit'])) {
                            MajorController::edit($_REQUEST);
                        } elseif (!empty($_REQUEST['join'])) {
                            MajorController::joinClass($_REQUEST);
                        } elseif (!empty($_REQUEST['detail'])) {
                            MajorController::info($_REQUEST);
                        } else {
                            echo "Dữ liệu không hợp lệ";
                        }
                        return;
                }
            case 'subjects':
                switch ($method) {
                    case 'GET':
                        if (!empty($_GET['search'])) {
                            SubjectController::search($_GET);
                        } else {
                            SubjectController::index($_GET);
                        }
                        return;
                    case 'POST':
                        if (!empty($_REQUEST['add'])) {
                            SubjectController::add($_REQUEST);
                        } elseif (!empty($_REQUEST['delete'])) {
                            SubjectController::delete($_REQUEST);
                        } elseif (!empty($_REQUEST['edit'])) {
                            SubjectController::edit($_REQUEST);
                        } elseif (!empty($_REQUEST['join'])) {
                            SubjectController::joinClass($_REQUEST);
                        } elseif (!empty($_REQUEST['detail'])) {
                            SubjectController::info($_REQUEST);
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
                    <a href="./majors">
                        <button class="btn btn-primary">List Majors</button>
                    </a>
                    <a href="./subjects">
                        <button class="btn btn-primary">List Subjects</button>
                    </a>
                </div>
        <?php } ?>
    </body>
</html>