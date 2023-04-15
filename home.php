<?php
 session_start();
 if(!isset($_SESSION['username'])){
    header('location:index.php');
 }
 ?>
<html>
    <head>
        <title> Welcome </title>
        <link rel="stylesheet" type="text/css" href="what.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">

        <a class="float-right" href="logout.php">LOGOUT</a>
        <h1>Welcome <?php echo $_SESSION['username']; ?>  </h1>
        </div>
    </body>
</html>