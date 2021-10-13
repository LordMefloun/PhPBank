<?php 
include './includes/includes.includes.php';
$view = new UsersView();

if (!Auth::isLogged()) {header('location: loginpage.php');}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $view->renderUser(Auth::getAuthUser());
    ?>
</body>
</html>