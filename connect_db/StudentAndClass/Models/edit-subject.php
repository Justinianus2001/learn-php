<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Edit Subject</title>
    </head>
    <body>
        <?php
            try {
                //code...
                include_once "./Subjects.php";
                Subject::edit(new Subject($_REQUEST['id'], $_REQUEST['subject']));
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
        <div class="container mt-3">
            <h5>Edit subject successful !</h5>
            <a href="../public/subjects">
                <button class="btn btn-primary">Home</button>
            </a>
        </div>
    </body>
</html>