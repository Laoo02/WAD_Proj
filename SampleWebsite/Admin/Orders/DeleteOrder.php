<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $product = $_POST["product"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";

        $query = "DELETE FROM orders WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);

        $stmt->execute();


        $query2 = "UPDATE watches SET  amount = (amount+1) WHERE name = :name";

        $stmt2 = $pdo->prepare($query2);

        $stmt2->bindParam(":name", $product);

        $stmt2->execute();


        header("Location:../AdminPages/OrdersAdmin.php");
        die();
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
