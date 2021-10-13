<?php
class Users extends Dbh{
    
    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        return $stmt->fetchAll()[0];
    }
}