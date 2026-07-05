<?php
include "db.php";

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
?>

<h2>Welcome <?php echo $row['first_name']; ?>!</h2>

<hr><br>

<p><b>Full Name:</b>
<?php
echo $row['first_name']." ".
$row['middle_name']." ".
$row['last_name'];
?>
</p>

<p><b>Username:</b>
<?php echo $row['username']; ?>
</p>

<p><b>Email:</b>
<?php echo $row['email']; ?>
</p>

<p><b>Birthday:</b>
<?php echo $row['birthday']; ?>
</p>

<p><b>Contact Number:</b>
<?php echo $row['contact_number']; ?>
</p>

<br>

<a href="logout.php" class="btn">Logout</a>