
<?php 
session_start(); 
include_once "../Model/Student.php";
include_once "../Model/Class.php";
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

    <title>Hello, world!</title>
  </head>
  <body>
    <?php try { ?>
        
    <?php $list_student = isset($_SESSION['list_student'])?$_SESSION['list_student']:[]; ?>
    <?php $list_class = isset($_SESSION['list_class'])?$_SESSION['list_class']:[];
        ?>
    <div class="container mt-5">
        <!-- Button trigger modal -->
        <form method="POST" action="../Handle/join-class.php">
            <div class="modal-header">
                <h5 class="modal-title" id="classLabel">Add Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="hidden" value="<?= $_GET['id']?>"  class="form-control" name="student_id">
                </div>
                <div class="mb-3">
                <select class="form-select" name="class_id" aria-label="Default select example">
                    <?php foreach($list_class as $class){ 
                            $class = unserialize($class);
                            $info_class = $class->getInfo();
                        ?>
                    <option value="<?=$info_class['id']?>"><?=$info_class['name']?></option>
                <?php }?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        } 
        ?>
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


