<?php

require_once '../app/models/NilaiUjianModel.php';
require_once '../app/models/data-mahasiswa.php';
require_once '../app/models/Matakuliah.php';

class nilaiController {
    private $nilaimodel;
    private $usermodel;
    private $matakuliahmodel;

    public function __construct() {
        $this->nilaimodel = new nilaiUjian();
        $this->usermodel = new Mahasiswa();
        $this->matakuliahmodel = new Matakuliah();
    }
    
    public function index() {
        $nilaiujians = $this->nilaimodel->getAllNilai();
        require '../app/views/nilaiujian/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->nilaimodel->create($_POST);
            header('Location: app/views/nilaiujian/index');
        }
        $mahasiswa = $this->usermodel->getAllMahasiswa();
        $matakuliahmodel = $this->matakuliahmodel->getAll();
        
        require '../app/views/nilaiujian/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->nilaimodel->update($_POST);
            header('Location: app/views/nilaiujian/index');
            exit;
        }
        $nilaiujian = $this->nilaimodel->getById($id);
        if (!$nilaiujian) {
            header('Location: app/views/nilaiujian/index'); // Atau tampilkan pesan error
            exit;
        }
        require '../app/views/nilaiujian/edit.php';
    }
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->nilaimodel->update($_POST);
            header('Location: /manajemen-nilai-mahasiswa/app/views/nilaiujian');
            exit;
        }
        $nilaiujian = $this->nilaimodel->getById($id);
        if (!$nilaiujian) {
            header('Location: app/views/nilaiujian/index'); // Atau tampilkan pesan error
            exit;
        }
    }
    public function delete($id) {
        $nilaiujian = new nilaiUjian();

        // Cek jika ID valid
        if (!empty($id) && is_numeric($id)) {
            $nilaiujian->delete($id);
            
            // Redirect ke halaman index setelah penghapusan berhasil
            header("Location: ../nilaiujian/index");
            exit;
        } else {
            echo "ID tidak valid untuk delete.";
        }
    }
}
?>