  <?php
  /*session_start();

    $_SESSION["username"] = "Laoo";
    echo $_SESSION["username"];

    unset($_SESSION["username"]);*/
  require_once 'IncFiles/Signup/Signup_view.php';
  require_once 'IncFiles/config.php';
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watches,com</title>

    <link rel="stylesheet" href="Login.css" type="text/css">

  </head>

  <body>

    <h2 style="color: #FFFDD0;">Signup</h2>

    <php?>

      <form action="IncFiles/SignupHandler.php" method="post">


        <div class="container">

          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter Last name" name="name">

          <br>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username">

          <br>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password">

          <br>

          <button>Sign Up</button>

          <button><a href="LoginPage.php">Already have an account?</a></button>
        </div>

        </php>

      </form>

      <?php
      check_signup_errors();
      ?>
  </body>

  </html>