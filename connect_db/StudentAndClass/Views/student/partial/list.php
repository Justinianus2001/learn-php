<?php
    include_once "../Models/Majors.php";
    include_once "../Models/Student.php";
    include_once "../Models/Classes.php";
?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./students">List Students</a></li>
            <li class="breadcrumb-item active">List</li>
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
                            <div class="card-header">List Students</div>
                            <div class="card-body">
                                <form class="input-group" method="GET" action="./students">
                                    <input type="search" class="form-control rounded" placeholder="Enter your search keywords here"
                                        aria-label="Search" aria-describedby="search-addon" name="keyword">
                                    <button class="btn btn-primary" name="search" value="true">Search</button>
                                </form>

                                <!-- Optional JavaScript; choose one of the two! -->

                                <div class="container mt-3">
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
                                    <div class="d-flex p-2"></div>
                                    <div class="row">
                                        <div class="col-12">
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
                                <?php
                                    $allPage = isset($get['search']) ? ceil(count(Student::getListSearch($get['keyword'])) / 5) : ceil(count(Student::getList()) / 5);
                                    $curPage = isset($get['page']) ? $get['page'] : 1;
                                    $actual_link = "";
                                    foreach ($_GET as $key => $val) {
                                        if ($key == 'keyword' or $key == 'search') {
                                            $actual_link .= "&" . $key . "=" . $val;
                                        }
                                    }
                                ?>
                                <nav class="container mt-0" aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php if ($curPage > 1) { ?>
                                            <li class="page-item">
                                                <a class="page-link" href="students?page=<?= $curPage - 1 ?><?= $actual_link ?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        <?php }
                                        if ($curPage > 2) { ?>
                                            <li class="page-item"><a class="page-link" href="students?page=<?= 1 ?><?= $actual_link ?>"><?= 1 ?></a></li>
                                        <?php }
                                        if ($curPage > 3) { ?>
                                            <li class="page-item"><span class="page-link">...</span></li>
                                        <?php }
                                        if ($curPage > 1) { ?>
                                            <li class="page-item"><a class="page-link" href="students?page=<?= $curPage - 1 ?><?= $actual_link ?>"><?= $curPage - 1 ?></a></li>
                                        <?php } ?>
                                        <li class="page-item"><b><a class="page-link" href="students?page=<?= $curPage ?><?= $actual_link ?>"><?= $curPage ?></a></b></li>
                                        <?php if ($curPage < $allPage) { ?>
                                            <li class="page-item"><a class="page-link" href="students?page=<?= $curPage + 1 ?><?= $actual_link ?>"><?= $curPage + 1 ?></a></li>
                                        <?php }
                                        if ($curPage + 2 < $allPage) { ?>
                                            <li class="page-item"><span class="page-link">...</span></li>
                                        <?php }
                                        if ($curPage + 1 < $allPage) { ?>
                                            <li class="page-item"><a class="page-link" href="students?page=<?= $allPage ?><?= $actual_link ?>"><?= $allPage ?></a></li>
                                        <?php }
                                        if ($curPage < $allPage) { ?>
                                            <li class="page-item">
                                                <a class="page-link" href="students?page=<?= $curPage + 1 ?><?= $actual_link ?>" aria-label="Next">
                                                    <span class="sr-only">Next</span>
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
                        </script>