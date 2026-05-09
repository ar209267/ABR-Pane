<?php
session_start();

include 'config/db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query(
$conn,
"SELECT * FROM users WHERE email='$email'"
);

$user = mysqli_fetch_assoc($query);

if($user &&
password_verify($password,$user['password'])){

$_SESSION['user'] = $user['id'];
$_SESSION['role'] = $user['role'];

header("Location: dashboard.php");

}else{

echo "Invalid Login";

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="auth-box">

<h1>Login</h1>

<form method="POST">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button name="login">Login</button>

</form>

<a href="signup.php">Create Account</a>

</div>

</body>
</html> 
