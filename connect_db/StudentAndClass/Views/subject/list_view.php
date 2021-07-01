<?php
    include_once "../Models/DBs.php";
    include_once "../Models/Subjects.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>List Subject!</title>
    </head>
    <body>
        <div class="container mt-5">
            <!-- Button trigger modal -->
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

            <a href="./students">
                <button class="btn btn-info">List Students</button>
            </a>

            <a href="./classes">
                <button class="btn btn-info">List Classes</button>
            </a>

            <a href="./majors">
                <button class="btn btn-info">List Majors</button>
            </a>
            
            <a href=".">
                <button class="btn btn-secondary">Home</button>
            </a>

            <div class="d-flex p-2"></div>

            <form class="input-group" method="GET" action="./subjects">
                <input type="search" class="form-control rounded" placeholder="Enter your search keywords here"
                    aria-label="Search" aria-describedby="search-addon" name="keyword">
                <button class="btn btn-primary" name="search" value="true">Search</button>
            </form>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <h1>List Subject</h1>
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
            $cnt = 2;
            foreach ($_GET as $key => $val) {
                if ($key == 'keyword' or $key == 'search') {
                    $actual_link .= "&" . $key . "=" . $val;
                }
            }
        ?>
        <nav class="container mt-3" aria-label="Page navigation example">
            <ul class="pagination">
                <?php if ($curPage > 1) { ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $curPage - 1 ?><?= $actual_link ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php }
                if ($curPage > 2) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= 1 ?><?= $actual_link ?>"><?= 1 ?></a></li>
                <?php }
                if ($curPage > 3) { ?>
                    <li class="page-item"><span class="page-link">...</span></li>
                <?php }
                if ($curPage > 1) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $curPage - 1 ?><?= $actual_link ?>"><?= $curPage - 1 ?></a></li>
                <?php } ?>
                <li class="page-item"><b><a class="page-link" href="?page=<?= $curPage ?><?= $actual_link ?>"><?= $curPage ?></a></b></li>
                <?php if ($curPage < $allPage) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $curPage + 1 ?><?= $actual_link ?>"><?= $curPage + 1 ?></a></li>
                <?php }
                if ($curPage + 2 < $allPage) { ?>
                    <li class="page-item"><span class="page-link">...</span></li>
                <?php }
                if ($curPage + 1 < $allPage) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $allPage ?><?= $actual_link ?>"><?= $allPage ?></a></li>
                <?php }
                if ($curPage < $allPage) { ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $curPage + 1 ?><?= $actual_link ?>" aria-label="Next">
                            <span class="sr-only">Next</span>
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        -->
    </body>
</html>