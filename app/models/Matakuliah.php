<?php

require_once __DIR__ .'../../config/Database.php';
class Matakuliah {
    private $db;
    

    public function __construct() {
        $this->db = new Database();
        $this->db->connect(); // Menghubungkan ke database
    }

    public function getAll() {
        $query = "SELECT * FROM data_matakuliah";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getById($id) {
        $query = "SELECT * FROM data_matakuliah WHERE id_matakuliah = :id_matakuliah";
        $this->db->query($query);
        $this->db->bind(':id_matakuliah', $id);
        return $this->db->single();
    }

    public function create($data) {
        $query = "INSERT INTO data_matakuliah (kode_matakuliah, nama_matakuliah, jumlah_sks) VALUES (:kode_matakuliah, :nama_matakuliah, :jumlah_sks)";
        $this->db->query($query);
        $this->db->bind(':nama_matakuliah', $data['nama_matakuliah']);
        $this->db->bind(':kode_matakuliah', $data['kode_matakuliah']);
        $this->db->bind(':jumlah_sks', $data['jumlah_sks']);
        return $this->db->execute();
    }

    public function update($data) {
        $query = "UPDATE data_matakuliah SET kode_matakuliah = :kode_matakuliah, nama_matakuliah = :nama_matakuliah, jumlah_sks = :jumlah_sks WHERE id_matakuliah = :id_matakuliah";
        $this->db->query($query);
        $this->db->bind(':id_matakuliah', $data['id_matakuliah']);
        $this->db->bind(':kode_matakuliah', $data['kode_matakuliah']);
        $this->db->bind(':nama_matakuliah', $data['nama_matakuliah']);
        $this->db->bind(':jumlah_sks', $data['jumlah_sks']);
        return $this->db->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM data_matakuliah WHERE id_matakuliah = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}
?>