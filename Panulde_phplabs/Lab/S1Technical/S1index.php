<?php
$submitted = false;
$sNum = $fName = $lName = $gender = $mCondition = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;

    $sNum = $_POST['student_number'] ?? '';
    $fName = ucwords(strtolower($_POST['first_name'] ?? ''));
    $lName = strtoupper($_POST['last_name'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $mCondition = $_POST['medical_condition'] ?? 'None';
    $country = $_POST['birth_country'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Summative Assessment</title>

    <!-- F1 Style Font -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="S1style.css">

    <script>
        function showTab(tabId) {
            document.querySelectorAll(".tab-content").forEach(tab => {
                tab.style.display = "none";
            });
            document.getElementById(tabId).style.display = "block";

            document.querySelectorAll(".menu-btn").forEach(btn => {
                btn.classList.remove("active");
            });
            document.getElementById(tabId + "-btn").classList.add("active");
        }
    </script>
</head>
<body>

<!-- MENU TABS -->
<div class="menu">
    <button id="registration-btn" class="menu-btn active" onclick="showTab('registration')">
        Student Registration
    </button>
    <button id="multiplication-btn" class="menu-btn" onclick="showTab('multiplication')">
         Multiplication Table
    </button>
</div>

<!-- TAB 1: REGISTRATION -->
<div id="registration" class="main-container tab-content">

    <h1 class="form-title">Student Registration</h1>

    <form method="post">
        <div class="form-section">

            <label>Student Number</label>
            <input type="text" name="student_number" required value="<?= htmlspecialchars($sNum) ?>">

            <label>First Name</label>
            <input type="text" name="first_name" required value="<?= htmlspecialchars($fName) ?>">

            <label>Last Name</label>
            <input type="text" name="last_name" required value="<?= htmlspecialchars($lName) ?>">

            <label>Gender</label>
            <input type="radio" name="gender" value="Male" <?= ($gender=="Male")?"checked":"" ?> required> Male
            <input type="radio" name="gender" value="Female" <?= ($gender=="Female")?"checked":"" ?>> Female

            <label>Medical Condition</label>
            <select name="medical_condition">
                <option <?= ($mCondition=="None")?"selected":"" ?>>None</option>
                <option <?= ($mCondition=="Asthma")?"selected":"" ?>>Asthma</option>
                <option <?= ($mCondition=="Diabetes")?"selected":"" ?>>Diabetes</option>
            </select>

            <label>Country of Birth</label>
            <input type="text" name="birth_country" value="<?= htmlspecialchars($country) ?>">
        </div>

        <button class="btn-submit">Register</button>
    </form>

    <?php if ($submitted): ?>
        <div class="output-container">
            <h2>Registration Output</h2>
            <p><strong>ID:</strong> <?= htmlspecialchars($sNum) ?></p>
            <p><strong>Name:</strong> <?= htmlspecialchars("$lName, $fName") ?></p>
            <p><strong>Gender:</strong> <?= htmlspecialchars($gender) ?></p>
            <p><strong>Medical Condition:</strong> <?= htmlspecialchars($mCondition) ?></p>
            <p><strong>Country:</strong> <?= htmlspecialchars($country) ?></p>
        </div>
    <?php endif; ?>
</div>

<!-- TAB 2: MULTIPLICATION -->
<div id="multiplication" class="main-container tab-content" style="display:none;">

    <h1 class="form-title">Multiplication Table</h1>

    <table class="mult-table">
        <?php
        for ($r = 0; $r <= 10; $r++) {
            echo "<tr>";
            for ($c = 0; $c <= 10; $c++) {
                $color = (($r + $c) % 2 == 0) ? "cell-yellow" : "cell-red";
                echo "<td class='$color'>" . ($r * $c) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>