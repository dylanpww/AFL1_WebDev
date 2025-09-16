<?php
class DB{
    private $host = "localhost";
    private $user = "root";
    private $pwd  = "";
    private $db   = "tes_mvc";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
        if (!$this->conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }
}

?>