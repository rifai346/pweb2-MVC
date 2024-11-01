<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Mahasiswa</h1>
        <form action="/manajemen-nilai-mahasiswa/mahasiswa/update/<?php echo $mahasiswa['nim']; ?>" method="POST" class="form">
            <div class="form-group">
                <label for="nim">nim:</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text   " class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>" required>
            </div>
            <input type="hidden" name="nim" value="<?php echo $mahasiswa['nim']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/manajemen_nilai_mahasiswa/mahasiswa" class="btn btn-secondary ml-2">Kembali ke Daftar Matakuliah</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>