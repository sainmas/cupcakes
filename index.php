<!--
Names: Mason Sain, Matt Miss
Date: 4/4/2024
URL: https://github.com/sainmas/cupcakes
Description: Sample cupcake ordering form that submits to a process page
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form method="post" action="process.php">
        <label for="name" >Your name:</label><br>
        <input type="text" id="name" name="name">

        <p>Cupcake flavors:</p>
        <input type="checkbox" id="flavor1" name="flavor[]" value="grasshopper">
        <label for="flavor1">The Grasshopper</label><br>

        <input type="checkbox" id="flavor2" name="flavor[]" value="whiskey_maple_bacon">
        <label for="flavor2">Whiskey Maple Bacon</label><br>

        <input type="checkbox" id="flavor3" name="flavor[]" value="carrot_walnut">
        <label for="flavor3">Carrot Walnut</label><br>

        <input type="checkbox" id="flavor4" name="flavor[]" value="whiskey_carmel_cupcake">
        <label for="flavor4">Salted Carmel Cupcake</label><br>

        <input type="checkbox" id="flavor5" name="flavor[]" value="red_velvet">
        <label for="flavor5">Red Velvet</label><br>

        <input type="checkbox" id="flavor6" name="flavor[]" value="lemon_drop">
        <label for="flavor6">Lemon Drop</label><br>

        <input type="checkbox" id="flavor7" name="flavor[]" value="tiramisu">
        <label for="flavor7">Tiramisu</label><br>

        <button type="submit">Order</button>
    </form>

</body>
</html>