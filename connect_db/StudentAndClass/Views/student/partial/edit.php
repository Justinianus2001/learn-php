<?php include_once "../Models/Majors.php"; ?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./students">List Students</a></li>
            <li class="breadcrumb-item active">Edit Student</li>
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
                            <div class="card-header">Edit Student</div>
                            <div class="card-body">
                                <div class="container mt-3">
                                    <!-- Button trigger modal -->
                                    <form method="POST" action="../Models/edit-student.php">
                                        <div class="modal-body">
                                            <input type="hidden" value="<?= $_REQUEST['edit'] ?>" class="form-control" name="id">
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
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Home</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary" onclick="return alert('Chỉnh sửa thông tin sinh viên thành công !')">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
                        </script>