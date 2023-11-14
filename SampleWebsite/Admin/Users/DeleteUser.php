<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";

        $query = "DELETE FROM users WHERE name= :name AND username= :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":username", $username);

        $stmt->execute();

        header("Location:../AdminPages/UserAdmin.php");
        die();
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
