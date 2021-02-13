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

<style>

input[type=text], [type=number], select {
  width: 30%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-transform: uppercase;
  color:black;
}
</style>
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
        <li><a href="studentdetail.php">PROFILE</a></li>
        <li><a href="block.php">ACCOMODATION</a></li>
        <li><a href="electric.php">ELECTRICAL APPLIANCE</a></li>
         <li><a href="receipt.php">RECEIPT</a></li>
         <li><a href="setting.php">SETTING</a></li>
        <li><a href="action_logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->

<div class="container-fluid bg-1 text-center">
<h3 class="margin">CHANGE PASSWORD</h3>

<div class="container">
  <div class="row">
      <div class="col-md-offset-2 col-md-8">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
<br>
<form action="action_setting.php" method="POST">  

    <label for="matric"><b>Old Password:</b></label><br>
    <input type="password" placeholder="Eg : WIG123456" name="oldpsw"  id="matric" style='width: 100%'  required> &nbsp;&nbsp;&nbsp;&nbsp; 
    
    <label for="matric"><b>New Password:</b></label><br>
    <input type="password" placeholder="Eg : WIG123456" name="newpsw"  id="matric" style='width: 100%'  required> &nbsp;&nbsp;&nbsp;&nbsp;

    <label for="matric"><b>Re-type New Password:</b></label><br>
    <input type="password" placeholder="Eg : WIG123456" name="repsw"  id="matric" style='width: 100%'  required> &nbsp;&nbsp;&nbsp;&nbsp; 

     <br><br><button value="submit" name="submit" id="submit">SUBMIT</button><br><br>

  </form>
  </div>

</div></div></div></div></div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>


