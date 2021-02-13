<?php
include('config.php');
$resultSession=$conn->query("SELECT rs_id, rs_session FROM ref_semester");
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
<h3 class="margin">MANAGE ELECTRICAL APPLIANCES</h3>
<form method="POST" action="action_electric.php" class= "form-horizontal">

<div class="container">
  <div class="col-md-offset-2 col-md-8">

    <label for="electrical"><b>Add electrical appliances :</b></label>
    <input class="form-control" type="text" placeholder="Enter electrical appliances" name="electrical"  id="matric" style='width: 100%' required><br>
 
    <button value="add" name="add" id="add">ADD</button><br>
  </div></div>

</form>
<br>
  <div class="container">

    <div class="row">
      <div class="col-md-offset-2 col-md-8">
            <div class="table-responsive panel with-nav-tabs panel-default">
                <div class="table-responsive panel-heading">
    <p> <b>List of electrical appliances : </b></p>
<?php 

$sql="SELECT * FROM ref_electrical";

if($result = mysqli_query($conn, $sql)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
            echo "<th class='text-center'><center>NO.</th>";
            echo "<th class='text-center'>LIST ITEM :</th>";
            echo "<th class='text-center'>ACTION :</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          $counter ++;
      
      $status = $row['re_status_value'];
      $button_status ="";
       if($status == 1)
      {
      $button_status ="<button id='btnStat' class='table-responsive btn btn-sm btn-danger text-center' onclick='changeStat(0,".$row['re_id'].")'>Disable </button>";
      }
      else
      {
      $button_status ="<button id='btnStat' class='table-responsive btn btn-sm btn-success text-center' onclick='changeStat(1,".$row['re_id'].")'>Enable </button>";
      }
          
      echo "<tr>";
          echo "<td class='text-center'>" . $counter . "</td>";
          echo "<td>" . $row['re_electrical_name'] . "</td>";
          echo "<td class='text-center'><div id='div'>".$button_status."</div></td>";
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



 
?>

<script>

function changeStat(stat,id)
{
$.ajax({
type: "POST",
url: "action_updatestatuselectric.php",
data: {idElect:id,statElect:stat},
dataType: "json",
success: function(result){
console.log(result);
if(result)
{
location.reload();
}
}

});

}

</script>
    
  </div></div></div></div></div>

</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>