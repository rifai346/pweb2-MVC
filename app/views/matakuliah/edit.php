<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
</head>
<body>
    <h1>Edit Matakuliah</h1>
    <form action="/manajemen-nilai-mahasiswa/matakuliah/edit/<?php echo $matakuliah['id_matakuliah']; ?>" method="POST">
    <label for="kode_matakuliah">Kode Matakuliah:</label>
        <input type="text" name="kode_matakuliah" value="<?php echo $matakuliah['kode_matakuliah']; ?>" required>
        <br>
        <label for="nama">Nama Matakuliah:</label>
        <input type="text" name="nama_matakuliah" value="<?php echo $matakuliah['nama_matakuliah']; ?>" required>
        <br>
        <label for="sks">SKS:</label>
        <input type="number" name="jumlah_sks" value="<?php echo $matakuliah['jumlah_sks']; ?>" required>
        <br>
        <input type="hidden" name="id_matakuliah" value="<?php echo $matakuliah['id_matakuliah']; ?>">
        <input type="submit" value="Update">
    </form>
    <a href="../app/views/matakuliah/index.php">Kembali ke Daftar Matakuliah</a>
</body>
</html>