<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'config.php';
        require_once "dbh.php";
        require_once "Signup/Signup_model.php";
        require_once "Signup/Signup_controler.php";

        $_SESSION["NameOfUser"] = $username;

        $errors = [];

        if (is_input_empty($name, $username, $password)) {
            $errors["empty_input"] = "Fields not filled!";
        }

        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username aleady in use!";
        }

        require_once "config.php";

        if ($errors) {
            $_SESSION["error_signup"] = $errors;
            header("Location:../index.php");
            die();
        }

        create_user($pdo, $name, $username, $password);


        $pdo = null;
        $stmt = null;

        header("Location:../LoginPage.php");

        die();
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
} else {
    header("Location../index.php");
    die();
}
