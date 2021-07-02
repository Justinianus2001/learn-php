<?php
    include_once "../Models/Student.php";
    include_once "../Models/Classes.php";
    include_once "../Models/DBs.php";
?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./students">List Students</a></li>
            <li class="breadcrumb-item active">Join Class</li>
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
                            <div class="card-header">Join Class</div>
                            <div class="card-body">
                                <div class="container mt-0">
                                    <!-- Button trigger modal -->
                                    <form method="POST" action="../Models/join-class.php">
                                        <div class="modal-body">
                                            <div class="mb-0">
                                                <h4 class="form-label text-center">Name Classes</h4>
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
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Home</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary" onclick="return alert('Đăng ký lớp học thành công !')">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
                        </script>