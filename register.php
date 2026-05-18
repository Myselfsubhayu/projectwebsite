<?php

include("connect.php");

if(isset($_POST['submit'])){

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,email,password)

            VALUES('$username','$email','$password')";

    if(mysqli_query($conn,$sql)){

        echo "Registration Successful";
    }

    else{

        
   echo mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>

<html>

<head>

<title>Register</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-container">

<h2>Register</h2>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit"
name="submit">

Register

</button>

</form>

</div>

</body>

</html>