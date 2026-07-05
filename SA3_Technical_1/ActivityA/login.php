<?php
session_start();
include "db.php";

// If the user is already logged in, redirect to home
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

// Load cookies if they exist
$user = "";
$pass = "";

if (isset($_COOKIE['username'])) {
    $user = $_COOKIE['username'];
}

if (isset($_COOKIE['password'])) {
    $pass = $_COOKIE['password'];
}

$message = "";

// Login button clicked
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));

    // Remember Me
    if (isset($_POST['remember'])) {

        setcookie("username", $username, time() + 86400, "/");
        setcookie("password", $password, time() + 86400, "/");

    } else {

        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");

    }

    // Check username and password in the database
    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {

        $message = "Database Error: " . mysqli_error($conn);

    } elseif (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['username'];
        $_SESSION['firstname'] = $row['first_name'];

        header("Location: home.php");
        exit();

    } else {

        $message = "Invalid Username or Password.";

    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Login</h2>

    <form method="POST">

        <label>Username</label>

        <input
            type="text"
            name="username"
            value="<?php echo htmlspecialchars($user); ?>"
            required>

        <label>Password</label>

        <input
            type="password"
            name="password"
            value="<?php echo htmlspecialchars($pass); ?>"
            required>

        <br><br>

        <input type="checkbox" name="remember">

        Remember Me

        <br><br>

        <button type="submit" name="login">Login</button>

    </form>

    <br>

    <a href="index.php" class="btn">Back to Registration</a>

    <?php
    if ($message != "") {
        echo "<p class='error'>$message</p>";
    }
    ?>

</div>

</body>

</html>