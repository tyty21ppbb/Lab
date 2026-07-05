<?php

include "db.php";

$first = $_POST['first_name'];
$middle = $_POST['middle_name'];
$last = $_POST['last_name'];

$username = $_POST['username'];

$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

$birthday = $_POST['birthday'];
$email = $_POST['email'];
$contact = $_POST['contact_number'];

?>

<!DOCTYPE html>
<html>

<head>

<title>Registration Result</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php

if($password != $confirm){

    echo "<div class='error'>";
    echo "<h3>Password and Confirm Password are not the same!</h3>";
    echo "<br>";
   echo "<a href='login.php' class='btn'>Go to Login</a>";
    echo "</div>";

}else{

$sql = "INSERT INTO users
(first_name,middle_name,last_name,username,password,birthday,email,contact_number)

VALUES

('$first','$middle','$last','$username','$password','$birthday','$email','$contact')";

if(mysqli_query($conn,$sql)){

echo "<div class='success'>";

echo "<h2>Registration Successful!</h2>";

echo "<hr><br>";

echo "<p><b>Full Name:</b> $first $middle $last</p>";

echo "<p><b>Username:</b> $username</p>";

echo "<p><b>Password:</b> $password</p>";

echo "<p><b>Birthday:</b> $birthday</p>";

echo "<p><b>Email:</b> $email</p>";

echo "<p><b>Contact Number:</b> $contact</p>";

echo "<br>";

echo "<a href='login.php' class='btn'>Go to Login</a>";

echo "</div>";

}else{

echo "<div class='error'>";

echo mysqli_error($conn);

echo "</div>";

}

}

?>

</div>

</body>

</html>