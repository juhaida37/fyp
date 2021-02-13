<?php

include('config.php');

$resultGender=$conn->query("SELECT rg_id, rg_gender FROM ref_gender");
$resultState=$conn->query("SELECT rs_id, rs_statename FROM ref_state");
$resultNation=$conn->query("SELECT rn_id, rn_nation_name FROM ref_nation");
$resultReligion=$conn->query("SELECT rr_id, rr_religion_name FROM ref_religion");
$resultStatus=$conn->query("SELECT rs_id, rs_status FROM ref_status");
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
  
  <style>

input[type=text], [type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-transform: uppercase;
  color:black;
}

  </style>
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
      <IMG SRC="logozaba.png" ALT="some text" WIDTH=50 HEIGHT=60>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav navbar-right">
 
        

        <ul class="nav navbar-nav">
        <li class="nav navbar-nav navbar-left">
        
        <li><a href="homepage.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">FILL IN YOUR DETAILS</h3>
  <img src="avatar.png" class="avatar" style="display:inline">
  <form action="action_admindetails.php" method="POST">
  
  <div class="container">
 
    <label for="name"><b>Name</b></label>
    <input class="form-control" type="text" placeholder="Full name" name="name" required><br>


    <label for="gender"><b>Gender</b></label>
    <select name ="gender" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultGender->fetch_assoc())
      {
        $gender_name=$rows['rg_gender'];
        $gender_id=$rows['rg_id'];
        echo "<option value=$gender_id>$gender_name</option>";
      }
      ?>
    </select>


    <label for="phone"><b>Phone Number</b></label>
    <input class="form-control" type="number" placeholder="Eg : 0123456789" name="phone" required><br>


    <label for="ic"><b>NRIC</b></label>
    <input class="form-control" type="number" placeholder="Eg : 901122011234" name="ic" required><br>


    <label for="address"><b>Address</b></label>
    <input class="form-control" type="text" placeholder="Eg : Full Address" name="address" required><br>


    <label for="state"><b>State</b></label>
    <select name="state" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultState->fetch_assoc())
      {
        $state_name=$rows['rs_statename'];
        $state_id=$rows['rs_id'];
        echo "<option value=$state_id>$state_name</option>";
      }
      ?>
    </select>


    <label for="dob"><b>Date of Birth</b></label>
    <input class="form-control" type="text" placeholder="Eg : 1 January 1999" name="dob" required><br>


    <label for="nation"><b>Nation</b></label>
    <select name="nation" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultNation->fetch_assoc())
      {
        $nation_name=$rows['rn_nation_name'];
        $nation_id=$rows['rn_id'];
        echo "<option value=$nation_id>$nation_name</option>";
      }
      ?>
    </select>


    <label for="religion"><b>Religion</b></label>
    <select name="religion" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultReligion->fetch_assoc())
      {
        $religion_name=$rows['rr_religion_name'];
        $religion_id=$rows['rr_id'];
        echo "<option value=$religion_id>$religion_name</option>";
      }
      ?>
    </select>


     <label for="status"><b>Status</b></label>
    <select name="status" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultStatus->fetch_assoc())
      {
        $status_name=$rows['rs_status'];
        $status_id=$rows['rs_id'];
        echo "<option value=$status_id>$status_name</option>";
      }
      ?>
    </select><br>
     

    <button value="submit" name="submit" id="submit">SUBMIT</button><br>
    <label>
      <span class="psw">By submit this form, you agree with the <a href="Termuser.php" style="text-decoration: none">term & condition</a></span>
    </label>

  </div>
</form>
</div>

     

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>
