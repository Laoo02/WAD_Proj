<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];

    try {
        require_once '../IncFiles/config.php';
        require_once '../IncFiles/dbh.php';

        $query = "SELECT name FROM watches WHERE name = :search;";

        $stmt = $pdo->prepare($query);


        $stmt->bindParam(":search", $search);

        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_DEFAULT);

        if ($results == $search) {

            $pdo = null;
            $stmt = null;

            $results = str_replace(' ', '', $results);

            $redirect = "../" . $results . ".php";

            // $path = "Location:../" . $results . ".php";

            header("Location:$redirect");
        } else {

            echo '<script type="text/javascript">
            window.onload = function () { alert("Invalid Watch Name!"); } 
     </script>';
        }

        exit();
    } catch (PDOException $e) {
        die("Error occured:" . $e->getMessage());
    }
}




/*
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <h1>Search results</h1>

        <?php

        if(empty(results)){
            echo "<div>";
            echo "<p>There were no results</p>";
             echo "</div>";
        }else{
          var_dump($results);
        }

        ?>
</body>

</html>*/