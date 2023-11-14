<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $amount = $_POST["amount"];


    try {


        $query = "UPDATE watches SET amount= :amount WHERE name= :name;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":amount", $amount);


        $stmt->execute();

        header("Location:../AdminPages/WatchAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
