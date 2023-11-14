<?php

declare(strict_types=1);

//require_once '../IncFiles/config.php';


function addToCart(object $pdo, string $name)
{

    $query4 = "SELECT amount,price FROM watches WHERE name= :name;";

    $stmt4 = $pdo->prepare($query4);
    $stmt4->bindParam(":name", $name);

    $stmt4->execute();

    $row = $stmt4->fetch(PDO::FETCH_ASSOC);

    $amount = $row["amount"];
    $price = $row["price"];


    //////////////////////////////////////////




    ///////////////////////////////////////////////////

    /* $query = "SELECT price FROM watches WHERE name= :name;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name", $name);

    $stmt->execute();

    $price = $stmt->fetch(PDO::FETCH_ASSOC); */

    //  $amount = $result["name"];

    if (isset($_SESSION["NameOfUser"])) {
        $username = $_SESSION["NameOfUser"];

        if ($amount > 0) {
            $query2 = "UPDATE watches SET  amount = (amount-1) WHERE name= :name;";
            $stmt2 = $pdo->prepare($query2);
            $stmt2->bindParam(":name", $name);

            $stmt2->execute();

            //  $username = "nume";


            $query3 = "INSERT INTO orders (name,product,date,price) VALUES (:username,:name,CURRENT_DATE,:price);";

            $stmt3 = $pdo->prepare($query3);
            $stmt3->bindParam(":username", $username);
            $stmt3->bindParam(":name", $name);
            $stmt3->bindParam(":price", $price);
            // $stmt3->bindParam(":price", $price);
            $stmt3->execute();

            // $pdo = null;
            $stmt = null;
            $stmt2 = null;
            $stmt3 = null;
            $tmt4 = null;

            header("Location:../Cart.php");
        } else {

            echo '<script type="text/javascript">
               window.onload = function () { alert("Out of Stock!"); } 
        </script>';

            // header("Location:../Store.php");
        }
    } else {
        echo '<script type="text/javascript">
               window.onload = function () { alert("Cannot get the Username!"); } 
        </script>';
    }
}
