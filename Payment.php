<?php
session_start();

include 'config/db.php';

if(isset($_POST['submit'])){

$user = $_SESSION['user'];

$amount = $_POST['amount'];
$txn = $_POST['txn'];
$method = $_POST['method'];

mysqli_query($conn,
"INSERT INTO payments
(user_id,amount,txn_id,status)
VALUES
('$user','$amount','$txn','pending')"
);

header("Location: ssl-request.php?amount=$amount");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Funds</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="payment-box">

<h1>Add Funds</h1>

<form method="POST">

<select name="method">
<option>bKash</option>
<option>Nagad</option>
<option>Upay</option>
</select>

<input type="number"
name="amount"
placeholder="Amount">

<input type="text"
name="txn"
placeholder="Transaction ID">

<button name="submit">
Submit Payment
</button>

</form>

</div>

</body>
</html>
