<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='custom-style.css'/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Chua x Cholia</title>
  </head>
  <body>



    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

      </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="index.php">ITEC 106 - System Security</a>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <!-- -->
            <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link" href="author.php">Author<span class="sr-only">(current)</span></a></li>
            <?php
              if (isset($_SESSION["useruid"])) {
                echo "<li class='nav-item active'><a class='nav-link' href='profile.php'>Profile</a></li>";
                echo "<li class='nav-item active'><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
              }
              else {
                echo "<li class='nav-item active'><a class='nav-link' href='signup.php'>Register</li>";
                echo "<li class='nav-item active'><a class='nav-link' href='login.php'>Log in</a></li>";
              }
             ?>
             <!-- -->


          </ul>
        </div>
  </nav>
