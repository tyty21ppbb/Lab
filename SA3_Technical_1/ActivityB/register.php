<?php
include "../db.php";

$first = $_POST['first_name'];
$middle = $_POST['middle_name'];
$last = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$contact = $_POST['contact_number'];

if($password != $confirm){
    echo "<script>
            alert('Password and Confirm Password do not match.');
            window.location='index.php';
          </script>";
    exit();
}

$sql = "INSERT INTO users
(first_name,middle_name,last_name,username,password,birthday,email,contact_number)
VALUES
('$first','$middle','$last','$username','$password','$birthday','$email','$contact')";

if(mysqli_query($conn,$sql)){
    echo "<script>
            alert('Registration Successful!');
            window.location='login.php';
          </script>";
}else{
    echo "Error: ".mysqli_error($conn);
}
?>