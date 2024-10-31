<?php
// Include controller yang diperlukan
require 'app/controllers/MatakuliahController.php';
require 'app/controllers/MahasiswaController.php';
require 'app/controllers/NilaiUjianController.php';

$controller = new MatakuliahController();
$controller2 = new UserController();
$controller3 = new nilaiController();

// Parsing URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$parts = explode('/', trim($uri, '/'));

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// print_r($parts);
// Logika Routing
if ($parts[0] === 'manajemen-nilai-mahasiswa') {
    if (isset($parts[3])) {
        switch ($parts[3]) {    
            case 'mahasiswa':
                if (isset($parts[4])) {
                    switch ($parts[4]) {
                        case 'create':
                            $controller2->create();
                            break;
                        case 'edit':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller2->edit($parts[5]);
                            } else {
                                echo "ID tidak valid untuk edit.";
                            }
                            break;
                        case 'update':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller2->update($parts[5]);
                            } else {
                                echo "ID tidak valid untuk update.";
                            }
                            break;
                        case 'delete':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller2->delete($parts[5]);
                            } else {
                                echo "ID tidak valid untuk delete.";
                            }
                            break;
                        default:
                            $controller2->index();
                            break;
                    }
                } else {
                    $controller2->index();
                }
                break;

            case 'matakuliah':
                if (isset($parts[4])) {
                    switch ($parts[4]) {
                        case 'create':
                            $controller->create();
                            break;
                        case 'edit':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller->edit($parts[5]);
                            } else {
                                echo "ID tidak valid untuk edit.";
                            }
                            break;
                        case 'update':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller->update($parts[5]);
                            } else {
                                echo "ID tidak valid untuk update.";
                            }
                            break;
                        case 'delete':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller->delete($parts[5]);
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
            case 'nilaiujian':
                if (isset($parts[4])) {
                    switch ($parts[4]) {
                        case 'create':
                            $controller3->create();
                            break;
                        case 'edit':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller3->edit($parts[5]);
                            } else {
                                echo "ID tidak valid untuk edit.";
                            }
                            break;
                        case 'update':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller3->update($parts[5]);
                            } else {
                                echo "ID tidak valid untuk update.";
                            }
                            break;
                        case 'delete':
                            if (isset($parts[5]) && is_numeric($parts[5])) {
                                $controller3->delete($parts[5]);
                            } else {
                                echo "ID tidak valid untuk delete.";
                            }
                            break;
                        default:
                            $controller3->index();
                            break;
                    }
                } else {
                    $controller3->index();
                }
                break;

            case 'dashboard':
                // Rute untuk mengakses dashboard
                require 'app/views/dashboard/index.php';
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