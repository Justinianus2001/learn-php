<?php
    include_once "../Models/Majors.php";
    include_once "../Models/Classes.php";
?>
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
        <div class="container mt-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#student-add">
                Add Student
            </button>
            <div class="modal fade" id="student-add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="studentLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="./students">
                            <div class="modal-header">
                                <h5 class="modal-title" id="studentLabel">Add Student</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Major</label>
                                    <select class="form-select" name="major" aria-label="Default select example">
                                        <option value=""></option>
                                        <?php foreach (Major::getList() as $major) { ?>
                                            <option value="<?= $major->getMajor() ?>"><?= $major->getMajor() ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="text" class="form-control" name="age">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Join class</label><br>
                                    <?php foreach (CLasses::getList() as $class) { ?>
                                        <input type="checkbox" id="class" name="<?= $class->getId() ?>" value="<?= $class->getId() ?>">
                                        <label for="class"><?= $class->getName() ?></label><br>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="add" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="./classes">
                <button class="btn btn-info">List Classes</button>
            </a>

            <a href="./majors">
                <button class="btn btn-info">List Majors</button>
            </a>

            <a href="./subjects">
                <button class="btn btn-info">List Subjects</button>
            </a>
            
            <a href=".">
                <button class="btn btn-secondary">Home</button>
            </a>

            <div class="d-flex p-2"></div>

            <form class="input-group" method="POST" action="./students">
                <input type="search" class="form-control rounded" placeholder="Enter your search keywords here"
                    aria-label="Search" aria-describedby="search-addon" name="keyword">
                <button class="btn btn-primary" name="search" value="true">Search</button>
            </form>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <h1>List Student</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Major</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_student as $student) { ?>
                            <tr>
                                <th scope="row"><?= $student->getId() ?></th>
                                <td><?= $student->getName() ?></td>
                                <td><?= $student->getMajor() ?></td>
                                <td><?= $student->getAge() ?></td>
                                <td>
                                    <form style="display: inline;" method="POST" action="./students">
                                        <button class="btn btn-success"
                                            name="join" value="<?= $student->getId() ?>">Join Class</button>
                                    </form>
                                    <form style="display: inline;" method="POST" action="./students">
                                        <button class="btn btn-info"
                                            name="detail" value="<?= $student->getId() ?>">Detail</button>
                                    </form>
                                    <form style="display: inline;" method="POST" action="./students">
                                        <button class="btn btn-warning"
                                            name="edit" value="<?= $student->getId() ?>">Edit</button>
                                    </form>
                                    <form style="display: inline;" method="POST" action="./students">
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này ?')" 
                                            name="delete" value="<?= $student->getId() ?>">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
    </body>
</html>