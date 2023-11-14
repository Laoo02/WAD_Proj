<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO users (name, username, password) VALUES (:name,:username, :password);";

    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => '12'
    ];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $hashedPassword);

    $stmt->execute();

    header("Location:../AdminPages/UserAdmin.php");

    try {
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
