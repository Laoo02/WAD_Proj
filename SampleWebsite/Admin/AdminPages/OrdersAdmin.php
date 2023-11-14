<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watches,com</title>

    <link rel="stylesheet" href="../../Home.css" type="text/css">

</head>

<body>


    <h2>Orders List:</h2>

    <br>

    <div>

        <?php
        try {
            $sql = "SELECT id,name,product,date,price  FROM orders";

            $data = [];
            $stmt = $pdo->query($sql);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            echo "<table>";
            echo "<tr><th>ID</th><th>Username</th><th>Product</th><th>Date</th><th>Price</th></tr>";
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>" . "<td>" . $row['name'] . "</td>" . "<td>" .  $row['product'] . "</td>" . "<td>" .  $row['date'] . "</td>" . "<td>" .  $row['price'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            $pdo = null;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </div>

    <br>
    <br>

    <button><a href="../AdminPage.php">Go back to admin page</a></button>

    <h3>Change Orderer Name</h3>


    <form action="../Orders/ChangeOrderName.php" method="post">


        <div class="container">

            <label for="id"><b>ID</b></label>
            <input type="number" placeholder="Enter Order ID" name="id">

            <br>

            <label for="name"><b>New Name</b></label>
            <input type="text" placeholder="Enter New Name" name="name">

            <br>

            <button>Change Order Name</button>

        </div>



    </form>

    <br>
    <br>

    <h3>Change Order Price</h3>

    <form action="../Orders/ChangeOrderPrice.php" method="post">


        <div class="container">

            <label for="price"><b>Price</b></label>
            <input type="number" placeholder="Enter New Price" name="price">

            <br>


            <label for="id"><b>ID</b></label>
            <input type="number" placeholder="Enter Order ID" name="id">

            <br>

            <button>Change Order Price</button>

        </div>



    </form>

    <br>
    <br>

    <h3>Change Ordered Product</h3>

    <form action="../Orders/ChangeOrderProduct.php" method="post">


        <div class="container">

            <label for="id"><b>ID</b></label>
            <input type="number" placeholder="Enter Order ID" name="id">

            <br>

            <label for="product"><b>Product</b></label>
            <input type="text" placeholder="Enter New Product Name" name="product">

            <br>

            <button>Change Ordered Product</button>

        </div>



    </form>

    <br>
    <br>

    <h3>Create Order</h3>

    <form action="../Orders/CreateOrder.php" method="post">


        <div class="container">

            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="product"><b>Product</b></label>
            <input type="text" placeholder="Enter New Product Name" name="product">


            <br>

            <label for="price"><b>price</b></label>
            <input type="number" placeholder="Enter New Price" name="price">

            <br>

            <button>Create Order</button>

        </div>



    </form>

    <br>
    <br>

    <h3>Delete Order</h3>


    <form action="../Orders/DeleteOrder.php" method="post">


        <div class="container">


            <label for="id"><b>ID</b></label>
            <input type="number" placeholder="Enter Order ID" name="id">

            <br>

            <label for="product"><b>Product</b></label>
            <input type="text" placeholder="Enter Product Name" name="product">


            <br>

            <button>Delete Order</button>

        </div>



    </form>

    <br>
    <br>

</body>

</html>