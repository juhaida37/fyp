<?php
include 'config.php';
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
 
        

        
        <li class="nav">
        <a href="student.php" class="dropdown-toggle" data-toggle="dropdown">STUDENT <span class="caret"></span></a>       
        <ul class="dropdown-menu" role="menu">
                <li><a href="student.php">Student details</a></li>
                <li><a href="addstudent.php">Add student</a></li>
              </ul>                
            </li>
        

        
        <li class="nav">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOMODATION <span class="caret"></span></a>       
        <ul class="dropdown-menu" role="menu">
                <li><a href="roomlabel.php">Manage room</a></li>
                <li><a href="addroom.php">Add Room</a></li>
                <li><a href="roomhistory.php">Room History</a></li>
              </ul>                
            </li>
        

        
        <li class="nav">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">OTHERS <span class="caret"></span></a>       
        <ul class="dropdown-menu" role="menu">
                <li><a href="electric.php">Manage Electric</a></li>
                <li><a href="session.php">Manage Session</a></li>
              </ul>                
            </li>
        

       
        <li><a href="setting.php">SETTING</a></li>
        <li><a href="homepage.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->

<div class="container-fluid bg-1 text-center">
<h3 class="margin">YOUR PROFILE</h3>

<div class="container">
  <div class="row">
      <div class="col-md-offset-2 col-md-8">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
<br>
<img src="avatar.png" class="avatar" style="width:100px;height:100px; display:inline;" ><br><br>

<?php 

$uid = $_SESSION['iduser'];
  $sql = "SELECT * FROM admin_profile as ap
  INNER JOIN ref_gender as rg ON ap.ap_gender= rg.rg_id 
  INNER JOIN ref_nation as rn ON ap.ap_nation= rn.rn_id 
  INNER JOIN ref_religion as rr ON ap.ap_nation= rr.rr_id 
  INNER JOIN ref_status as rt ON ap.ap_status= rt.rs_id 
  INNER JOIN ref_state as rst ON ap.ap_state= rst.rs_id WHERE ap_admin_id=$uid";

 if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo '<br>';
        echo "<center><table class='table table-bordered table-hover'>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                echo "<th>NAME :</th>";
                echo "<td>" . $row['ap_name'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>GENDER :</th>";
                echo "<td>" . $row['rg_gender'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>PHONE :</th>";
                echo "<td>" . $row['ap_phone'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>NRIC :</th>";
                echo "<td>" . $row['ap_ic'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>ADDRESS :</th>";
                echo "<td>" . $row['ap_address'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>STATE :</th>";
                echo "<td>" . $row['rs_statename'] . "</td>";
            echo "</tr>";

             echo "<tr>";
                echo "<th>DATE OF BIRTH :</th>";
                echo "<td>" . $row['ap_dob'] . "</td>";
            echo "</tr>";

             echo "<tr>";
                echo "<th>NATION :</th>";
                echo "<td>" . $row['rn_nation_name'] . "</td>";
            echo "</tr>";

             echo "<tr>";
                echo "<th>RELIGION :</th>";
                echo "<td>" . $row['rr_religion_name'] . "</td>";
            echo "</tr>";

             echo "<tr>";
                echo "<th>STATUS :</th>";
                echo "<td>" . $row['rs_status'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
?>




<br>
<h3 class="margin">CHANGE PASSWORD</h3>
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


