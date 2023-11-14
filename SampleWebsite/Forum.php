<?php
require_once 'IncFiles/config.php';
require_once 'IncFiles/dbh.php';
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

    <style>
        .table-format {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>

    <ul id="TopMenu">
        <li id="TopMenuEntries"><a href="Store.php">Store</a></li>
        <li id="TopMenuEntries"><a href="Home.php">Home</a></li>
        <li id="Cart"><a href="Cart.php">Cart</a></li>
    </ul>


    <div class="table-format">

        <?php
        try {
            $sql = "SELECT username,comment  FROM feedback";

            $data = [];
            $stmt = $pdo->query($sql);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            echo "<table>";
            echo "<tr><th>Comment Section</th></tr>";
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['username'] . " :" . $row['comment'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            $pdo = null;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </div>


</body>

</html>