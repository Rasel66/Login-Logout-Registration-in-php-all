<?php
    session_start();

    if(!isset($_SESSION['user_login']))
    {
        header('location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <a href="logout.php">logout</a>
    Wellcome
</body>
</html>