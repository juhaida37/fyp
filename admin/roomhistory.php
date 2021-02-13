
<?php
include('config.php');
$SessionSem=$conn->query("SELECT rs_id, rs_session, rs_activesess FROM ref_semester");
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
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">ROOM HISTORY</h3>

<div class="container">
  <div class="row">
      <div class="col-md-offset-2 col-md-8">
            <div class="table-responsive panel with-nav-tabs panel-default">
                <div class="table-responsive panel-heading">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="sessionsem"><b>Session :</b></label>
    <select name="sessionsem" class="form-control">
      <option>--- Please Select ---</option>
      <?php
      while($rows=$SessionSem->fetch_assoc())
      {
        $session_name=$rows['rs_session'];
        $session_id=$rows['rs_id'];
        echo "<option value=$session_id>$session_name</option>";
      }
      ?>
    </select><br>

    <button type ="submit" value="send" name="search" id="search">SEARCH</button><br><br>
</form>  

<div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Block A</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Block B</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Block C</a></li>
                            <li><a href="#tab4default" data-toggle="tab">Block D</a></li>
                            <li><a href="#tab5default" data-toggle="tab">OKU Male</a></li>
                            <li><a href="#tab6default" data-toggle="tab">OKU Female</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default"><p style="color:black;">

<?php 

if(isset($_POST['sessionsem']) && $_POST['sessionsem'] != "")
{
$sql= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN ref_semester as rs ON ur.ur_session=rs.rs_id 
  WHERE ur.ur_session = ".$_POST['sessionsem']." AND rr_block=1 AND rr_oku=0 ORDER BY rr_room_name";



if($result = mysqli_query($conn, $sql)){
  $counter =0;
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
                
                echo "<th><center>NO.</th>";
                echo "<th><center>ROOM NUMBER </th>";
                echo "<th><center>NAME </th>";
                echo "<th><center>MATRIC NUMBER </th>";
                echo "<th><center>PHONE </th>";
         echo "</tr>";

      while($row = mysqli_fetch_array($result)){
      $counter ++;
      If ($counter == 1) {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
      } else {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
           
        }
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
}

?>

</p></div>
                        <div class="tab-pane fade" id="tab2default"><p style="color:black;">

                          <?php 

if(isset($_POST['sessionsem']) && $_POST['sessionsem'] != "")
{
$sql= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN ref_semester as rs ON ur.ur_session=rs.rs_id 
  WHERE ur.ur_session = ".$_POST['sessionsem']." AND rr_block=2 AND rr_oku=0 ORDER BY rr_room_name";



if($result = mysqli_query($conn, $sql)){
  $counter =0;
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
                
                echo "<th><center>NO.</th>";
                echo "<th><center>ROOM NUMBER </th>";
                echo "<th><center>NAME </th>";
                echo "<th><center>MATRIC NUMBER </th>";
                echo "<th><center>PHONE </th>";
         echo "</tr>";

      while($row = mysqli_fetch_array($result)){
      $counter ++;
      If ($counter == 1) {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
      } else {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
           
        }
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
 }


?>

</p></div>
                        <div class="tab-pane fade" id="tab3default"><p style="color:black;">

                          <?php 

if(isset($_POST['sessionsem']) && $_POST['sessionsem'] != "")
{
$sql= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN ref_semester as rs ON ur.ur_session=rs.rs_id 
  WHERE ur.ur_session = ".$_POST['sessionsem']." AND rr_block=3 AND rr_oku=0 ORDER BY rr_room_name";



if($result = mysqli_query($conn, $sql)){
  $counter =0;
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
                
                echo "<th><center>NO.</th>";
                echo "<th><center>ROOM NUMBER </th>";
                echo "<th><center>NAME </th>";
                echo "<th><center>MATRIC NUMBER </th>";
                echo "<th><center>PHONE </th>";
         echo "</tr>";

      while($row = mysqli_fetch_array($result)){
      $counter ++;
      If ($counter == 1) {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
      } else {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
           
        }
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
} 


?>

</p></div>
                        <div class="tab-pane fade" id="tab4default"><p style="color:black;">

                          <?php 

if(isset($_POST['sessionsem']) && $_POST['sessionsem'] != "")
{
$sql= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN ref_semester as rs ON ur.ur_session=rs.rs_id 
  WHERE ur.ur_session = ".$_POST['sessionsem']." AND rr_block=4 AND rr_oku=0 ORDER BY rr_room_name";



if($result = mysqli_query($conn, $sql)){
  $counter =0;
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
                
                echo "<th><center>NO.</th>";
                echo "<th><center>ROOM NUMBER </th>";
                echo "<th><center>NAME </th>";
                echo "<th><center>MATRIC NUMBER </th>";
                echo "<th><center>PHONE </th>";
         echo "</tr>";

      while($row = mysqli_fetch_array($result)){
      $counter ++;
      If ($counter == 1) {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
      } else {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
           
        }
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
} 


?>

</p></div>
                        <div class="tab-pane fade" id="tab5default"><p style="color:black;">

                          <?php 

if(isset($_POST['sessionsem']) && $_POST['sessionsem'] != "")
{
$sql= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN ref_semester as rs ON ur.ur_session=rs.rs_id 
  WHERE ur.ur_session = ".$_POST['sessionsem']." AND rr_block=1 AND rr_oku=1 ORDER BY rr_room_name";



if($result = mysqli_query($conn, $sql)){
  $counter =0;
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
                
                echo "<th><center>NO.</th>";
                echo "<th><center>ROOM NUMBER </th>";
                echo "<th><center>NAME </th>";
                echo "<th><center>MATRIC NUMBER </th>";
                echo "<th><center>PHONE </th>";
         echo "</tr>";

      while($row = mysqli_fetch_array($result)){
      $counter ++;
      If ($counter == 1) {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
      } else {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
           
        }
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
} 


?>

</p></div>
                        <div class="tab-pane fade" id="tab6default"><p style="color:black;">
                          <?php 

if(isset($_POST['sessionsem']) && $_POST['sessionsem'] != "")
{
$sql= "SELECT * FROM user_profile as up
  INNER JOIN user_room as ur ON ur.user_id=up.up_user_id
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id  
  INNER JOIN ref_room as rr ON ur.ur_room_number= rr.rr_id  
  INNER JOIN ref_block as rb ON rr.rr_block=rb.rb_id
  INNER JOIN user_login as ul ON ul.user_id=up.up_user_id 
  INNER JOIN ref_semester as rs ON ur.ur_session=rs.rs_id 
  WHERE ur.ur_session = ".$_POST['sessionsem']." AND rr_block=4 AND rr_oku=1 ORDER BY rr_room_name";



if($result = mysqli_query($conn, $sql)){
  $counter =0;
    if(mysqli_num_rows($result) > 0){
        
        echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
                
                echo "<th><center>NO.</th>";
                echo "<th><center>ROOM NUMBER </th>";
                echo "<th><center>NAME </th>";
                echo "<th><center>MATRIC NUMBER </th>";
                echo "<th><center>PHONE </th>";
         echo "</tr>";

      while($row = mysqli_fetch_array($result)){
      $counter ++;
      If ($counter == 1) {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
      } else {
            echo "<tr>";
                echo "<td class='text-center'>" . $counter . "</td>";
                echo "<td><center>" . $row['rr_room_name'] . "</td>";
                echo "<td>" . $row['up_fullname'] . "</td>";
                echo "<td class='text-center'> <a href='studentprofile.php?id=". $row['up_user_id'] ." ' target='new' >". $row['user_matric'] ."</a> </td>";
                echo "<td>" . $row['up_phonenumber'] . "</td>";
            echo "</tr>";
           
        }
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
} 


?>

</p></div>
                      

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>


