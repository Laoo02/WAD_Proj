<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];


    try {


        $query = "UPDATE watches SET price= :price WHERE name= :name;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":name", $name);

        $stmt->execute();

        header("Location:../AdminPages/WatchAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
