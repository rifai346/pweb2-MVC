<?php
// Mengatur autoloading untuk kelas
require '../app/config/database.php'; // Menghubungkan ke file konfigurasi database
require '../app/controllers/MatakuliahController.php'; // Menghubungkan ke controller

// Membuat instance dari controller
$controller = new MatakuliahController();

// Mengambil URI dari permintaan
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$parts = explode('/', trim($uri, '/'));

// Menentukan aksi berdasarkan URL
if ($parts[0] === 'matakuliah') {
    if (isset($parts[1])) {
        switch ($parts[1]) {
            case 'create':
                $controller->create(); // Menangani permintaan untuk membuat matakuliah
                break;
            case 'edit':
                if (isset($parts[2])) {
                    $controller->edit($parts[2]); // Menangani permintaan untuk mengedit matakuliah dengan ID
                } else {
                    http_response_code(404); // Jika ID tidak ada, tampilkan error 404
                }
                break;
            case 'delete':
                if (isset($parts[2])) {
                    $controller->delete($parts[2]); // Menangani permintaan untuk menghapus matakuliah dengan ID
                } else {
                    http_response_code(404); // Jika ID tidak ada, tampilkan error 404
                }
                break;
            default:
                $controller->index(); // Menampilkan daftar matakuliah
                break;
        }
    } else {
        $controller->index(); // Menampilkan daftar matakuliah jika tidak ada aksi yang ditentukan
    }
} else {
    // Jika URL tidak sesuai, tampilkan halaman tidak ditemukan
    http_response_code(404);
    echo "Halaman tidak ditemukan.";
}
?>