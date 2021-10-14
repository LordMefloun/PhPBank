<?php

include_once 'includes.includes.php';
$uc = new UsersContr();


if (Auth::isLogged()){header('location: ./../index.php');}

if (isset($_POST["submit"])){
    $number = $_POST["number"];
    $user = $_POST["user"]; 
    $userbalance = $uc->getUserMoney(Auth::getAuthUser());
    if ($number > 0){
        if (isset($user)){
            if ($userbalance > $number){
                $uc->sendMoney( Auth::getAuthUser(), $user, $number);
                header('location: ./../index.php?e=Uspesne prevedeno ');
            }
            else header('location: ./../index.php?e=Nedostatek penez');
        }
    } else header('location: ./../index.php?e=Cislo musi byt vetsi jak 0');
}
?>