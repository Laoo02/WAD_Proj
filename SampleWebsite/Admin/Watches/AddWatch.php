<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $amount = $_POST["amount"];
    $price = $_POST["price"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";

        $query = "INSERT INTO watches (name, amount, price) VALUES (:name, :amount, :price);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":amount", $amount);
        $stmt->bindParam(":price", $price);

        $stmt->execute();
        header("Location:../AdminPages/WatchAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
