<?php

require_once '../app/models/Matakuliah.php';

class MatakuliahController {
    private $matakuliahmodel;

    public function __construct() {
        $this->matakuliahmodel = new Matakuliah();
    }

    
    public function index() {
        $matakuliahs = $this->matakuliahmodel->getAll();
        require '../app/views/matakuliah/index.php';
    }
    

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->matakuliahmodel->create($_POST);
            header('Location: app/views/matakuliah/index');
        }
        require '../app/views/matakuliah/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->matakuliahmodel->update($_POST);
            header('Location: app/views/matakuliah/index');
            exit;
        }
        $matakuliah = $this->matakuliahmodel->getById($id);
        if (!$matakuliah) {
            header('Location: app/views/matakuliah/index'); // Atau tampilkan pesan error
            exit;
        }
        require '../app/views/matakuliah/edit.php';
    }
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $this->matakuliahmodel->update($_POST);
            header('Location: ../index');
            exit;
        }
        $matakuliah = $this->matakuliahmodel->getById($id);
        if (!$matakuliah) {
            header('Location: ../index'); // Atau tampilkan pesan error
            exit;
        }
    }
    public function delete($id) {
        $matakuliah = new Matakuliah();

        // Cek jika ID valid
        if (!empty($id) && is_numeric($id)) {
            $matakuliah->delete($id);
            
            // Redirect ke halaman index setelah penghapusan berhasil
            header("Location: /manajemen-nilai-mahasiswa/matakuliah/index");
            exit;
        } else {
            echo "ID tidak valid untuk delete.";
        }
    }
}
?>