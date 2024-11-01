<?php
require_once __DIR__.'/../../models/NilaiUjianModel.php';

$nilaimodel = new nilaiUjian();
$nilaiujians = $nilaimodel->getAllNilai();
?>

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
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/manajemen-nilai-mahasiswa/dashboard">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/manajemen-nilai-mahasiswa/mahasiswa">Data Mahasiswa</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/manajemen-nilai-mahasiswa/matakuliah">Data Matakuliah</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/manajemen-nilai-mahasiswa/nilaiujian">Data Nilai Ujian</a>
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
        <h1 class="mb-4">Daftar Nilai Ujian Matakuliah</h1>
        <a href="/manajemen-nilai-mahasiswa/nilaiujian/create" class="btn btn-primary mb-3">Tambah Nilai Ujian Matakuliah</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID NILAI</th>
                    <th>NILAI MATKUL</th>
                    <th>ID MATAKULIAH</th>
                    <th>NIM MAHASISWA</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($nilaiujians) && is_array($nilaiujians)): ?>
                    <?php foreach ($nilaiujians as $nilaiujian): ?>
                        <tr>
                            <td><?php echo $nilaiujian['id_nilai']; ?></td>
                            <td><?php echo $nilaiujian['nilai_matkul']; ?></td>
                            <td><?php echo $nilaiujian['id_matakuliah']; ?></td>
                            <td><?php echo $nilaiujian['nim']; ?></td>
                            <td>
                                <a href="/manajemen-nilai-mahasiswa/nilaiujian/edit/<?php echo $nilaiujian['id_nilai']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/manajemen-nilai-mahasiswa/nilaiujian/delete/<?php echo $nilaiujian['id_nilai']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus matakuliah ini?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada matakuliah yang ditemukan.</td>
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