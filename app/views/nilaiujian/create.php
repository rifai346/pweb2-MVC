<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai Ujian Matakuliah</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Nilai Ujian Matakuliah</h1>
        <form action="../nilaiujian/create" method="POST" class="form">
            <div class="form-group">
                <label for="nilai_matkul">NILAI MATKUL:</label>
                <input type="text" class="form-control" id="nilai_matkul" name="nilai_matkul" required>
            </div>
            <div class="form-group">
                <label for="id_matakuliah">ID MATAKULIAH:</label>
                <select class="form-select" id="id_matakuliah" name="id_matakuliah" required>
                    <option selected>Silahkan Pilih ID Matakuliah</option>
                    <?php foreach ($matakuliahList as $matakuliah): ?>
                        <option value="<?= $matakuliah['id_matakuliah']; ?>">
                            <?= $matakuliah['id_matakuliah']; ?> 
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Pilihan NIM Mahasiswa -->
            <div class="form-group">
                <label for="nim">NIM:</label>
                <select class="form-select" id="nim" name="nim" required>
                    <option selected>Silahkan Pilih NIM Mahasiswa</option>
                    <?php foreach ($mahasiswaList as $mahasiswa): ?>
                        <option value="<?= $mahasiswa['nim']; ?>">
                            <?= $mahasiswa['nim']; ?> 
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="../nilaiujian" class="btn btn-secondary ml-2">Kembali ke Daftar Nilai Ujian Matakuliah</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
