<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
<h1>ABR Panel</h1>
<a href="payment.php">Add Funds</a>
</header>

<div class="dashboard-box">

<h2>Welcome To Dashboard</h2>

<p>Your panel is running successfully.</p>

</div>

</body>
</html>
