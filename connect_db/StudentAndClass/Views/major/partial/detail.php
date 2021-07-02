<?php include_once "../Models/Majors.php"; ?>
    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./majors">List Majors</a></li>
            <li class="breadcrumb-item active">Detail Major</li>
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
                            <div class="card-header">Detail Major</div>
                            <div class="card-body">
                                <div class="container mt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="text-center">Detail Major</h4>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Major</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><?= $major->getId() ?></th>
                                                        <td><?= $major->getMajor() ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <a href="../public/majors">
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