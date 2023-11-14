<?php

$conn_info = "mysql:host=localhost;dbname=testdatabase";

$dbusername = "root";

$dbpassword = "";

try {

    $pdo = new PDO($conn_info, $dbusername, $dbpassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection failed!:" . $e->getMessage();
}

//echo "Connection was Successful!";
