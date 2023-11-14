<?php
require_once 'IncFiles/config.php'
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="author" content="Laurentiu">
    <meta name="description" content="Home page for Watches,com">

    <link rel="icon" href="Images/Icon.jpg" type="image/x-icon">

    <title>Watches,com login</title>

    <link rel="stylesheet" href="Home.css" type="text/css">
</head>

<body>

    <ul id="TopMenu">
        <li id="TopMenuEntries"><a href="Home.php">Home</a></li>
        <li id="TopMenuEntries"><a href="Forum.php">Forum</a></li>
        <li id="Cart"><a href="Cart.php">Cart</a></li>
    </ul>

    <ol>
        <li id="StorePage">
            <img src="Images/Orient_Bambino.jpg" alt="Orient Bambino">
            <br>
            <button id="WatchButton"><a href="OrientBambino.php">Orient Bambino</a></button>
        </li>

        <li id="StorePage">
            <img src="Images/Rolex_Explorer.jpeg" alt="Rolex Explorer">
            <br>
            <button id="WatchButton"><a href="RolexExplorer.php">Rolex Explorer</a></button>
        </li>

        <li id="StorePage">
            <img src="Images/OmegaSeamaster.jpg" alt="Omega Seamaster">
            <br>
            <button id="WatchButton"><a href="OmegaSeamaster.php">Omega Seamaster</a></button>
        </li>


        <li id="StorePage">

        </li>

        <li id="StorePage">

        </li>
    </ol>


</body>

</html>