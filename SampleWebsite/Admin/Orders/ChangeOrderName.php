<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";



        $query = "UPDATE orders SET name= :name WHERE id= :id;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        header("Location:../AdminPages/OrdersAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
