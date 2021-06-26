<?php include_once "../Models/Majors.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">

        <title>Edit Student</title>
    </head>
    <body>
        <?php try { ?>
            <div class="container mt-5">
                <!-- Button trigger modal -->
                <form method="POST" action="../Models/edit-student.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentLabel">Edit Student</h5>
                        <input type="hidden" value="<?= $_REQUEST['edit'] ?>" class="form-control" name="id">
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="<?= $student->getName() ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Major</label>
                            <select class="form-select" name="major" aria-label="Default select example">
                                <option value=""></option>
                                <?php foreach (Major::getList() as $major) {
                                    if ($student->getMajor() == $major->getMajor()) { ?>
                                    <option value="<?= $major->getMajor() ?>" selected><?= $major->getMajor() ?></option>
                                <?php } else { ?>
                                    <option value="<?= $major->getMajor() ?>"><?= $major->getMajor() ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" name="age" value="<?= $student->getAge() ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="./students">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    </body>
</html>