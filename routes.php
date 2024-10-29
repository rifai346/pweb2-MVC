<?php
require 'app/controllers/MatakuliahController.php';

$controller = new MatakuliahController();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$parts = explode('/', $uri);

if ($parts[1] === 'matakuliah') {
    if (isset($parts[2])) {
        switch ($parts[2]) {
            case 'create':
                $controller->create();
                break;
            case 'edit':
                $controller->edit($parts[3]); // Mengambil ID dari URL
                break;
            case 'delete':
                $controller->delete($parts[3]); // Mengambil ID dari URL
                break;
            default:
                $controller->index();
                break;
        }
    } else {
        $controller->index();
    }
} else {
    // Halaman tidak ditemukan
    http_response_code(404);
    echo "Halaman tidak ditemukan.";
}
?>