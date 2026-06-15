<!DOCTYPE html>
<html>
<head>
    <title>FavoriteColor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h3>FAVORITE COLORS</h3>

<form method="post" action="ResultColors.php">

<table>
    <tr>
        <th colspan="2">Enter your favorite colors</th>
    </tr>

    <tr>
        <td>Favorite color 1:</td>
        <td><input type="text" name="c1" value="Red"></td>
    </tr>

    <tr>
        <td>Favorite color 2:</td>
        <td><input type="text" name="c2" value="Yellow"></td>
    </tr>

    <tr>
        <td>Favorite color 3:</td>
        <td><input type="text" name="c3" value="Orange"></td>
    </tr>

    <tr>
        <td>Favorite color 4:</td>
        <td><input type="text" name="c4" value="Violet"></td>
    </tr>

    <tr>
        <td>Favorite color 5:</td>
        <td><input type="text" name="c5" value="Blue"></td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <input type="submit" value="SEND COLORS">
        </td>
    </tr>
</table>

</form>

</div>

</body>
</html>