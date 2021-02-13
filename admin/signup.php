<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Residential College Registration System</title>
  <link rel = "icon" href = "logozaba.png" type = "image/x-icon"> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand">
                <h1 style="margin-top:-40%;"><span class="largenav"><img src="logozaba.png" height="60" alt="logo"></span></h1>
      </div>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homepage.php">LOGIN</a></li>
        <li><a href="signup.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">SIGN UP</h3>
  <img src="avatar.png" class="avatar" style="display:inline">
  <form action="action_signup.php" method="POST">
  
  <div class="container">
    <div class="col-md-offset-2 col-md-8">
    <label for="uname"><b>Set Username :</b></label><br>
    <input type="text" placeholder="ABC123456" name="uname"  id="uname" style='width: 100%' required><br>

    <label for="email"><b>Email :</b></label><br>
    <input type="text" placeholder="ABC@123456.com" name="email"  id="email" style='width: 100%' required><br>

    <label for="psw"><b>Set Password :</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" style='width: 100%' required><br>

    <label for="repsw"><b>Re-type Password :</b></label><br>
    <input type="password" placeholder="Re-type Password" name="repsw" id="repsw" style='width: 100%' required><br><br>

    <button value="submit" name="submit" id="submit" style='width: 100%'>Sign Up</button><br>
  
  </div></div>
</form>
</div>
     

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>

