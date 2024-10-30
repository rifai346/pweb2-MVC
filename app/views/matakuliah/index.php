<?php
require_once '../app/models/Matakuliah.php';

$matakuliahmodel = new Matakuliah();
$matakuliahs = $matakuliahmodel->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Matakuliah</title>
</head>
<body>
    <h1>Daftar Matakuliah</h1>
    <a href="/manajemen-nilai-mahasiswa/matakuliah/create">Tambah Matakuliah</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($matakuliahs) && is_array($matakuliahs)): ?>
    <?php foreach ($matakuliahs as $matakuliah): ?>
    <tr>
        <td><?php echo $matakuliah['id_matakuliah']; ?></td>
        <td><?php echo $matakuliah['kode_matakuliah']; ?></td>
        <td><?php echo $matakuliah['nama_matakuliah']; ?></td>
        <td><?php echo $matakuliah['jumlah_sks']; ?></td>
        <td>
            <a href="/manajemen-nilai-mahasiswa/matakuliah/edit/<?php echo $matakuliah['id_matakuliah']; ?>">Edit</a>
            <a href="/manajemen-nilai-mahasiswa/matakuliah/delete/<?php echo $matakuliah['id_matakuliah']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus matakuliah ini?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="5">Tidak ada matakuliah yang ditemukan.</td>
    </tr>
<?php endif; ?>
    </table>
</body>
</html>