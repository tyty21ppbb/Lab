<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Math Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Array of 10 numbers
$numbers = [1,2,3,4,5,6,7,8,9,10];

// Addition
$addition = array_sum($numbers);

// Subtraction (sequential)
$subtraction = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $subtraction -= $numbers[$i];
}

// Multiplication
$multiplication = array_product($numbers);

// Division (sequential)
$division = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $division /= $numbers[$i];
}
?>

<h2>Array Math Operations</h2>

<table>
    <tr>
        <th colspan="2">Array list: <?php echo implode(", ", $numbers); ?></th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $addition; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $subtraction; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $multiplication; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $division; ?></td>
    </tr>
</table>

</body>
</html>
