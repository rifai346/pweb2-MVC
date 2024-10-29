<?php

require_once '../app/models/Matakuliah.php';

class MatakuliahController {
    private $matakuliahmodel;

    public function __construct() {
        $this->matakuliahmodel = new Matakuliah();
    }

    
    public function index() {
        $matakuliahs = $this->matakuliahmodel->getAll();
        require 'app/views/matakuliah/index.php';
    }
    

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->matakuliahmodel->create($_POST);
            header('Location: /matakuliah');
        }
        require 'app/views/matakuliah/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->matakuliahmodel->update($_POST);
            header('Location: /matakuliah');
        }
        $matakuliah = $this->matakuliahmodel->getById($id);
        require 'app/views/matakuliah/edit.php';
    }

    public function delete($id) {
        $this->matakuliahmodel->delete($id);
        header('Location: /matakuliah');
    }
}
?>