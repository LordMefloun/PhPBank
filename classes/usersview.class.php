<?php 
class UsersView extends Users {
    public function renderUser($name){
        $user = $this->getUser($name);
        echo 'Welcome '.$user['username'].' Your balance is '.$user['balance'].'$';
    }
}