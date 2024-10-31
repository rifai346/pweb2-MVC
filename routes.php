<?php
// Include controller yang diperlukan
require 'app/controllers/NilaiUjianController.php';

$controller = new nilaiController();

// Parsing URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$parts = explode('/', trim($uri, '/'));

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Logika Routing
if ($parts[0] === 'basdeat2_klp6') {
    if (isset($parts[1])) {
        switch ($parts[1]) {
            case 'nilaiujian':
                if (isset($parts[2])) {
                    switch ($parts[2]) {
                        case 'create':
                            $controller->create();
                            break;
                        case 'edit':
                            if (isset($parts[3]) && is_numeric($parts[3])) {
                                $controller->edit($parts[3]);
                                print_r($parts);
                            } else {
                                echo "ID tidak valid untuk edit.";
                                print_r($parts[3]);
                            }
                            break;
                        case 'update':
                            if (isset($parts[3]) && is_numeric($parts[3])) {
                                $controller->update($parts[3]);
                                print_r($parts);
                            } else {
                                echo "ID tidak valid untuk edit.";
                                print_r($parts[3]);
                            }
                            break;
                        case 'delete':
                            if (isset($parts[3]) && is_numeric($parts[3])) {
                                $controller->delete($parts[3]);
                            } else {
                                echo "ID tidak valid untuk delete.";
                            }
                            break;
                        default:
                            $controller->index();
                            break;
                    }
                } else {
                    $controller->index();
                }
                break;

            case 'dashboard':
                // Rute untuk mengakses dashboard
                require 'app/views/dashboard/index.php';
                break;

            case 'nilaiujian':
                // Rute untuk mengakses data nilaiujian
                require 'app/views/nilaiujian/index.php';
                break;

            default:
                http_response_code(404);
                echo "Halaman tidak ditemukan.";
                break;
        }
    } else {
        http_response_code(404);
        echo "Halaman tidak ditemukan.";
    }
} else {
    http_response_code(404);
    echo "Halaman tidak ditemukan.";
}
