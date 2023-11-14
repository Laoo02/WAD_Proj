<?php
require_once 'IncFiles/config.php';
require_once 'IncFiles/Login/Login_view.php';
//session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <meta name="author" content="Laurentiu">
  <meta name="description" content="Login page for Watches,com">

  <link rel="icon" href="Images/Icon.jpg" type="image/x-icon">

  <title>Watches,com</title>

  <link rel="stylesheet" href="Login.css" type="text/css">

</head>

<body>


  <h1 style="color: #FFFDD0;">Login</h1>

  <form action="IncFiles/LoginHandler.php" method="post">


    <div class="container">

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name">

      <br>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username">

      <br>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password">

      <br>

      <button type="submit">Login</button>
    </div>

    <div id="newAcc" class="container">
      <span class="newAcc">No account? <a href="index.php">Sign up</a></span>
    </div>
  </form>

  <?php
  check_login_errors();
  ?>

</body>

</html>