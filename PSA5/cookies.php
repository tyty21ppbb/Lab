<?php
$error = "";
// VALIDATE & SAVE COOKIES
if (isset($_POST['save'])) {

    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $address = $_POST["address"];

    // VALIDATION: letters only
    if (!preg_match("/^[a-zA-Z ]*$/", $fname) ||
        !preg_match("/^[a-zA-Z ]*$/", $mname) ||
        !preg_match("/^[a-zA-Z ]*$/", $lname)) {

        $error = "Names must contain letters only (no numbers allowed).";

    } else {
        // set cookies if valid
        setcookie("fname", $fname, time() + 60);
        setcookie("mname", $mname, time() + 60);
        setcookie("lname", $lname, time() + 60);
        setcookie("address", $address, time() + 60);

        header("Location: cookies.php");
        exit();
    }
}

// ===============================
// DELETE COOKIES
// ===============================
if (isset($_POST['delete'])) {

    setcookie("fname", "", time() - 1);
    setcookie("mname", "", time() - 1);
    setcookie("lname", "", time() - 1);
    setcookie("address", "", time() - 1);

    header("Location: cookies.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>F1 Cookie System</title>
   <link rel="stylesheet" href="style.css">

    <script>
    window.onload = function() {
        let output = document.getElementById("output");
        output.innerHTML = "<b>Cookie Output (Auto Refresh)</b><br><br>";

        setTimeout(() => {
            output.innerHTML += "First Name (10s): <?php echo $_COOKIE['fname'] ?? 'N/A'; ?><br>";
        }, 1000);

        setTimeout(() => {
            output.innerHTML += "Middle Name (20s): <?php echo $_COOKIE['mname'] ?? 'N/A'; ?><br>";
        }, 2000);

        setTimeout(() => {
            output.innerHTML += "Last Name (30s): <?php echo $_COOKIE['lname'] ?? 'N/A'; ?><br>";
        }, 3000);

        setTimeout(() => {
            output.innerHTML += "Address (30s): <?php echo $_COOKIE['address'] ?? 'N/A'; ?><br>";
        }, 4000);
    };
    </script>

</head>

<body>

<div class="container">

<h3> PERSONAL INFORMATION SYSTEM</h3>

<!-- ERROR MESSAGE -->
<?php if ($error != ""): ?>
    <div class="error"><?php echo $error; ?></div>
<?php endif; ?>

<form method="POST">

    <label>First Name:</label>
    <input type="text" name="fname" required>

    <label>Middle Name:</label>
    <input type="text" name="mname" required>

    <label>Last Name:</label>
    <input type="text" name="lname" required>

    <label>Address:</label>
    <input type="text" name="address" required>

    <div class="buttons">
        <button type="submit" name="save">Save / Modify</button>
        <button type="submit" name="delete">Delete</button>
    </div>

</form>

<div class="result">
    <p id="output">Click Save to display cookies...</p>
</div>

</div>

</body>
</html>


