<?php
class Users extends Dbh{
    
    protected function getUser($name){
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll();
        if (isset($results[0])){
            return $results[0];
        }
        else{
            return null;
        }
    }
    
    protected function addTransaction($sender, $reciever, $amount){
        $sql = "INSERT INTO transactions (sender, reciever, amount) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sender, $reciever, $amount]);
    }

    protected function setMoney($user, $money){
        $sql = "UPDATE users SET balance = ? WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$money, $user]);
    }

    protected function getUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    protected function getIncomingTransactions($user){
        $sql = "SELECT * FROM transactions WHERE reciever = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getOutcomingTransactions($user){
        $sql = "SELECT * FROM transactions WHERE sender = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user]);
        $results = $stmt->fetchAll();
        return $results;
    }
}