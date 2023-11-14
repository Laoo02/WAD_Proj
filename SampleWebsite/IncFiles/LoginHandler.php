<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        //  require_once 'config.php';
        require_once "dbh.php";
        require_once 'Login/Login_model.php';
        require_once 'Login/Login_controler.php';


        if ($username == "ADMIN" && $name == "ADMIN" && $password == "chief") {
            header("Location:../Admin/AdminPage.php");
            die();
        } else {

            $errors = [];

            if (is_input_empty($username, $password)) {
                $errors["empty-input"] = "Fill all the necessary fields!";
            }

            $result = get_user($pdo, $username);

            if (is_username_wrong($result)) {
                $errors["login_incorrect"] = "Incorrect login credentials!";
            }

            if (!is_username_wrong($result) && is_password_wrong($password, $result["password"])) {
                $errors["login_incorrect"] = "incorrect login info!";
            }

            require_once 'config.php';

            $_SESSION["NameOfUser"] = $username;

            if ($errors) {
                $_SESSION["errors_login"] = $errors;

                header("Location:../index.php");
                die();
            }

            $newSessionId = session_create_id();
            $sessionId = $newSessionId . "_" . $result["id"];
            session_id($sessionId);

            $_SESSION["user_id"] = $result["id"];
            $_SESSION["user_username"] = htmlspecialchars($result["username"]);

            $_SESSION['last_regeneration'] = time();

            header("Location:../Home.php");

            $pdo = null;
            $stmt = null;

            die();
        }
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
} else {
    header("Location:../index.php");
    die();
}
