<!DOCTYPE html>
<html>
<head>
    <title>Tambah Matakuliah</title>
</head>
<body>
    <h1>Tambah Matakuliah</h1>
    <form action="../matakuliah/create" method="POST">
    <label for="kode_matakuliah">Kode:</label>
        <input type="number" name="kode_matakuliah" required>
        <br>
        <label for="nama_matakuliah">Nama Matakuliah:</label>
        <input type="text" name="nama_matakuliah" required>
        <br>
        <label for="jumah_sks">SKS:</label>
        <input type="number" name="jumlah_sks" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
    <a href="/matakuliah">Kembali ke Daftar Matakuliah</a>
</body>
</html>