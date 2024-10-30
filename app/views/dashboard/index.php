<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - Data Statistik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/manajemen-nilai-mahasiswa/public/startbootstrap-simple-sidebar-gh-pages/css/styles.css" rel="stylesheet" />
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Dashboard</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="app/views/dashboard/index.php">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Mahasiswa</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Matakuliah</a>
            </div>
        </div>

        <!-- Page content wrapper -->
        <div id="page-content-wrapper">
            <!-- Top navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                </div>
            </nav>

            <!-- Page content -->
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Total Mahasiswa</div>
                            <div class="card-body">
                                <h5 class="card-title">
                                <?php
                                    // Ambil jumlah mahasiswa dari database
                                    require_once __DIR__ .'/../../config/database.php';

                                    $db = new Database();
                                    $conn = $db->connect();

                                    $db->query("SELECT COUNT(*) as total_mahasiswa FROM data_mahasiswa");
                                    $result = $db->single(); // Gunakan method single() untuk mengambil satu baris data
                                    echo $result['total_mahasiswa'];
                                    ?>
                                </h5>
                                <p class="card-text">Jumlah seluruh mahasiswa yang terdaftar</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-header">Total Matakuliah</div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                    // Ambil jumlah matakuliah dari database
                                    require_once __DIR__.'/../../config/database.php';

                                    $db = new Database();
                                    $conn = $db->connect();

                                    $db->query("SELECT COUNT(*) as total_matakuliah FROM data_matakuliah");
                                    $result = $db->single();
                                    echo $result['total_matakuliah'];
                                    ?>
                                </h5>
                                <p class="card-text">Jumlah seluruh mata kuliah yang tersedia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/manajemen-nilai-mahasiswa/public/startbootstrap-simple-sidebar-gh-pages/js/scripts.js"></script>
</body>
</html>
