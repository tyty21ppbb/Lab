<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" type="text/css" href="SA2_2style.css">
</head>
<body>

<h2>Volume of Shapes</h2>

<?php
// User-defined functions

function volumeCube($s) {
    return pow($s, 3);
}

function volumeRectangularPrism($l, $w, $h) {
    return $l * $w * $h;
}

function volumeCylinder($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function volumeCone($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function volumeSphere($r) {
    return (4/3) * pi() * pow($r, 3);
}

// Sample values
$s = 5;
$l = 4; $w = 3; $h = 6;
$r = 3; $hc = 7;

//  Compute results
$cube = volumeCube($s);
$rect = volumeRectangularPrism($l, $w, $h);
$cyl = volumeCylinder($r, $hc);
$con = volumeCone($r, $hc);
$sph = volumeSphere($r);
?>

<table>
    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>s = <?php echo $s; ?></td>
        <td>V = s³</td>
        <td><?php echo $cube; ?></td>
    </tr>

    <tr>
        <td>l=<?php echo $l; ?>, w=<?php echo $w; ?>, h=<?php echo $h; ?></td>
        <td>V = l × w × h</td>
        <td><?php echo $rect; ?></td>
    </tr>

    <tr>
        <td>r=<?php echo $r; ?>, h=<?php echo $hc; ?></td>
        <td>V = πr²h</td>
        <td><?php echo round($cyl, 2); ?></td>
    </tr>

    <tr>
        <td>r=<?php echo $r; ?>, h=<?php echo $hc; ?></td>
        <td>V = (1/3)πr²h</td>
        <td><?php echo round($con, 2); ?></td>
    </tr>

    <tr>
        <td>r=<?php echo $r; ?></td>
        <td>V = (4/3)πr³</td>
        <td><?php echo round($sph, 2); ?></td>
    </tr>

</table>

</body>
</html>
