<?php

session_start();

include("connect.php");

if(isset($_POST['login'])){

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM users

            WHERE email='$email'

            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $_SESSION['user']=$email;

        header("Location: home.php");
    }

    else{

        echo "Invalid Credentials";
    }
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-container">

<h2>Login</h2>

<form method="POST">

<input type="email"
name="email"
placeholder="Email"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit"
name="login">

Login

</button>

</form>

</div>

</body>

</html>