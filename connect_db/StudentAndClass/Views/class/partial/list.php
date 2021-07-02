<?php
    include_once "../Models/Subjects.php";
    include_once "../Models/Classes.php";
?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./classes">List Classes</a></li>
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
                            <div class="card-header">List Classes</div>
                            <div class="card-body">
                                <form class="input-group" method="GET" action="./classes">
                                    <input type="search" class="form-control rounded" placeholder="Enter your search keywords here"
                                        aria-label="Search" aria-describedby="search-addon" name="keyword">
                                    <button class="btn btn-primary" name="search" value="true">Search</button>
                                </form>

                                <!-- Optional JavaScript; choose one of the two! -->

                                <div class="container mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#class-add">
                                        Add Class
                                    </button>
                                    <div class="modal fade" id="class-add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="classLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST" action="./classes">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="classLabel">Add Class</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Subject</label>
                                                            <select class="form-select" name="subject" aria-label="Default select example">
                                                                <option value=""></option>
                                                                <?php foreach (Subject::getList() as $subject) { ?>
                                                                    <option value="<?= $subject->getSubject() ?>"><?= $subject->getSubject() ?></option>
                                                                <?php } ?>
                                                            </select>
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
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list_class as $class) { ?>
                                                    <tr>
                                                        <th scope="row"><?= $class->getId() ?></th>
                                                        <td><?= $class->getName() ?></td>
                                                        <td><?= $class->getSubject() ?></td>
                                                        <td>
                                                            <form style="display: inline;" method="POST" action="./classes">
                                                                <button class="btn btn-info"
                                                                    name="detail" value="<?= $class->getId() ?>">Detail</button>
                                                            </form>
                                                            <form style="display: inline;" method="POST" action="./classes">
                                                                <button class="btn btn-warning"
                                                                    name="edit" value="<?= $class->getId() ?>">Edit</button>
                                                            </form>
                                                            <form style="display: inline;" method="POST" action="./classes">
                                                                <button class="btn btn-danger"
                                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa lớp học này ?')" 
                                                                    name="delete" value="<?= $class->getId() ?>">Delete</button>
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
                                    $allPage = isset($get['search']) ? ceil(count(Classes::getListSearch($get['keyword'])) / 5) : ceil(count(Classes::getList()) / 5);
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
                                                <a class="page-link" href="classes?page=<?= $curPage - 1 ?><?= $actual_link ?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        <?php }
                                        if ($curPage > 2) { ?>
                                            <li class="page-item"><a class="page-link" href="classes?page=<?= 1 ?><?= $actual_link ?>"><?= 1 ?></a></li>
                                        <?php }
                                        if ($curPage > 3) { ?>
                                            <li class="page-item"><span class="page-link">...</span></li>
                                        <?php }
                                        if ($curPage > 1) { ?>
                                            <li class="page-item"><a class="page-link" href="classes?page=<?= $curPage - 1 ?><?= $actual_link ?>"><?= $curPage - 1 ?></a></li>
                                        <?php } ?>
                                        <li class="page-item"><b><a class="page-link" href="classes?page=<?= $curPage ?><?= $actual_link ?>"><?= $curPage ?></a></b></li>
                                        <?php if ($curPage < $allPage) { ?>
                                            <li class="page-item"><a class="page-link" href="classes?page=<?= $curPage + 1 ?><?= $actual_link ?>"><?= $curPage + 1 ?></a></li>
                                        <?php }
                                        if ($curPage + 2 < $allPage) { ?>
                                            <li class="page-item"><span class="page-link">...</span></li>
                                        <?php }
                                        if ($curPage + 1 < $allPage) { ?>
                                            <li class="page-item"><a class="page-link" href="classes?page=<?= $allPage ?><?= $actual_link ?>"><?= $allPage ?></a></li>
                                        <?php }
                                        if ($curPage < $allPage) { ?>
                                            <li class="page-item">
                                                <a class="page-link" href="classes?page=<?= $curPage + 1 ?><?= $actual_link ?>" aria-label="Next">
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