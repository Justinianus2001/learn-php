<?php
    include_once "../Models/Student.php";
    include_once "../Models/Classes.php";
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
        <?php
            $list_student = isset($_SESSION['list_student'])?$_SESSION['list_student']:[];
            $list_class = isset($_SESSION['list_class'])?$_SESSION['list_class']:[];
        ?>
        <div class="container mt-3">
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
                                <th scope="col">Classes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $student->getId() ?></th>
                                <td><?= $student->getName() ?></td>
                                <td><?= $student->getAge() ?></td>
                                <td><?= $student->getMajor() ?></td>
                                <td>
                                    <?php
                                        $conn = DB::connect();
                                        $sql = "SELECT * FROM `dangky` WHERE `id_sv` = " . $student->getId();
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            $first = true;
                                            while ($row = $result->fetch_assoc()) {
                                                if ($first) {
                                                    $first = false;
                                                } else {
                                                    echo ', ';
                                                }
                                                $sql = "SELECT `name` FROM `classes` WHERE `id_mh` = " . $row['id_mh'];
                                                echo $conn->query($sql)->fetch_assoc()['name'];
                                            }
                                        }
                                        $conn->close();
                                    ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <a href="../public/students">
                <button class="btn btn-secondary">Home</button>
            </a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
    </body>
</html>