<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Matakuliah</h1>
        <form action="../matakuliah/create" method="POST" class="form">
            <div class="form-group">
                <label for="kode_matakuliah">Kode:</label>
                <input type="number" class="form-control" id="kode_matakuliah" name="kode_matakuliah" required>
            </div>
            <div class="form-group">
                <label for="nama_matakuliah">Nama Matakuliah:</label>
                <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" required>
            </div>
            <div class="form-group">
                <label for="jumlah_sks">SKS:</label>
                <input type="number" class="form-control" id="jumlah_sks" name="jumlah_sks" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/matakuliah" class="btn btn-secondary ml-2">Kembali ke Daftar Matakuliah</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
