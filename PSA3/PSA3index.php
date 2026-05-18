<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Sorting</title>
    <link rel="stylesheet" type="text/css" href="PSA3style.css">
</head>

<body>

<?php

$people = [
    ["name"=>"Ivana", "image"=>"Ivana.jpg", "age"=>20, "birthday"=>"1996-12-25", "contact"=>"09111111111"],
    ["name"=>"Jhoana", "image"=>"Jhoana.jpg", "age"=>22, "birthday"=>"2004-01-26", "contact"=>"09222222222"],
    ["name"=>"Aiah", "image"=>"Aiah.jpg", "age"=>25, "birthday"=>"2001-01-27", "contact"=>"09333333333"],
    ["name"=>"Colet", "image"=>"Colet.jpg", "age"=>24, "birthday"=>"2001-09-14", "contact"=>"09444444444"],
    ["name"=>"Maloi", "image"=>"Maloi.jpg", "age"=>23, "birthday"=>"2002-05-27", "contact"=>"09555555555"],
    ["name"=>"Gwen", "image"=>"Gwen.jpg", "age"=>22, "birthday"=>"2003-06-19", "contact"=>"09666666666"],
    ["name"=>"Sheena", "image"=>"Sheena.jpg", "age"=>21, "birthday"=>"2004-05-09", "contact"=>"09777777777"],
    ["name"=>"Stacey", "image"=>"Stacey.jpg", "age"=>22, "birthday"=>"2003-07-13", "contact"=>"09888888888"],
    ["name"=>"Mikha", "image"=>"Mikha.jpg", "age"=>22, "birthday"=>"2003-11-08", "contact"=>"09999999999"],
    ["name"=>"Zeinab", "image"=>"Zeinab.jpg", "age"=>28, "birthday"=>"1998-12-11", "contact"=>"09000000000"]
];

// Sort alphabetically
usort($people, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<h2>Sorted List of People</h2>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact</th>
    </tr>

    <?php
    $i = 1;
    foreach ($people as $person) {
        echo "<tr>
            <td>$i</td>
            <td>{$person['name']}</td>
            <td><img src='{$person['image']}'></td>
            <td>{$person['age']}</td>
            <td>{$person['birthday']}</td>
            <td>{$person['contact']}</td>
        </tr>";
        $i++;
    }
    ?>
</table>

</body>
</html>
