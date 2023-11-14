<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $new_name = $_POST["new_name"];


    try {


        $query = "UPDATE watches SET name= :new_name WHERE name= :name;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":new_name", $new_name);
        $stmt->bindParam(":name", $name);

        $stmt->execute();

        header("Location:../AdminPages/WatchAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
