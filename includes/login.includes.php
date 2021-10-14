<?php

include_once 'includes.includes.php';
$uc = new UsersContr();


if (Auth::isLogged()){header('location: ./../index.php');}

if (isset($_POST["submit"])){
    $pwd = $_POST["pwd"];
    $user = $_POST["user"];
    if ($uc->checkUserPassword($user, $pwd)){
        Auth::setAuthUser($user);
        header('location: ./../index.php');
    }
    else{
        header('location: ./../loginpage.php?e=Spatne udaje');
    }
}
?>