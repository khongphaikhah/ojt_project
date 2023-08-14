<?php

class Connect {
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'db_mvc';

    private function conn(){
        $conn = mysqli_connect('localhost','root','','db_mvc');
        mysqli_set_charset($conn,'utf8');
        return $conn;
    }

    public function select($sql) {
        $conn = $this->conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    public function execute($sql): void {
        $conn = $this->conn();
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
}