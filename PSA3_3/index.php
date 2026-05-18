<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Defined Function</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
function myFunction($a, $b, $c) {
    return [
        "add" => $a + $b + $c,
        "sub" => $a - $b - $c,
        "mul" => $a * $b * $c,
        "div" => $a / $b / $c
    ];
}

$result = myFunction(25, 13, 6);
?>

<h2>User Defined Function</h2>

<div class="container">

    <div class="header">
        My Parameter values: 25, 13, 6
    </div>

    <div class="label">Addition</div>
    <div class="value"><?php echo $result['add']; ?></div>

    <div class="label">Subtraction</div>
    <div class="value"><?php echo $result['sub']; ?></div>

    <div class="label">Multiplication</div>
    <div class="value"><?php echo $result['mul']; ?></div>

    <div class="label">Division</div>
    <div class="value"><?php echo $result['div']; ?></div>

</div>

</body>
</html>
``