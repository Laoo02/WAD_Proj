<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $new_username = $_POST["new_username"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";


        $query = "UPDATE users SET username= :new_username WHERE username= :username;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":new_username", $new_username);

        $stmt->execute();

        header("Location:../AdminPages/UserAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
