<?php 
    include_once "../Models/Student.php";
    include_once "../Models/Classes.php";
    include_once "../Models/DBs.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">

        <title>Join Class</title>
    </head>
    <body>
        <?php try { ?>
            <div class="container mt-5">
                <!-- Button trigger modal -->
                <form method="POST" action="../Models/join-class.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="classLabel">Add Class</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="hidden" value="<?= $_REQUEST['join'] ?>" class="form-control" name="student_id">
                        </div>
                        <?php
                            $conn = DB::connect();
                            $sql = "SELECT `id_mh` FROM `dangky` WHERE `id_sv` = " . $_REQUEST['join'];
                            $result = $conn->query($sql);
                            $lst = [];
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $lst[] = $row['id_mh'];
                                }
                            }
                            $conn->close();
                            foreach (CLasses::getList() as $class) {
                                if (in_array($class->getId(), $lst)) { ?>
                                <input type="checkbox" id="class" name="<?= $class->getId() ?>" value="<?= $class->getId() ?>" checked>
                                <label for="class"><?= $class->getName() ?></label><br>
                        <?php } else { ?>
                                <input type="checkbox" id="class" name="<?= $class->getId() ?>" value="<?= $class->getId() ?>">
                                <label for="class"><?= $class->getName() ?></label><br>
                        <?php }
                        } ?>
                    </div>
                    <div class="modal-footer">
                        <a href="../public/students">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        <?php 
        //code...
        } catch (\Throwable $th) {
            //throw $th;
            //throw $th;
            echo "</br>-------------";
            echo "</br>Line: ".$th->getLine();
            echo "</br>Line: ".$th->getMessage();
        } ?>
            </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
    </body>
</html>