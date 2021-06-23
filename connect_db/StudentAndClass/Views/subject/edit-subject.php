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

        <title>Edit Subject</title>
    </head>
    <body>
        <?php try { ?>
            <div class="container mt-5">
                <!-- Button trigger modal -->
                <form method="POST" action="../Models/edit-subject.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="classLabel">Edit Subject</h5>
                        <input type="hidden" value="<?= $_REQUEST['edit'] ?>" class="form-control" name="id">
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" value="<?= $subject->getSubject() ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="./subjects">
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