<?php

include '../config/db.php';

$result = mysqli_query(
$conn,
"SELECT * FROM payments WHERE status='pending'"
);

while($row = mysqli_fetch_assoc($result)){

?>

<div>

<h3>Payment Request</h3>

<p>User ID: <?php echo $row['user_id']; ?></p>

<p>Amount: <?php echo $row['amount']; ?></p>

<p>TXN: <?php echo $row['txn_id']; ?></p>

<a href="approve.php?id=<?php echo $row['id']; ?>">
Approve
</a>

</div>

<?php } ?>
