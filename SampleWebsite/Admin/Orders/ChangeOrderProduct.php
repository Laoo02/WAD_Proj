<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $product = $_POST["product"];



    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";



        $query = "UPDATE orders SET product= :product WHERE id= :id;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":product", $product);

        $stmt->execute();

        header("Location:../AdminPages/OrdersAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
