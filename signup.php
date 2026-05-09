<?php
include 'config/db.php';

if(isset($_POST['signup'])){

$username = $_POST['username'];
$email = $_POST['email'];

$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$sql = "INSERT INTO users
(username,email,password)
VALUES
('$username','$email','$password')";

mysqli_query($conn,$sql);

header("Location: login.php");

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="auth-box">

<h1>Create Account</h1>

<form method="POST">

<input type="text" name="username" placeholder="Username">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button name="signup">Create Account</button>

</form>

<a href="login.php">Login</a>

</div>

</body>
</html>
