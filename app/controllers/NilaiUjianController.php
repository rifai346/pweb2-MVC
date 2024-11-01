<?php

require_once '../app/models/NilaiUjianModel.php';

class nilaiController {
    private $nilaimodel;

    public function __construct() {
        $this->nilaimodel = new nilaiUjian();
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

        $matakuliahList = $this->nilaimodel->getAllMatakuliah();
        $mahasiswaList = $this->nilaimodel->getAllMahasiswa();

        require '../app/views/nilaiujian/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->nilaimodel->update($_POST);
            header('Location: ../nilaiujian/index');
            exit;
        }
        $nilaiujian = $this->nilaimodel->getById($id);
        if (!$nilaiujian) {
            header('Location: app/views/nilaiujian/index'); // Atau tampilkan pesan error
            exit;
        }

        $matakuliahList = $this->nilaimodel->getAllMatakuliah();
        $mahasiswaList = $this->nilaimodel->getAllMahasiswa();

        require '../app/views/nilaiujian/edit.php';
    }
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->nilaimodel->update($_POST);
            header('Location: ../index');
            exit;
        }
        $nilaiujian = $this->nilaimodel->getById($id);
        if (!$nilaiujian) {
            header('Location: ../index'); // Atau tampilkan pesan error
            exit;
        }
    }
    public function delete($id) {
        $nilaiujian = new nilaiUjian();

        // Cek jika ID valid
        if (!empty($id) && is_numeric($id)) {
            $nilaiujian->delete($id);
            
            // Redirect ke halaman index setelah penghapusan berhasil
            header("Location: ../index");
            exit;
        } else {
            echo "ID tidak valid untuk delete.";
        }
    }
}
?>