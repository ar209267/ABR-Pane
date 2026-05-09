<?php
session_start();

if($_SESSION['role'] != 'admin'){
die("Access Denied");
}

include '../config/db.php';

$users = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT COUNT(*) as total FROM users"
)
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h1>Admin Panel</h1>

<h3>Total Users:
<?php echo $users['total']; ?>
</h3>

<a href="payments.php">Payment Requests</a>

</body>
</html>
