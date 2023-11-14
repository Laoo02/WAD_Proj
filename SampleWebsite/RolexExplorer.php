<?php
require_once 'IncFiles/config.php'
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="author" content="Laurentiu">

    <link rel="icon" href="Images/Icon.jpg" type="image/x-icon">

    <title>Watches,com login</title>

    <link rel="stylesheet" href="Items.css" type="text/css">
</head>

<body>
    <img src="Images/Rolex_Explorer.jpeg">

    <h3>Description:</h3>

    <br>


    <p>
        <i>The Rolex Explorer is the brand's most under-the-radar sports watch. Like all things Rolex, the model isn’t anything we haven't seen before though. It’s been on the scene in one way or another since 1953, and in those 68 years arguably two of the biggest visual evolutions the watch has seen include numeral font changes and a size increase in 2010 to 39mm. </i>
    </p>

    <br>

    <h3>Specifications:</h3>

    <br>

    <ul>
        <li>Movement
            Perpetual, mechanical, self-winding</li>
        <li>Functions
            Centre hour, minute and seconds hands. Stop-seconds for precise time setting</li>
        <li>Power reserve
            Approximately 70 hours</li>
    </ul>

    <br>

    <form action="Store/AddToCart_RolexExplorer.php">
        <div class="text-center">
            <button id="BuyButton">Add to cart</a></button>
        </div>

    </form>

</body>

</html>