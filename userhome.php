<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location : login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
</head>
<body>
    <?php
    echo $_SESSION['username'];
    echo $_SESSION['password'];
    echo $_SESSION['email'];
    ?>
</body>
</html>