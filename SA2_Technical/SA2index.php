<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>
    <link rel="stylesheet" href="SA2style.css">
</head>
<body>

<h2 class="title">My Fruits</h2>

<div class="table-container">

<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>
    </thead>
    <tbody>

<?php
$fruits = [
    ["name"=>"Apple", "desc"=>"Color Red", "fact"=>"Rich in fiber", "img"=>"Apple.jpg", "class"=>"apple"],
    ["name"=>"Banana", "desc"=>"Color Yellow", "fact"=>"Good source of potassium", "img"=>"Banana.jpg", "class"=>"banana"],
    ["name"=>"Cherry", "desc"=>"Color Red", "fact"=>"High in antioxidants", "img"=>"Cherry.jpg", "class"=>"cherry"],
    ["name"=>"Grapes", "desc"=>"Color Purple/Green", "fact"=>"Good for heart health", "img"=>"Grapes.jpg", "class"=>"grapes"],
    ["name"=>"Mango", "desc"=>"Color Orange", "fact"=>"Rich in vitamin C", "img"=>"Mango.jpg", "class"=>"mango"],
    ["name"=>"Orange", "desc"=>"Color Orange", "fact"=>"Boosts immunity", "img"=>"Orange.jpg", "class"=>"orange"],
    ["name"=>"Papaya", "desc"=>"Color Orange", "fact"=>"Improves digestion", "img"=>"Papaya.jpg", "class"=>"papaya"],
    ["name"=>"Pineapple", "desc"=>"Color Yellow", "fact"=>"Anti-inflammatory", "img"=>"Pineapple.jpg", "class"=>"pineapple"],
    ["name"=>"Strawberry", "desc"=>"Color Red", "fact"=>"Heart healthy fruit", "img"=>"Strawberry.jpg", "class"=>"strawberry"],
    ["name"=>"Watermelon", "desc"=>"Color Green/Red", "fact"=>"Hydrating fruit", "img"=>"Watermelon.jpg", "class"=>"watermelon"]
];

//  Sort alphabetically
usort($fruits, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});

//  Display rows
foreach($fruits as $fruit){
    echo "
    <tr class='{$fruit['class']}'>
        <td><img src='{$fruit['img']}' alt='{$fruit['name']}'></td>
        <td>{$fruit['name']}</td>
        <td>{$fruit['desc']}</td>
        <td>{$fruit['fact']}</td>
    </tr>";
}
?>

    </tbody>
</table>

</div>

</body>
</html>

