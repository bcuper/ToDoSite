<?php

/**
 * klasa do zarządzania bazą danych
 */
class Baza {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'pass';
    private $db = 'test2';
    private $conn;

    public function zapytanie($sql) {
        try {
            $res = $this->conn->query($sql);
        } catch (Exception $e) {
            $e->get_message();
        }
        return $res;
    }

    public function polacz() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        } catch (Exception $e) {
            echo "Błąd: " . $e->get_message();
        }
    }

    public function waliduj($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}
