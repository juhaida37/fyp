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
<h3 class="margin">STUDENT PROFILE</h3>

<div class="container">
  <div class="row">
      <div class="col-md-offset-2 col-md-8">
            <div class="table-responsive panel with-nav-tabs panel-default">
                <div class="table-responsive panel-heading">
<br>
<img src="avatar.png" class="avatar" style="width:100px;height:100px; display:inline;" ><br><br>
<form action="action_checkout.php" method="POST">  
<?php 


$uid = $_GET['id'];
  $sql = "SELECT * FROM user_profile as up 
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id 
  INNER JOIN ref_statusoku as rs ON up.up_statusoku= rs.rs_id 
  INNER JOIN ref_state as rst ON up.up_state= rst.rs_id 
  INNER JOIN ref_faculty as rf ON up.`up_faculty`= rf.rf_id 
  INNER JOIN ref_nation as rn ON up.up_nation= rn.rn_id 
  INNER JOIN ref_religion as rr ON up.up_nation= rr.rr_id 
  INNER JOIN ref_status as rt ON up.up_status= rt.rs_id 
  INNER JOIN ref_fyos as rfy ON up.up_fyos= rfy.rf_id 
  where up_user_id=$uid";

  $sql_guardian="SELECT * FROM user_guardian as ug
  INNER JOIN ref_state as rst ON ug.ug_state= rst.rs_id 
  INNER JOIN ref_income as ri ON ug.ug_income= ri.ri_id 
  where ug.user_id=$uid";

  $sql1="SELECT up.up_fullname, ul.user_matric, ur.ur_room_number FROM user_profile as up 
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN user_room as ur ON ur.user_id = up.up_user_id 
  WHERE ul.user_id=$uid";

  $sql2="SELECT * FROM user_room as ur
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id 
  where ur.user_id=$uid";

  $sql3="SELECT * FROM user_electric as ue
  INNER JOIN ref_electrical as re ON ue.ue_electrical= re.re_id 
  where ue.user_id=$uid";

   $sql4="SELECT * FROM user_room as ur 
   INNER JOIN ref_room as rr ON rr.rr_id = ur.ur_room_number 
   INNER JOIN ref_block as rb ON rb.rb_id = ur.ur_id
   WHERE ur.user_id=$uid";

  $sql6="SELECT * FROM user_room as ur 
   INNER JOIN user_electric as ue ON ue.user_id = ur.user_id  
   WHERE ur.user_id=$uid";

   $sql7= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id
  WHERE ur.user_id=$uid";



  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<th>NAME :</th>";
                echo "<td style='width:60%;'>" . $row['up_fullname'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>GENDER :</th>";
                echo "<td>" . $row['rg_gender'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>STATUS OKU :</th>";
                echo "<td>" . $row['rs_statusname'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>PHONE NUMBER :</th>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>NRIC :</th>";
                echo "<td>" . $row['up_ic'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>EMAIL :</th>";
                echo "<td>" . $row['up_email'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>ADDRESS :</th>";
                echo "<td>" . $row['up_address'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>STATE :</th>";
                echo "<td>" . $row['rs_statename'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>DATE OF BIRTH :</th>";
                echo "<td>" . $row['up_dob'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>FACULTY :</th>";
                echo "<td>" . $row['rf_faculty'] . "</td>";
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

            echo "<tr>";
                echo "<th>FINAL YEAR OF STUDY :</th>";
                echo "<td>" . $row['rf_final_year_of_study'] . "</td>";
            echo "</tr>";

            echo "</table>";

}
}
}



 if($result = mysqli_query($conn, $sql_guardian)){
    if(mysqli_num_rows($result) > 0){
        echo "<br>";
        echo "<center><table class='table table-bordered table-hover'>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";
                echo "<td colspan='2'>PARENT/GUARDIAN DETAILS</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>NAME :</th>";
                echo "<td>" . $row['ug_name'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>INCOME STATUS :</th>";
                echo "<td>" . $row['ri_income'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>PHONE NUMBER :</th>";
                echo "<td style='width:60%;'>" . $row['ug_phonenumber'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>ADDRESS :</th>";
                echo "<td>" . $row['ug_address'] . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>STATE :</th>";
                echo "<td>" . $row['rs_statename'] . "</td>";
            echo "</tr>";
        }
      }
    }


    if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

            while($row = mysqli_fetch_array($result)){
echo "<br>";
            echo "<tr>";
                echo "<td colspan='4'>ROOM & ELECTRICAL APPLIANCES</td>";
            echo "</tr>";

        }
      }
    }


    if($result2 = mysqli_query($conn, $sql7)){
    if(mysqli_num_rows($result2) > 0){

        while($row = mysqli_fetch_array($result2)){

           echo "<tr>";
                echo "<th>BLOCK :</th>";
                echo "<td style='width:60%;' colspan='3'>" . $row['rb_block_name'] . "</td>";
            echo "</tr>";
        }
      }
    }



    if($result2 = mysqli_query($conn, $sql2)){
    if(mysqli_num_rows($result2) > 0){

        while($row = mysqli_fetch_array($result2)){

           echo "<tr>";
                echo "<th>ROOM :</th>";
                echo "<td style='width:60%;' colspan='3'>" . $row['rr_room_name'] . "</td>";
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
          echo "<td colspan='3'>" . $row['re_electrical_name'] . "</td>";
          }
          else {
          echo "<td>&nbsp;</td>";
          echo "<td colspan='3'>" . $row['re_electrical_name'] . "</td>";
          }

          echo "</tr>";
        }
      }
    }


    if($result2 = mysqli_query($conn, $sql2)){
    if(mysqli_num_rows($result2) > 0){

        while($row = mysqli_fetch_array($result2)){

           echo "<tr>";
                echo "<th>CHECK-IN DATE:</th>";
                echo "<td>" . $row['ur_checkin_date'] . "</td>";
                echo "<th>CHECK-IN TIME:</th>";
                echo "<td>" . $row['ur_checkin_time'] . "</td>";
            echo "</tr>";
        }
      }
    }

     if($result2 = mysqli_query($conn, $sql2)){
    if(mysqli_num_rows($result2) > 0){

        while($row = mysqli_fetch_array($result2)){

           echo "<tr>";
                echo "<th>CHECK-OUT DATE:</th>";
                echo "<td>" . $row['ur_date'] . "</td>";
                echo "<th>CHECK-OUT TIME:</th>";
                echo "<td>" . $row['ur_time'] . "</td>";
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
<?php
$selres = mysqli_query($conn,$sql2);
$resultArr= mysqli_fetch_array($selres);

?>
<input type="hidden" name="session" value="<?php echo $resultArr['ur_session']; ?>" >

<input type="hidden" name="student_id" value="<?php echo $resultArr['user_id'];  ?>" >

<input type="hidden" name="room_id" value="<?php echo $resultArr['ur_room_number']; ?>" >

<input type="submit" name="btnCheckout" value="Checkout" >


</div>
</form>
</div></div></div></div></div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>