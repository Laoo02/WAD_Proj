<?php
require_once 'IncFiles/config.php';

require 'Store/TableEntries.php';
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


    <h1>Cart</h1>

    <div class="table-format">

        <table>
            <tr>
                <th>Username of the customer</th>
                <th>Product ordered</th>
                <th>Price</th>

                <?php
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$product</td>";
                echo "<td>$price</td>";
                echo "</tr>";
                ?>
            </tr>
        </table>

    </div>

    <br>

    <form action="Store/ShowOrder.php">
        <button>Show order</button>
    </form>

    <button><a href="index.php">Checkout and logout</a></button>

    <button><a href="Home.php">Checkout and keep browsing</a></button>

    <button><a href="Store/CancelOrderPage.php">Cancel Order</a><button>

</body>

</html>