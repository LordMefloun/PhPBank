<?php 
include './includes/includes.includes.php';
$view = new UsersView();

if (!Auth::isLogged()) {header('location: loginpage.php');}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 25%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $view->renderUser(Auth::getAuthUser());
    $view->renderOutgoingTable(Auth::getAuthUser());
    $view->renderIncomingTable(Auth::getAuthUser());
    ?>

    <form action="./includes/sendMoney.includes.php" method="post">
        <input type="number" value="1000" name="number" id="">
        <?php $view->renderUserInput(Auth::getAuthUser());?>
        <input type="submit" name= "submit" value="Poslat">
    </form>
    <p style="color:red"><?php if (isset($_GET['e'])) echo $_GET['e'];?></p>
</body>
</html>