<?php
// app/controllers/UserController.php
require_once '../app/models/data-mahasiswa.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Mahasiswa();
    }

    public function index() {
        $users = $this->userModel->getAllMahasiswa();
        require_once '../app/views/mahasiswa/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel->create($_POST);
            header('Location: app/views/mahasiswa/index');
        }
        require '../app/views/mahasiswa/create.php';
    }

    public function edit($nim) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel->update($_POST);
            header('Location: app/views/mahasiswa/index');
            exit;
        }
        $mahasiswa = $this->userModel->getById($nim);
        if (!$mahasiswa) {
            header('Location: app/views/mahasiswa/index'); // Atau tampilkan pesan error
            exit;
        }
        require '../app/views/mahasiswa/edit.php';
    }
    public function update($nim) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->userModel->update($_POST);
            header('Location: app/views/mahasiswa/index');
            exit;
        }
        $mahasiswa = $this->userModel->getById($nim);
        if (!$mahasiswa) {
            header('Location: app/views/mahasiswa/index'); // Atau tampilkan pesan error
            exit;
        }
    }
    public function delete($nim) {
        $mahasiswa = new Mahasiswa();

        // Cek jika ID valid
        if (!empty($nim) && is_numeric($nim)) {
            $mahasiswa->delete($nim);
            
            // Redirect ke halaman index setelah penghapusan berhasil
            header("Location: /manajemen-nilai-mahasiswa/app/views/mahasiswa/index");
            exit;
        } else {
            echo "ID tidak valid untuk delete.";
        }
    }
}
?>  