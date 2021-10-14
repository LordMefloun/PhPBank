<?php
class UsersContr extends Users {

    public function checkUserPassword($user, $password){
        if ($this->getUser($user) != null){
            $userobj = $this->getUser($user);
            return ($userobj['pwd'] == $password);
        }
        else{
            return false;
        }
    }

    public function sendMoney($sender, $reciever, $amount){
        $recieverMoney = $this->getUserMoney($reciever);
        $senderMoney = $this->getUserMoney($sender);
        $this->setMoney($sender, $senderMoney - $amount);
        $this->setMoney($reciever, $recieverMoney + $amount);
        $this->addTransaction($sender, $reciever, $amount);
    }


    public function getUserMoney($user){
        return $this->getUser($user)['balance'];
    }
    
}