<?php
require_once __DIR__.'/../../models/data-mahasiswa.php';

$userModel = new Mahasiswa();
$users = $userModel->getAllMahasiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - Data Statistik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/manajemen_nilai_mahasiswa/public/startbootstrap-simple-sidebar-gh-pages/css/styles.css" rel="stylesheet" />
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Dashboard</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/manajemen_nilai_mahasiswa/dashboard">Dashboard</a>
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
            <div class="container mt-5">
        <h1 class="mb-4">Daftar Matakuliah</h1>
        <a href="/manajemen_nilai_mahasiswa/mahasiswa/create" class="btn btn-primary mb-3">Tambah mahasiswa</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($users) && is_array($users)): ?>
                <?php $no = 1;
                foreach ($users as $mahasiswa): ?>
                <tr>
                <td><?php echo $no++; ?></td>
                    <td><?php echo $mahasiswa['nim'] ?></td>
                    <td><?php echo $mahasiswa['nama'] ?></td>
                    <td><?php echo $mahasiswa['email'] ?></td>
                    <td>
                        <a href="/manajemen_nilai_mahasiswa/mahasiswa/edit/<?php echo $mahasiswa['nim'] ?>">Edit</a>
                        <a href="/manajemen_nilai_mahasiswa/mahasiswa/delete/<?php echo $mahasiswa['nim']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada mahasiswa yang ditemukan.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/manajemen-nilai-mahasiswa/public/startbootstrap-simple-sidebar-gh-pages/js/scripts.js"></script>
</body>
</html>

