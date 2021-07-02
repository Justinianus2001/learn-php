<?php include_once "../Models/Student.php" ?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./students">List Students</a></li>
            <li class="breadcrumb-item active">Detail Student</li>
        </ol>
    </div>
</header>
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Detail Student</div>
                            <div class="card-body">
                                <div class="container mt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="text-center">Detail Student</h4>
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
                                <br>
                                <div class="container mt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="text-center">Classes Registered</h4>
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
                                    <div class="text-end">
                                        <a href="../public/students">
                                            <button class="btn btn-secondary">Home</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
                        </script>