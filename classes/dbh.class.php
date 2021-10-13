<?php

class Dbh{

    private $host = "localhost";
    private $pwd = "";
    private $username = "root";
    private $database = "phpdb";

    protected function connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
        $pdo = new PDO($dsn, $this->username, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}