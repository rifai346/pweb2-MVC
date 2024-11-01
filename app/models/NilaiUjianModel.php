<?php

require_once __DIR__ . '../../config/database.php';
class nilaiUjian
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
        $this->db->connect(); // Menghubungkan ke database
    }

    public function getAllNilai()
    {
        $query = "SELECT * FROM data_nilai_ujian";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $query = "SELECT * FROM data_nilai_ujian WHERE id_nilai = :id_nilai";
        $this->db->query($query);
        $this->db->bind(':id_nilai', $id);
        return $this->db->single();
    }

    public function create($data)
    {
        $query = "INSERT INTO data_nilai_ujian (nilai_matkul, id_matakuliah, nim) VALUES (:nilai_matkul, :id_matakuliah, :nim)";
        $this->db->query($query);
        $this->db->bind(':nilai_matkul', $data['nilai_matkul']);
        $this->db->bind(':id_matakuliah', $data['id_matakuliah']);
        $this->db->bind(':nim', $data['nim']);
        return $this->db->execute();
    }

    public function update($data)
    {
        $query = "UPDATE data_nilai_ujian SET nilai_matkul = :nilai_matkul WHERE id_nilai = :id_nilai";
        $this->db->query($query);
        $this->db->bind(':id_nilai', $data['id_nilai']);
        $this->db->bind(':nilai_matkul', $data['nilai_matkul']);
        return $this->db->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM data_nilai_ujian WHERE id_nilai = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}
