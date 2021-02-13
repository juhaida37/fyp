<?php
include('config.php');
$resultBlock=$conn->query("SELECT rb_id, rb_block_name FROM ref_block");
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
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">ADD BLOCK AND ROOM</h3>
<form action="action_addroom.php" method="POST">
<div class="container">
  <div class="col-md-offset-2 col-md-8">

    
    <label for="block"><b>Block :</b></label>
    <select name="block" class="form-control">
      <option>--- Please Select ---</option>
      <?php
      while($rows=$resultBlock->fetch_assoc())
      {
        $block_name=$rows['rb_block_name'];
        $block_id=$rows['rb_id'];
        echo "<option value=$block_id>$block_name</option>";
      }
      ?>
    </select><br>
    <label for="roomnumber"><b>Room Number:</b></label>
    <input class="form-control col-md-offset-2 col-md-8" type="number" placeholder="Eg : 101, 102" name="roomnumber"  id="roomnumber" style='width: 100%' required><br><br>
 
    <button value="add" name="add" id="add">ADD</button><br>
  </div> </div>
</form>
  <br>


<div class="container">
    <div class="page-header">
        <h3>Existing room number<span class="pull-right label label-default"></span></h3>
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
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

$sql="SELECT * FROM admin_addstudent as aas 
INNER JOIN ref_semester AS rs ON aas.aas_session = rs.rs_id WHERE rs.rs_id=aas.aas_id";
$sql2="SELECT * FROM ref_room WHERE rr_block=1 AND rr_oku=0 ORDER BY rr_room_name";

if($result = mysqli_query($conn, $sql2)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

           echo "<tr>";
                echo "<th style='color:black; text-align:center'>ROOM NUMBER :</th>";
                echo "<th style='color:black; text-align:center'>ROOM STATUS :</th>";
            echo "</tr>";
       

    while($row = mysqli_fetch_array($result)){
    $counter ++;
   If ($counter == 1) {
    echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
else {
  echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
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



 
?>




                        </p></div>
                        <div class="tab-pane fade" id="tab2default"><p style="color:black;">

                        <?php 

$sql="SELECT * FROM admin_addstudent as aas 
INNER JOIN ref_semester AS rs ON aas.aas_session = rs.rs_id WHERE rs.rs_id=aas.aas_id";
$sql2="SELECT * FROM ref_room WHERE rr_block=2 AND rr_oku=0 ORDER BY rr_room_name";

if($result = mysqli_query($conn, $sql2)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

           echo "<tr>";
                echo "<th style='color:black; text-align:center'>ROOM NUMBER :</th>";
                echo "<th style='color:black; text-align:center'>ROOM STATUS :</th>";
            echo "</tr>";
       

    while($row = mysqli_fetch_array($result)){
    $counter ++;
   If ($counter == 1) {
    echo "<tr>";     
      echo "<td style='color:black; text-align:center; width:50%;'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
else {
  echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
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



 
?>
  

</p></div>
                        <div class="tab-pane fade" id="tab3default"><p style="color:black;">
                          
                          <?php 

$sql="SELECT * FROM admin_addstudent as aas 
INNER JOIN ref_semester AS rs ON aas.aas_session = rs.rs_id WHERE rs.rs_id=aas.aas_id";
$sql2="SELECT * FROM ref_room WHERE rr_block=3 AND rr_oku=0 ORDER BY rr_room_name";

if($result = mysqli_query($conn, $sql2)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

           echo "<tr>";
                echo "<th style='color:black; text-align:center'>ROOM NUMBER :</th>";
                echo "<th style='color:black; text-align:center'>ROOM STATUS :</th>";
            echo "</tr>";
       

    while($row = mysqli_fetch_array($result)){
    $counter ++;
   If ($counter == 1) {
    echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
else {
  echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
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



 
?>

                        </p></div>
                        <div class="tab-pane fade" id="tab4default"><p style="color:black;">

                        <?php 

$sql="SELECT * FROM admin_addstudent as aas 
INNER JOIN ref_semester AS rs ON aas.aas_session = rs.rs_id WHERE rs.rs_id=aas.aas_id";
$sql2="SELECT * FROM ref_room WHERE rr_block=4 AND rr_oku=0 ORDER BY rr_room_name";

if($result = mysqli_query($conn, $sql2)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

           echo "<tr>";
                echo "<th style='color:black; text-align:center'>ROOM NUMBER :</th>";
                echo "<th style='color:black; text-align:center'>ROOM STATUS :</th>";
            echo "</tr>";
       

    while($row = mysqli_fetch_array($result)){
    $counter ++;
   If ($counter == 1) {
    echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
else {
  echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
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



 
?>
  

</p></div>
                        <div class="tab-pane fade" id="tab5default"><p style="color:black;">
                          
                          <?php 

$sql="SELECT * FROM admin_addstudent as aas 
INNER JOIN ref_semester AS rs ON aas.aas_session = rs.rs_id WHERE rs.rs_id=aas.aas_id";
$sql2="SELECT * FROM ref_room WHERE rr_block=1 AND rr_oku=1 ORDER BY rr_room_name";

if($result = mysqli_query($conn, $sql2)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

           echo "<tr>";
                echo "<th style='color:black; text-align:center'>ROOM NUMBER :</th>";
                echo "<th style='color:black; text-align:center'>ROOM STATUS :</th>";
            echo "</tr>";
       

    while($row = mysqli_fetch_array($result)){
    $counter ++;
   If ($counter == 1) {
    echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
else {
  echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
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



 
?>

                        </p></div>

                        <div class="tab-pane fade" id="tab6default"><p style="color:black;">
                          
                          <?php 

$sql="SELECT * FROM admin_addstudent as aas 
INNER JOIN ref_semester AS rs ON aas.aas_session = rs.rs_id WHERE rs.rs_id=aas.aas_id";
$sql2="SELECT * FROM ref_room WHERE rr_block=4 AND rr_oku=1 ORDER BY rr_room_name";

if($result = mysqli_query($conn, $sql2)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

           echo "<tr>";
                echo "<th style='color:black; text-align:center'>ROOM NUMBER :</th>";
                echo "<th style='color:black; text-align:center'>ROOM STATUS :</th>";
            echo "</tr>";
       

    while($row = mysqli_fetch_array($result)){
    $counter ++;
   If ($counter == 1) {
    echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
else {
  echo "<tr>";     
      echo "<td style='color:black; text-align:center'>" . $row['rr_room_name'] . "</td>";
      echo "<td style='color:black; text-align:center'>" . $row['rr_status_room'] . "</td>";
    echo "</tr>";
}
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



 
?>

                        </p></div>
                    </div>
                </div>
            </div>
        </div>
    
  </div>
</div>


<br/>




    


</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>


