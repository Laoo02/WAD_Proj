<<?php
    // require_once 'IncFiles/config.php';
    require_once '../IncFiles/dbh.php';

    function ResetAmount(object $pdo)
    {

        $query = "UPDATE watches SET  amount = (amount+1) WHERE name = :name";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $_SESSION['product']);

        $stmt->execute();

        DeleteOrder($pdo);

        $stmt = null;
        //$pdo = null;
        // header("Location:../Home.php");
    }


    function DeleteOrder(object $pdo)
    {

        $query2 = "DELETE FROM orders WHERE id = (SELECT MAX(id) FROM orders) LIMIT 1;";

        $stmt2 = $pdo->query($query2);

        //  $stmt2->execute();

        $stmt2 = null;
        $pdo = null;

        //   header("Location:../index.php");
    }


    /*$stmt4->bindParam(":name", $name);

    $stmt4->execute();

    $row = $stmt4->fetch(PDO::FETCH_ASSOC);

    $amount = $row["amount"];
    $price = $row["price"];



    $query2 = "UPDATE watches SET  amount = (amount-1) WHERE name= :name;";
    $stmt2 = $pdo->prepare($query2);
    $stmt2->bindParam(":name", $name);

    $stmt2->execute();*/
