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

    <h2>Watches List:</h2>

    <br>

    <div>

        <?php
        try {
            $sql = "SELECT name,amount,price  FROM watches";

            $data = [];
            $stmt = $pdo->query($sql);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            echo "<table>";
            echo "<tr><th>Name</th><th>Amount</th><th>Price</th></tr>";
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>" . "<td>" .  $row['amount'] . "</td>" . "<td>" .  $row['price'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            $pdo = null;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </div>

    <button><a href="../AdminPage.php">Go back to admin page</a></button>

    <br>
    <br>

    <h2>Add a Watch</h2>

    <form action="../Watches/AddWatch.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="amount"><b>Amount</b></label>
            <input type="number" placeholder="Enter Amount" name="amount">

            <br>


            <label for="price"><b>Price</b></label>
            <input type="number" placeholder="Enter Price" name="price">

            <br>

            <button>Add Watch</button>

        </div>



    </form>


    <br>
    <br>
    <h2>Change Watch Amount</h2>

    <form action="../Watches/ChangeWatchAmount.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="amount"><b>Amount</b></label>
            <input type="number" placeholder="Enter Amount" name="amount">

            <br>

            <button>Change Watch Amount</button>

        </div>

    </form>

    <br>
    <br>
    <h2>Change Watch Name</h2>

    <form action="../Watches/ChangeWatchName.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="new_name"><b>New Name</b></label>
            <input type="text" placeholder="Enter New Name" name="new_name">

            <br>

            <button>Change Watch Name</button>

        </div>
    </form>



    <br>
    <br>
    <h2>Change Watch Price</h2>

    <form action="../Watches/ChangePrice.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="price"><b>Price</b></label>
            <input type="number" placeholder="Enter Price" name="price">

            <br>

            <button>Change Price</button>

        </div>
    </form>



    <br>
    <br>
    <h2>Delete Watch</h2>

    <form action="../Watches/DeleteWatch.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="price"><b>Price</b></label>
            <input type="number" placeholder="Enter Price" name="price">

            <br>

            <button>Delete Watch</button>

        </div>
    </form>

</body>

</html>