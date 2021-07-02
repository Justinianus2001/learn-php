<?php
    include_once "../Models/DBs.php";
    include_once "../Models/Subjects.php";
?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./subjects">List Subjects</a></li>
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
                            <div class="card-header">List Subjects</div>
                            <div class="card-body">
                                <form class="input-group" method="GET" action="./subjects">
                                    <input type="search" class="form-control rounded" placeholder="Enter your search keywords here"
                                        aria-label="Search" aria-describedby="search-addon" name="keyword">
                                    <button class="btn btn-primary" name="search" value="true">Search</button>
                                </form>

                                <!-- Optional JavaScript; choose one of the two! -->

                                <div class="container mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subject-add">
                                        Add Subject
                                    </button>
                                    <div class="modal fade" id="subject-add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="subjectLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST" action="./subjects">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="subjectLabel">Add Subject</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Subject</label>
                                                            <input type="text" class="form-control" name="subject">
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
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list_subject as $subject) { ?>
                                                    <tr>
                                                        <th scope="row"><?= $subject->getId() ?></th>
                                                        <td><?= $subject->getSubject() ?></td>
                                                        <td>
                                                            <form style="display: inline;" method="POST" action="./subjects">
                                                                <button class="btn btn-info"
                                                                    name="detail" value="<?= $subject->getId() ?>">Detail</button>
                                                            </form>
                                                            <form style="display: inline;" method="POST" action="./subjects">
                                                                <button class="btn btn-warning"
                                                                    name="edit" value="<?= $subject->getId() ?>">Edit</button>
                                                            </form>
                                                            <form style="display: inline;" method="POST" action="./subjects">
                                                                <button class="btn btn-danger"
                                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa môn học này ?')" 
                                                                    name="delete" value="<?= $subject->getId() ?>">Delete</button>
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
                                    $allPage = isset($get['search']) ? ceil(count(Subject::getListSearch($get['keyword'])) / 5) : ceil(count(Subject::getList()) / 5);
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
                                                <a class="page-link" href="subjects?page=<?= $curPage - 1 ?><?= $actual_link ?>" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                        <?php }
                                        if ($curPage > 2) { ?>
                                            <li class="page-item"><a class="page-link" href="subjects?page=<?= 1 ?><?= $actual_link ?>"><?= 1 ?></a></li>
                                        <?php }
                                        if ($curPage > 3) { ?>
                                            <li class="page-item"><span class="page-link">...</span></li>
                                        <?php }
                                        if ($curPage > 1) { ?>
                                            <li class="page-item"><a class="page-link" href="subjects?page=<?= $curPage - 1 ?><?= $actual_link ?>"><?= $curPage - 1 ?></a></li>
                                        <?php } ?>
                                        <li class="page-item"><b><a class="page-link" href="subjects?page=<?= $curPage ?><?= $actual_link ?>"><?= $curPage ?></a></b></li>
                                        <?php if ($curPage < $allPage) { ?>
                                            <li class="page-item"><a class="page-link" href="subjects?page=<?= $curPage + 1 ?><?= $actual_link ?>"><?= $curPage + 1 ?></a></li>
                                        <?php }
                                        if ($curPage + 2 < $allPage) { ?>
                                            <li class="page-item"><span class="page-link">...</span></li>
                                        <?php }
                                        if ($curPage + 1 < $allPage) { ?>
                                            <li class="page-item"><a class="page-link" href="subjects?page=<?= $allPage ?><?= $actual_link ?>"><?= $allPage ?></a></li>
                                        <?php }
                                        if ($curPage < $allPage) { ?>
                                            <li class="page-item">
                                                <a class="page-link" href="subjects?page=<?= $curPage + 1 ?><?= $actual_link ?>" aria-label="Next">
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