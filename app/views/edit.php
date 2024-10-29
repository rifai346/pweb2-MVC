<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
</head>
<body>
    <h1>Edit Matakuliah</h1>
    <form action="/matakuliah/edit/<?php echo $matakuliah['id']; ?>" method="POST">
        <label for="nama">Nama Matakuliah:</label>
        <input type="text" name="nama" value="<?php echo $matakuliah['nama']; ?>" required>
        <br>
        <label for="sks">SKS:</label>
        <input type="number" name="sks" value="<?php echo $matakuliah['sks']; ?>" required>
        <br>
        <input type="hidden" name="id" value="<?php echo $matakuliah['id']; ?>">
        <input type="submit" value="Update">
    </form>
    <a href="/matakuliah">Kembali ke Daftar Matakuliah</a>
</body>
</html>