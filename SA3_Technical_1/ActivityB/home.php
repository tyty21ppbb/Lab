<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

include "../db.php";

$username=$_SESSION['username'];

$sql="SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$message="";

if(isset($_POST['reset'])){

    $current=$_POST['current'];

    $new=$_POST['new'];

    $confirm=$_POST['confirm'];

    if($current!=$row['password']){

        $message="Current password is incorrect.";

    }elseif($new!=$confirm){

        $message="New Password and Re-enter Password do not match.";

    }else{

        mysqli_query($conn,"UPDATE users
        SET password='$new'
        WHERE username='$username'");

        $message="Password successfully updated.";

        $row['password']=$new;

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>User Information</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="container">

<h2>User Information</h2>

<a href="logout.php" style="float:right;">Logout</a>

<br><br>

<p><b>Welcome</b> <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></p>

<p><b>Birthday:</b> <?php echo $row['birthday']; ?></p>

<br>

<h3>Contact Details</h3>

<p><b>Email:</b> <?php echo $row['email']; ?></p>

<p><b>Contact:</b> <?php echo $row['contact_number']; ?></p>

<hr>

<h3>Reset Password</h3>

<form method="POST">

<label>Current Password</label>

<input type="password" name="current" required>

<label>New Password</label>

<input type="password" name="new" required>

<label>Re-enter Password</label>

<input type="password" name="confirm" required>

<button type="submit" name="reset">Reset Password</button>

</form>

<p class="error"><?php echo $message; ?></p>

</div>

</body>

</html>