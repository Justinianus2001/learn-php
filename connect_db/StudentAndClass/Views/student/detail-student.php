<?php
    include_once "../Models/Student.php";
?>
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

        <title>Detail Student</title>
    </head>
    <body>
        <div class="container mt-3">
            <a href="../public/students">
                <button class="btn btn-secondary">Home</button>
            </a>
            <div class="row">
                <div class="col-6">
                    <h1>Detail Student</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Major</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $student->getId() ?></th>
                                <td><?= $student->getName() ?></td>
                                <td><?= $student->getAge() ?></td>
                                <td><?= $student->getMajor() ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-6">
                    <h1>Classes Registered</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conn = DB::connect();
                                $sql = "SELECT * FROM `dangky` WHERE `id_sv` = " . $student->getId();
                                $getId = $conn->query($sql);
                                if ($getId->num_rows > 0) {
                                    while ($id = $getId->fetch_assoc()) {
                                        $sql = "SELECT * FROM `classes` WHERE `id_mh` = " . $id['id_mh'];
                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc(); ?>
                                        <tr>
                                            <th scope="row"><?= $row['id_mh'] ?></th>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= $row['subject'] ?></td>
                                        </tr>
                                    <?php }
                                }
                                $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    </body>
</html>