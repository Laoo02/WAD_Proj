<?php

declare(strict_types=1);

require_once '../IncFiles/dbh.php';

require_once 'TableEntries.php';


$query = "SELECT * FROM orders WHERE id = (SELECT MAX(id) FROM orders)";

$stmt = $pdo->query($query);

while ($row = $stmt->fetch()) {
    $_SESSION['name'] = $row["name"];
    $_SESSION['product'] = $row["product"];
    $_SESSION['price'] = $row["price"];
}

$stmt = null;

header("Location:../Cart.php");
//setValues($name, $product, $price);
