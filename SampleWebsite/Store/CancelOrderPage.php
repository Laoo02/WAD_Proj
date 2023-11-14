 <?php
    require_once '../IncFiles/config.php';
    require_once '../IncFiles/dbh.php';
    require 'CancelOrder.php';

    ResetAmount($pdo);
    // DeleteOrder($pdo);
    ?>
 <html>

 <head>
     <meta charset="UTF-8">

     <meta name="author" content="Laurentiu">
     <meta name="description" content="Home page for Watches,com">

     <link rel="icon" href="Images/Icon.jpg" type="image/x-icon">

     <title>Watches,com login</title>

     <link rel="stylesheet" href="Home.css" type="text/css">
 </head>

 <body>
     <h1>Order Removed!</h1>


     <button><a href="../index.php">Go back to sign in page</a></button>

 </body>

 </html>