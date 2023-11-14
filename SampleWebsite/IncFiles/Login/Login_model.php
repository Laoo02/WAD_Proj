<?php


declare(strict_types=1);

//require_once '../IncFiles/config.php';



function get_user(object $pdo, string $username)
{

    session_start();

    $_SESSION["NameOfTheUser"] = $username;

    $query = "SELECT * FROM users WHERE username=:username";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}
