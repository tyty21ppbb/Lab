<?php
$page = $_GET['page'] ?? 'length';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA2 Technical</title>
    <link rel="stylesheet" href="style-1.css">
</head>
<body>

<!-- STICKY / FLOATING MENU -->
<nav class="nav">
    <a href="?page=length" class="<?= $page === 'length' ? 'active' : '' ?>">Length Conversion</a>
    <a href="?page=grade"  class="<?= $page === 'grade'  ? 'active' : '' ?>">Grade Ranking</a>
    <a href="?page=combo"  class="<?= $page === 'combo'  ? 'active' : '' ?>">Two‑Digit Grid</a>
</nav>

<?php
/* =====================================================
   LENGTH CONVERSION
===================================================== */
if ($page === 'length') {

    $result = "";

    if (isset($_POST['convert'])) {
        $value = $_POST['value'];
        $unit  = $_POST['unit'];

        if ($unit === "m_to_cm") $result = "$value meter = " . ($value * 100) . " centimeters";
        elseif ($unit === "cm_to_m") $result = "$value centimeter = " . ($value / 100) . " meters";
        elseif ($unit === "km_to_m") $result = "$value kilometer = " . ($value * 1000) . " meters";
        elseif ($unit === "m_to_km") $result = "$value meter = " . ($value / 1000) . " kilometers";
    }
?>
<div class="container">

    <h2>Length Conversion</h2>

    <form method="post">
        <input type="number" step="any" name="value" placeholder="Enter Value" required>

        <select name="unit" required>
            <option value="m_to_cm">Meter → Centimeter</option>
            <option value="cm_to_m">Centimeter → Meter</option>
            <option value="km_to_m">Kilometer → Meter</option>
            <option value="m_to_km">Meter → Kilometer</option>
        </select>

        <button name="convert">Convert</button>
    </form>

    <?php if ($result): ?>
        <div class="result-card"><?= $result ?></div>
    <?php endif; ?>

    <div class="chart-section">
        <h3>Measure Conversion Chart</h3>
        <img src="conversionlogo.jpg" class="chart-img" alt="Conversion Chart">
    </div>

</div>
<?php
}

/* =====================================================
   2️⃣ GRADE RANKING (GRID + F1 BLUE)
===================================================== */
if ($page === 'grade') {

    $fname = $mi = $lname = $grade = "";
    $rank = "-";
    $emoji = "🙂";

    if (isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $mi    = $_POST['mi'];
        $lname = $_POST['lname'];
        $grade = $_POST['grade'];

        if ($grade >= 93)       { $rank = "A";  $emoji = "😍"; }
        elseif ($grade >= 90)   { $rank = "A-"; $emoji = "😊"; }
        elseif ($grade >= 87)   { $rank = "B+"; $emoji = "🙂"; }
        elseif ($grade >= 83)   { $rank = "B";  $emoji = "🙂"; }
        elseif ($grade >= 80)   { $rank = "B-"; $emoji = "😐"; }
        elseif ($grade >= 73)   { $rank = "C";  $emoji = "😕"; }
        elseif ($grade >= 60)   { $rank = "D";  $emoji = "😢"; }
        else                    { $rank = "F";  $emoji = "😭"; }
    }
?>
<div class="f1-card">

    <div class="f1-name">
        NAME:
        <strong><?= htmlspecialchars(trim("$fname $mi. $lname")) ?></strong>
    </div>

    <!--  GRID -->
    <div class="f1-grid">
        <div class="f1-box">
            <span>RANK</span>
            <strong><?= $rank ?></strong>
        </div>

        <div class="f1-box">
            <span>GRADE</span>
            <strong><?= $grade ?></strong>
        </div>

        <div class="f1-emoji">
            <?= $emoji ?>
        </div>
    </div>

    <div class="f1-form">
        <form method="post">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="mi" placeholder="MI" maxlength="1" required>
            <input type="text" name="lname" placeholder="Last Name" required><br>

            <input type="number" name="grade" placeholder="Enter Grade" min="0" max="100" required><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

</div>
<?php
}

/* =====================================================
   TWO‑DIGIT DECIMAL GRID
===================================================== */
if ($page === 'combo') {
?>
<div class="container">
    <h2>Two‑Digit Decimal Combinations</h2>
    <div class="grid">
        <?php
        for ($i = 0; $i <= 9; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                echo "<div class='cell'>$i$j</div>";
            }
        }
        ?>
    </div>
</div>
<?php } ?>

</body>
</html>
