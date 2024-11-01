<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai Ujian</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Nilai Ujian</h1>
        <form action="/manajemen-nilai-mahasiswa/nilaiujian/update" method="POST" class="form">
            <div class="form-group">
                <label for="nilai_matkul">NILAI MATKUL:</label>
                <input type="text" class="form-control" id="nila_matkul" name="nilai_matkul" value="<?php echo $nilaiujian['nilai_matkul']; ?>" required>
            </div>
            <div class="form-select">
                <label for="id_matakuliah">ID MATA KULIAH:</label>
                <input type="number" class="form-control" id="id_matakuliah" name="id_matakuliah" value="<?php echo $nilaiujian['id_matakuliah']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $nilaiujian['nim']; ?>" required>
            </div>
            <input type="hidden" name="id_nilai" value="<?php echo $nilaiujian['id_nilai']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../nilaiujian" class="btn btn-secondary ml-2">Kembali ke Daftar Nilai Ujian Matakuliah</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
