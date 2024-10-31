<?php
// app/models/User.php
// require_once '../../config/database.php';
require_once __DIR__ .'../../config/Database.php';

class Mahasiswa {
    private $db;

    public function __construct() {
        $this->db = new Database();
        $this->db->connect();
    }

    public function getAllMahasiswa() {
        $query = "SELECT * FROM data_mahasiswa";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getById($nim) {
        $query = "SELECT * FROM data_mahasiswa WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind(':nim', $nim);
        return $this->db->single();
    }

    // public function add($nim, $nama, $email) {
    //     $query = "INSERT INTO data_mahasiswa (nim, nama, email) VALUES (:nim, :nama, :email)";
    //     $this->db->query($query);
    //     $this->db->bind(':nim', $nim);
    //     $this->db->bind(':nama', $nama);
    //     $this->db->bind(':email', $email);
    //     return $this->db->execute();
    // }

    // public function update($nim, $nama, $email) {
    //     $query = "UPDATE data_mahasiswa SET nama = :nama, email = :email WHERE nim = :nim";
    //     $this->db->query($query);
    //     $this->db->bind(':nim', $nim);
    //     $this->db->bind(':nama', $nama);
    //     $this->db->bind(':email', $email);
    //     return $this->db->execute();
    // }

    public function create($data) {
        $query = "INSERT INTO data_mahasiswa (nim, nama, email) VALUES (:nim, :nama, :email)";
        $this->db->query($query);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':email', $data['email']);
        return $this->db->execute();
    }

    public function update($data) {
        $query = "UPDATE data_mahasiswa SET nim = :nim, nama = :nama, email = :email WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':email', $data['email']);
        return $this->db->execute();
    }

    public function delete($nim) {
        $query = "DELETE FROM data_mahasiswa WHERE nim = :nim";
        $this->db->query($query);
        $this->db->bind(':nim', $nim);
        return $this->db->execute();
    }
}
