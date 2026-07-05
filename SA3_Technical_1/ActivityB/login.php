<?php
session_start();
include "../db.php";

$message = "";

if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit();
}

if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users
          WHERE username='$username'
          AND password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        $_SESSION['username']=$username;

        header("Location: home.php");
        exit();

    }else{

        $message="Invalid Username or Password.";

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link rel="stylesheet" href="../style.css">

</head>

<body>

<div class="container">

<h2>Login Form</h2>

<form method="POST">

<label>Username</label>

<input type="text" name="username" required>

<label>Password</label>

<input type="password" name="password" required>

<button type="submit" name="login">Login</button>

</form>

<p class="error"><?php echo $message; ?></p>

<br>

<a href="index.php" class="btn">Register</a>

</div>

</body>

</html>