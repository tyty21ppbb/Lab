<?php
session_start();

$_SESSION['c1'] = $_POST['c1'];
$_SESSION['c2'] = $_POST['c2'];
$_SESSION['c3'] = $_POST['c3'];
$_SESSION['c4'] = $_POST['c4'];
$_SESSION['c5'] = $_POST['c5'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>ResultColors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h3> RESULT COLORS</h3>

<p style="color: <?php echo $_SESSION['c1']; ?>">
    My Favorite Color 1: <?php echo $_SESSION['c1']; ?>
</p>

<p style="color: <?php echo $_SESSION['c2']; ?>">
    My Favorite Color 2: <?php echo $_SESSION['c2']; ?>
</p>

<p style="color: <?php echo $_SESSION['c3']; ?>">
    My Favorite Color 3: <?php echo $_SESSION['c3']; ?>
</p>

<p style="color: <?php echo $_SESSION['c4']; ?>">
    My Favorite Color 4: <?php echo $_SESSION['c4']; ?>
</p>

<p style="color: <?php echo $_SESSION['c5']; ?>">
    My Favorite Color 5: <?php echo $_SESSION['c5']; ?>
</p>

</div>

</body>
</html>

