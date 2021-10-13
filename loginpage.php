<?php 
include './includes/autoloader.php';

if (isset($_SESSION['username'])){
    header('location: ../index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank - Log In</title>
</head>
<body>
    <form action="./includes/login.includes.php" method="post">
        <label for="">Username: </label><input type="text" name="user" id=""><br>
        <label for="">Password: </label><input type="password" name="pwd" id=""><br>
        <input type="submit" name="submit" value="Prihlasit">
    </form>
</body>
</html>