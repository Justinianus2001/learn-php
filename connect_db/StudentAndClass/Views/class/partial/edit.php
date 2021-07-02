<?php include_once "../Models/Subjects.php"; ?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./classes">List Classes</a></li>
            <li class="breadcrumb-item active">Edit Class</li>
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
                            <div class="card-header">Edit Class</div>
                            <div class="card-body">
                                <div class="container mt-3">
                                    <!-- Button trigger modal -->
                                    <form method="POST" action="../Models/edit-class.php">
                                        <div class="modal-body">
                                            <input type="hidden" value="<?= $_REQUEST['edit'] ?>" class="form-control" name="id">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" value="<?= $class->getName() ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <select class="form-select" name="subject" aria-label="Default select example">
                                                    <option value=""></option>
                                                    <?php foreach (Subject::getList() as $subject) {
                                                        if ($class->getSubject() == $subject->getSubject()) { ?>
                                                        <option value="<?= $subject->getSubject() ?>" selected><?= $subject->getSubject() ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?= $subject->getSubject() ?>"><?= $subject->getSubject() ?></option>
                                                    <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="./classes">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Home</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary" onclick="return alert('Chỉnh sửa thông tin lớp học thành công !')">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
                        </script>