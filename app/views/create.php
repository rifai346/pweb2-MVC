<!DOCTYPE html>
<html>
<head>
    <title>Tambah Matakuliah</title>
</head>
<body>
    <h1>Tambah Matakuliah</h1>
    <form action="/matakuliah/create" method="POST">
        <label for="nama">Nama Matakuliah:</label>
        <input type="text" name="nama" required>
        <br>
        <label for="sks">SKS:</label>
        <input type="number" name="sks" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
    <a href="/matakuliah">Kembali ke Daftar Matakuliah</a>
</body>
</html>