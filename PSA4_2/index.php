<?php

$names = [
    "sheena belarmino", "gwen apuli", "aiah arceta", "maloi ricalde ", "jhoanna robles",
    "colet vergara", "mikha lim", "stacey sevilleja", "im nayeon", "son chaeyoung",
    "park jihyo", "kim dahyun", "jeongyeon", "gigi hadid", "james bond",
    "akira morishita", "gelo rivera", "jl toreliza", "mikki", "nate"
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>String Functions Activity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>List of Names</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of "a"</th>
        <th>Reverse Name</th>
    </tr>

<?php
foreach($names as $name){

    $length = strlen($name);
    $upper = ucfirst($name);
    $replace = preg_replace('/[aeiou]/i', '@', $name);

    $pos = strpos($name, 'a');
    $pos = ($pos !== false) ? $pos : "Not found";

    $reverse = strrev($name);

    echo "<tr>
            <td>$name</td>
            <td>$length</td>
            <td>$upper</td>
            <td>$replace</td>
            <td>$pos</td>
            <td>$reverse</td>
          </tr>";
}
?>

</table>

</body>
</html>