<?php

class Dbh {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'physical_science_db';

    protected function connect() {
        
        try {
            
            $db = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            $pdo = new PDO($db, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;

        } catch(PDOException $e) {

            echo 'Connection Failed!: ' . $e->getMessage();
            die();
            
        }

    }

}
