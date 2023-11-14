<?php

declare(strict_types=1);


function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username =:username;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function  set_user(object $pdo, string $name, string $username, string $password)
{
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
}
