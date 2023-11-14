<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    try {
        require_once '../../IncFiles/config.php';
        require_once "../../IncFiles/dbh.php";

        $options = [
            'cost' => '12'
        ];

        $password = password_hash($password, PASSWORD_BCRYPT, $options);

        $query = "UPDATE users SET password= :password WHERE username= :username;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        header("Location:../AdminPages/UserAdmin.php");
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}
