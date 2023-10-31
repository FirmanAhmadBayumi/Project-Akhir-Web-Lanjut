<?php

class Database {
    public $db_host;
    public $db_user;
    public $db_pass;
    public $db_name;

    public $conn;

    public function __construct() {
        $this->db_host = "localhost";
        $this->db_user = "root";
        $this->db_pass = "";
        $this->db_name = "carewash";
    }

    public function connect() {
        $this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
}

$db = new Database();
$db->connect();