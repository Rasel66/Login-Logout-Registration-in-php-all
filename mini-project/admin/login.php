<?php
    require_once '../admin/dbcon.php';
    session_start();

    if(isset($_SESSION['user_login']))
    {
        header('location: index.php');
    }

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username`='$username'");

        if(mysqli_num_rows($username_check)>0) 
        {
            $pass = mysqli_fetch_assoc($username_check);
            if($pass['password']==md5($password))
            {
                $_SESSION['user_login'] = $username;
                header('location: index.php');
            }
            else{
                $error = "This password is incorrect";
            }
        }
        else
        {
            $error = "This username not found";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap" rel="styleshee">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cotainer">
        <h1 class="text-center">Student Management System</h1>
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 shadow p-3 mb-5 bg-white rounded">
                <h2 class="text-center">Admin Login</h2>
                <?php if(isset($error)){echo '<div class="alert alert-danger">'.$error.'</div>';} ?>
                <hr>
                <br>
                <form action="login.php" method="post">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username" required="" class="form-control" value="<?php if(isset($username)){echo $username;}?>">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required= ""class="form-control" value="<?php if(isset($password)){echo $password;}?>"><br>
                    <input type="submit" name="login" id="" value="Submit" class="pull-right btn btn-info"><br>
                    <p>Haven't account?<a href="../admin/registration.php">register</a></p>
                </form>
            </div>
            <br>
            
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <footer>
                    <h5 class="text-center">Copyright &copy; All Right Reaserved </h5>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>