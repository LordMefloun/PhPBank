<?php
class UsersContr extends Users {

    public function checkUserPassword($user, $password){
        if (isset($this->getUser($user))){
            $userobj = $this->getUser($user);
            return ($userobj['pwd'] == $password);
        }
        else{
            return null;
        }
    }
    
}