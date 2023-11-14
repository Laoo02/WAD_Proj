<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $new_name = $_POST["new_name"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";



        $query = "UPDATE users SET name= :new_name WHERE username= :username;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":new_name", $new_name);

        $stmt->execute();

        header("Location:../AdminPages/UserAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
