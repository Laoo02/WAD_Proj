<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];


    try {


        $query = "DELETE FROM watches WHERE name= :name AND price= :price;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":price", $price);

        $stmt->execute();

        header("Location:../AdminPages/WatchAdmin.php");
        die();
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
