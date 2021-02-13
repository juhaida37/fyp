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
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    html {
  scroll-behavior: smooth;
}
  body {
    font: 15px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #e8b923; /* Orange */
    color: #ffffff;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 30px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }

input[type=text], input[type=password] {
  width: 30%;
  padding: 2px 10px;
  margin: 4px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: black;
}

button {
  background-color: #E15E3E;
  color: white;
  padding: 2px 10px;
  margin: 4px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

/*edit size gambar*/
img.avatar {
  width: 9%;
  height: 9%;
  border-radius: 10%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 5px;
}

/* Change styles for dropdown */
.dropdown {
  padding: 2px 10px;
  color: black;
  margin: 4px 0;
  border: none;
  cursor: pointer;
}

span.psw {
  float: right;
  padding-top: 16px;
}

table
{
  background: white;
  color:black;
}

.table {
   margin: auto;
   width: 50% !important; 
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
<h3 class="margin">RECEIPT</h3>
<form action="#" method="POST">  
<?php 


$uid = $_SESSION['iduser'];

  $sql="SELECT up.up_fullname, ul.user_matric, ur.ur_room_number FROM user_profile as up 
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN user_room as ur ON ur.user_id = up.up_user_id 
  WHERE ul.user_id=$uid";

  $sql2="SELECT * FROM user_room as ur
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id 
  where ur.user_id=$uid";

  $sql3="SELECT * FROM user_electric as ue
  INNER JOIN ref_electrical as re ON ue.ue_electrical= re.re_id 
  where ue.user_id=$uid";

   $sql4="SELECT * FROM user_profile as up /*Block*/
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
   WHERE up.up_user_id=$uid";

  $sql6="SELECT * FROM user_room as ur 
   INNER JOIN user_electric as ue ON ue.user_id = ur.user_id  
   WHERE ur.user_id=$uid";

if($result = mysqli_query($conn, $sql6)){
    if(mysqli_num_rows($result) > 0){


  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

            while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                echo "<td colspan='2'>STUDENT SLIP</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>NAME :</th>";
                echo "<td style='width:50%;'>" . $row['up_fullname'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>MATRIC NUMBER :</th>";
                echo "<td>" . $row['user_matric'] . "</td>";
            echo "</tr>";

        }
      }
    }

    if($result = mysqli_query($conn, $sql4)){
        if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

           echo "<tr>";
                echo "<th>BLOCK :</th>";
                echo "<td>" . $row['rb_block_name'] . "</td>";
            echo "</tr>";
        }
      }
    }

        if($result = mysqli_query($conn, $sql2)){
        if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

           echo "<tr>";
                echo "<th>ROOM :</th>";
                echo "<td>" . $row['rr_room_name'] . "</td>";
            echo "</tr>";
        }
      }
    }

    if($result = mysqli_query($conn, $sql3)){
    $counter =0;
    if(mysqli_num_rows($result) > 0){
        

        while($row = mysqli_fetch_array($result)){
          $counter ++;
          echo "<tr>";
          If ($counter == 1) {
          echo "<th>ELECTRICAL APPLIANCES :</th>";      
          echo "<td>" . $row['re_electrical_name'] . "</td>";
          }
          else {
          echo "<td>&nbsp;</td>";
          echo "<td>" . $row['re_electrical_name'] . "</td>";
          }

          echo "</tr>";
        }

        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 

    else{
        echo "No records matching your query were found.";
    }

} 

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

} else{
      echo "Please select room and electrical appliances first.";
    }
  }

 
?>
<br>
<br>
 <button onclick="window.print()">PRINT</button>

</div>
</form>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>