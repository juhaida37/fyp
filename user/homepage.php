<!DOCTYPE html>

<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Residential College Registration System</title>
  <link rel = "icon" href = "logozaba.png" type = "image/x-icon"> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/css/style.css">
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
        <li><a href="#login">LOGIN</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#contact">CONTACT US</a></li>
        <li><a href="facility.php">FACILITY</a></li>
        <li><a href="signup.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">WELCOME!</h3>
  <img src="avatar.png" class="avatar" style="display:inline">
  
  <form action="action_login.php" method="POST">
  
  <div class="container">
    <div class="col-md-offset-2 col-md-8">
    <label for="matric"><b>Username :</b></label><br>
    <input type="text" placeholder="Enter Matric Number" name="matric"  id="matric" style='width: 100%' required><br>

    <label for="psw"><b>Password :</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" style='width: 100%' required><br>
 
<br>

    <button value="Submit" name="submit" id="submit" style='width: 100%'>Login</button><br>
    <label>
      <span class="psw">Forgot <a href="forpass.php" style="text-decoration: none">password?</a></span>
    </label>
  </div>
</form>
</div></div>

<!-- Second Container -->
<div id="about" class="container-fluid bg-2 text-center">
  <h3 class="margin">ABOUT US</h3>
  <p>Seventh Residential College, better known as Za'ba Residential College, University of Malaya was completed in 1974. Za'ba Residential College is able to accommodate 800 residents. Za'ba Residential College is a residential college that is also home to the disabled students. Residents of Za'ba Residential College hold firmly to the "KAMI BERSATU" slogan. There are 5 blocks, namely Blocks A, B, C, and D (student accommodation block) and Administration Block. Each block of accommodation has four floors, while the Administration Block has two floors. There are several other buildings in the area, namely Seri Jati Building and shop lot building.</p>
</div>

<!-- Third Container (Grid) -->
<div id="contact" class="container-fluid bg-3 text-center">    
  <h3 class="margin">CONTACT US</h3>
      <p><b>Address :</b><br> Kolej Kediaman Ketujuh (Za'ba),<br>
      Universiti Malaya, Lembah Pantai,<br>
      50603 Kuala Lumpur.</p><br>
      <p><b>Phone Number :</b><br> 03-79583420</p><br>
      <p><b>Email :</b><br> kolej7@um.edu.my</p><br>
 </div>     

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>


