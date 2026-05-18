<?php

session_start();

if(!isset($_SESSION['user'])){

    header("Location: login.php");
}

?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="hero">

<h1>

Welcome

<?php

echo $_SESSION['user'];

?>

</h1>

<a href="logout.php" class="btn">

Logout

</a>

</div>

</body>

</html>