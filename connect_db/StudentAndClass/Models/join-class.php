<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Student Join Class</title>
    </head>
    <body>
        <div class="container mt-3">
            <h5>
                <?php
                    try {
                        //code...
                        include_once "./DBs.php";
                        include_once "./Student.php";
                        $conn = DB::connect();
                        $sql = "SELECT * FROM `dangky` WHERE `id_sv` = " . $_REQUEST['student_id'] . " AND `id_mh` = " . $_REQUEST['class_id'];
                        $result = $conn->query($sql);
                        if ($result->num_rows == 0) {
                            Student::joinClass($_REQUEST['student_id'], $_REQUEST['class_id']);
                            echo 'Join class successful !';
                        } else {
                            echo 'Class already join !';
                        }
                    } catch (\Throwable $th) {
                        //throw $th;
                        echo "</br>-------------";
                        echo "</br>Line: ".$th->getLine();
                        echo "</br>Line: ".$th->getMessage();
                    }
                    // if(isset($_SERVER['HTTP_REFERER'])) {
                    //     header('Location: http://localhost/learn_php/oop/StudentAndClass/view/');
                    //     exit;
                    // }else{
                    //     echo "Not found";
                    // }
                ?>
            </h5>
            <a href="../public/students">
                <button class="btn btn-primary">Home</button>
            </a>
        </div>
    </body>
</html>