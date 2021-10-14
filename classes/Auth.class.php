<?php 
class Auth {

    public static function getAuthUser(){
        return $_SESSION["AuthLogged"];
    }

    public static function isLogged(){
        return isset($_SESSION["AuthLogged"]);
    }

    public static function setAuthUser($user){
        $_SESSION["AuthLogged"] = $user;
    }

    public static function logOut(){
        $_SESSION["AuthLogged"] = null;
    }

}