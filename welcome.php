<?php

include 'navbar.php';

// initalize the session

session_start();

 // check if the user is already logged in, if yes then redirect them to welcome page

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)              {
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>



</head>
<body>


  <div class="container text-center">
        <h1>Your a logged in !!!</h1>

        <div class="list-group">

  <a href="register.php" class="list-group-item list-group-item-action">Create Account</a>
  <a href="reset.php" class="list-group-item list-group-item-action">Update Account</a>
  <a href="read.php" class="list-group-item list-group-item-action">View Account</a>
  <a href="delete.php" class="list-group-item list-group-item-action">Delete Account</a>
</div>

</div>




</body>
</html>
