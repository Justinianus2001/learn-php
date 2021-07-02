<?php include_once "../Models/Classes.php"; ?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./classes">List Classes</a></li>
            <li class="breadcrumb-item active">Detail Class</li>
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
                            <div class="card-header">Detail Class</div>
                            <div class="card-body">
                                <div class="container mt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="text-center">Detail Class</h4>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Subject</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?= $class->getId() ?></th>
                                                        <td><?= $class->getName() ?></td>
                                                        <td><?= $class->getSubject() ?></td>
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
                                            <h4 class="text-center">Students Registered</h4>
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
                                                    <?php
                                                        $conn = DB::connect();
                                                        $sql = "SELECT * FROM `dangky` WHERE `id_mh` = " . $class->getId();
                                                        $getId = $conn->query($sql);
                                                        if ($getId->num_rows > 0) {
                                                            while ($id = $getId->fetch_assoc()) {
                                                                $sql = "SELECT * FROM `students` WHERE `id_sv` = " . $id['id_sv'];
                                                                $result = $conn->query($sql);
                                                                $row = $result->fetch_assoc(); ?>
                                                                <tr>
                                                                    <th scope="row"><?= $row['id_sv'] ?></th>
                                                                    <td><?= $row['name'] ?></td>
                                                                    <td><?= $row['age'] ?></td>
                                                                    <td><?= $row['major'] ?></td>
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
                                        <a href="../public/classes">
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