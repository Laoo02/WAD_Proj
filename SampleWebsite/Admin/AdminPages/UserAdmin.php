<?php

require_once '../../IncFiles/config.php';
require_once "../../IncFiles/dbh.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watches,com</title>

    <link rel="stylesheet" href="../../Home.css" type="text/css">

</head>

<body>


    <h2>User List:</h2>

    <br>

    <div>

        <?php
        try {
            $sql = "SELECT name,username,password  FROM users";

            $data = [];
            $stmt = $pdo->query($sql);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }

            echo "<table>";
            echo "<tr><th>Name</th><th>Username</th><th>Password(hashed form)</th></tr>";
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>" . "<td>" .  $row['username'] . "</td>" . "<td>" .  $row['password'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            $pdo = null;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </div>

    <br>
    <br>

    <button><a href="../AdminPage.php">Go back to admin page</a></button>


    <h3>Change Password</h3>


    <form action="../Users/ChangePassword.php" method="post">


        <div class="container">

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter New Password" name="password">

            <br>

            <button>Change Password</button>

        </div>



    </form>

    <br>
    <br>

    <h3>Change Username</h3>


    <form action="../Users/ChangeUsername.php" method="post">


        <div class="container">

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <br>

            <label for="new_username"><b>New username</b></label>
            <input type="text" placeholder="Enter New username" name="new_username">

            <br>

            <button>Change Username</button>

        </div>



    </form>

    <br>
    <br>

    <h3>Change Name</h3>

    <form action="../Users/ChangeName.php" method="post">


        <div class="container">

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <br>

            <label for="new_name"><b>Name</b></label>
            <input type="text" placeholder="Enter New Name" name="new_name">

            <br>

            <button>Change name</button>

        </div>


    </form>

    <br>
    <br>

    <h3>Delete User</h3>

    <form action="../Users/DeleteUser.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <br>

            <button>Delete User</button>

        </div>


    </form>

    <br>
    <br>

    <h3>Insert User</h3>

    <form action="../Users/InsertUser.php" method="post">


        <div class="container">

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name">

            <br>


            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter New Password" name="password">

            <br>

            <button>Insert User</button>

        </div>



    </form>



</body>

</html>