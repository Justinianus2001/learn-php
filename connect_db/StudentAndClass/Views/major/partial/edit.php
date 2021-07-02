    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-3">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="./majors">List Majors</a></li>
            <li class="breadcrumb-item active">Edit Major</li>
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
                            <div class="card-header">Edit Major</div>
                            <div class="card-body">
                                <div class="container mt-3">
                                    <!-- Button trigger modal -->
                                    <form method="POST" action="../Models/edit-major.php">
                                        <div class="modal-body">
                                            <input type="hidden" value="<?= $_REQUEST['edit'] ?>" class="form-control" name="id">
                                            <div class="mb-3">
                                                <label class="form-label">Major</label>
                                                <input type="text" class="form-control" name="major" value="<?= $major->getMajor() ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="./majors">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Home</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary" onclick="return alert('Chỉnh sửa thông tin chuyên ngành thành công !')">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
                        </script>