<?php 
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дневник</title>
</head>

<body>
    <a href="/login.php">Войти</a>
    <?php
        if ($_SESSION["status"] === "admin"){ 
            ?>
            <a href="/admin.php">Админская панель</a>
            <?
        }
    ?>
    <a href="/exit.php">ВЫЙТИ</a>

    <h1> <?= htmlspecialchars($_SESSION["username"]) ?></h1>
    <h2> <?= htmlspecialchars($_SESSION["status"]) ?></h2>
</body>

</html>