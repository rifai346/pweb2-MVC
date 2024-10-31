<?php

class Database {
    private $host = 'mdi.my.id'; // Ganti dengan host database Anda
    private $db_name = 'basdeat2_klp6'; // Ganti dengan nama database Anda
    private $username = 'basdeat2_usr6'; // Ganti dengan username database Anda
    private $password = 'pOS(v?67S2{KRT&fub'; // Ganti dengan password database Anda
    private $conn;
    private $stmt;

    // Koneksi ke database
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Koneksi gagal: " . $exception->getMessage();
        }

        return $this->conn;
    }

    // Menjalankan query
    public function query($sql) {
        $this->stmt = $this->conn->prepare($sql);
    }

    // Mengikat parameter
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // Menjalankan query
    public function execute() {
        if (!isset($this->stmt)) {
            throw new Exception("You must call query() before calling execute()");
        }
        return $this->stmt->execute();
    }
    
    public function resultSet() {
        if (!isset($this->stmt)) {
            throw new Exception("You must call query() before calling resultSet()");
        }
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function single() {
        if (!isset($this->stmt)) {
            throw new Exception("You must call query() before calling single()");
        }
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>