<?php
$submitted = false;

// Variables
$studentNo = $entryDate = $entryType = $grade = "";
$lastName = $firstName = $preferredName = "";
$gender = $dob = "";
$prevSchool = $language = $reason = "";
$medical = $birthCountry = $citizenship = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $submitted = true;

    $studentNo = $_POST["student_number"] ?? "";
    $entryDate = $_POST["entry_date"] ?? "";
    $entryType = $_POST["entry_type"] ?? "";
    $grade = $_POST["grade"] ?? "";

    $lastName = strtoupper($_POST["last_name"] ?? "");
    $firstName = ucwords(strtolower($_POST["first_name"] ?? ""));
    $preferredName = ucwords(strtolower($_POST["preferred_name"] ?? ""));
    $gender = $_POST["gender"] ?? "";
    $dob = $_POST["dob"] ?? "";

    $prevSchool = $_POST["previous_school"] ?? "";
    $language = $_POST["language"] ?? "";
    $reason = $_POST["reason"] ?? "";

    $medical = $_POST["medical"] ?? "None";
    $birthCountry = $_POST["birth_country"] ?? "";
    $citizenship = $_POST["citizenship"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration System</title>

    <!-- F1 Style Font -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="S1style.css">

    <script>
        function openTab(tabId) {
            document.querySelectorAll(".tab").forEach(tab => tab.style.display = "none");
            document.getElementById(tabId).style.display = "block";

            document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
            document.getElementById(tabId + "-btn").classList.add("active");
        }
    </script>
</head>

<body>

<!-- MENU -->
<div class="menu">
    <button id="form-btn" class="tab-btn active" onclick="openTab('form')">Registration</button>
    <button id="summary-btn" class="tab-btn" onclick="openTab('summary')">Summary</button>
    <button id="table-btn" class="tab-btn" onclick="openTab('table')">Multiplication Table</button>
</div>

<!-- REGISTRATION TAB -->
<div id="form" class="container tab">
    <h1>Student Registration Form</h1>

    <form method="post">

        <fieldset>
            <legend>For School Use</legend>
            <input name="student_number" placeholder="Student Number" required>
            <input type="date" name="entry_date">
            <input name="entry_type" placeholder="Entry Type">
            <input name="grade" placeholder="Grade">
        </fieldset>

        <fieldset>
            <legend>Student Information</legend>
            <input name="last_name" placeholder="Last Name" required>
            <input name="first_name" placeholder="First Name" required>
            <input name="preferred_name" placeholder="Preferred Name">
            <br><br>
            Gender:
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
            <br><br>
            Date of Birth:
            <input type="date" name="dob">
        </fieldset>

        <fieldset>
            <legend>Previous School</legend>
            <input name="previous_school" placeholder="Previous School">
            <select name="language">
                <option>English</option>
                <option>French</option>
                <option>Other</option>
            </select>
            <input name="reason" placeholder="Reason for Transfer">
        </fieldset>

        <fieldset>
            <legend>Health Information</legend>
            <textarea name="medical" placeholder="Medical Conditions"></textarea>
        </fieldset>

        <fieldset>
            <legend>Citizenship</legend>
            <input name="birth_country" placeholder="Birth Country">
            <select name="citizenship">
                <option>Citizen</option>
                <option>Permanent Resident</option>
                <option>Student Visa</option>
            </select>
        </fieldset>

        <button type="submit">Register Student</button>
    </form>
</div>

<!-- SUMMARY TAB -->
<div id="summary" class="container tab" style="display:none;">
    <h1>Registration Summary</h1>

    <?php if ($submitted): ?>
        <p><b>Student Number:</b> <?= htmlspecialchars($studentNo) ?></p>
        <p><b>Name:</b> <?= htmlspecialchars("$lastName, $firstName ($preferredName)") ?></p>
        <p><b>Gender:</b> <?= htmlspecialchars($gender) ?></p>
        <p><b>Date of Birth:</b> <?= htmlspecialchars($dob) ?></p>
        <p><b>Grade:</b> <?= htmlspecialchars($grade) ?></p>
        <p><b>Previous School:</b> <?= htmlspecialchars($prevSchool) ?></p>
        <p><b>Medical:</b> <?= htmlspecialchars($medical) ?></p>
        <p><b>Citizenship:</b> <?= htmlspecialchars($citizenship) ?></p>
    <?php else: ?>
        <p>No registration submitted yet.</p>
    <?php endif; ?>
</div>

<!-- MULTIPLICATION TABLE TAB -->
<div id="table" class="container tab" style="display:none;">
    <h1>Multiplication Table (0–10)</h1>

    <table class="mult-table">
        <?php
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= 10; $col++) {
                $result = $row * $col;
                $color = (($row + $col) % 2 == 0) ? "cell-yellow" : "cell-red";
                echo "<td class='$color'>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>