<?php

include '../config/db.php';

$id = $_GET['id'];

$payment = mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT * FROM payments WHERE id='$id'"
)
);

$user = $payment['user_id'];
$amount = $payment['amount'];

mysqli_query(
$conn,
"UPDATE users
SET balance = balance + $amount
WHERE id='$user'"
);

mysqli_query(
$conn,
"UPDATE payments
SET status='approved'
WHERE id='$id'"
);

echo "Payment Approved";

?>
