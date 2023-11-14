<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $product = $_POST["product"];
    $price = $_POST["price"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";

        $query4 = "SELECT amount FROM watches WHERE name= :name;";

        $stmt4 = $pdo->prepare($query4);
        $stmt4->bindParam(":name", $product);

        $stmt4->execute();

        $row = $stmt4->fetch(PDO::FETCH_ASSOC);

        $amount = $row["amount"];




        if ($amount != 0) {
            $query2 = "UPDATE watches SET  amount = (amount-1) WHERE name= :name;";
            $stmt2 = $pdo->prepare($query2);
            $stmt2->bindParam(":name", $product);

            $stmt2->execute();




            $query = "INSERT INTO orders (name,product,date,price) VALUES (:name,:product,CURRENT_DATE,:price);";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":product", $product);
            $stmt->bindParam(":price", $price);
            $stmt->execute();
            header("Location:../AdminPages/OrdersAdmin.php");
        } else {
            echo '<script type="text/javascript">
               window.onload = function () { alert("Cannot get the Out of Stock!"); } 
        </script>';
        }
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
