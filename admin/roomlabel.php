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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="src/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>

.btns input {
  display: none;
}
.btns label {
   background-color: #3b9928;
}

.btns .btn {
  font-size: 15px;
  cursor: pointer;
  width: 100%;
  display: table-cell;
  vertical-align: middle;
  font-weight: 300;
  color: #ffffff;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
  box-shadow: inset 0 30px 20px -20px rgba(255, 255, 255, 0.15);
}
.btns .btn:hover {
  box-shadow: inset 0 30px 30px -20px rgba(50, 50, 50, 0.02);
}

select {
  margin: 8px 0;
  border: 1px solid #ccc;
  color:black;
}

.btn{
  width:auto;
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
  <div class="container">
    <div class="page-header">
        <h3>Manage Room<span class="pull-right label label-default"></span></h3>
    </div>
  <div class="row">
  <div class="col-sm-12">&nbsp;
  <div id="success_noti" class="alert alert-success" role="alert">Your changes is saved.</div>
  <div id="failed_noti" class="alert alert-danger" role="alert">Failed to save your changes. Please try again or contact Administrator for help.</div>
  </div>
  </div>
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
            <div class="table-responsive panel with-nav-tabs panel-default">
                <div class="table-responsive panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Block A</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Block B</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Block C</a></li>
                            <li><a href="#tab4default" data-toggle="tab">Block D</a></li>
                        </ul>
                </div>
                <div class="table-responsive panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default"><p style="color:black;">   
    


<?php 
$sql="SELECT * FROM ref_room WHERE rr_block=1 ORDER BY rr_room_name";


if($result = mysqli_query($conn, $sql)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
            echo "<th class='text-center' style='color:black'><center>NO.</th>";
            echo "<th class='text-center' style='color:black'>ROOM NUMBER :</th>";
            echo "<th class='text-center' style='color:black'>ACTION :</th>";
            echo "<th class='text-center' style='color:black'>OKU :</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          $counter ++;
      
      $status = $row['rr_status_value'];
      $button_status1 ="";
      if($status == 1)
      {
      $button_status1 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(0,".$row['rr_id'].")'><span style='color:green;'><i class='fa fa-check-circle'></span></i></a>";
      }
      else
      {
      $button_status1 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(1,".$row['rr_id'].")'><span style='color:red;'><i class='fa fa-times-circle'></span></i> </a>";
      }

      $statusoku = $row['rr_oku'];
      $button_oku1 ="";
       if($statusoku == 1)
      {
      $button_oku1 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-danger text-center' onclick='changeOku(0,".$row['rr_id'].")'>Bilik OKU </button>";
      }
      else
      {
      $button_oku1 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-success text-center' onclick='changeOku(1,".$row['rr_id'].")'>Bukan Bilik OKU </button>";
      }
          
      echo "<tr>";
          echo "<td class='text-center' style='color:black'>" . $counter . "</td>";
          echo "<td style='color:black' class='text-center'>" . $row['rr_room_name'] . "</td>";
          echo "<td class='text-center'><div id='div'>".$button_status1."</div></td>";
          echo "<td class='text-center'><div id='oku'>".$button_oku1."</div></td>";
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

</div>


<div class="tab-pane fade" id="tab2default"><p style="color:black;">

                        <?php 
$sql="SELECT * FROM ref_room WHERE rr_block=2 ORDER BY rr_room_name";


if($result = mysqli_query($conn, $sql)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
            echo "<th class='text-center' style='color:black'><center>NO.</th>";
            echo "<th class='text-center' style='color:black'>ROOM NUMBER :</th>";
            echo "<th class='text-center' style='color:black'>ACTION :</th>";
            echo "<th class='text-center' style='color:black'>OKU :</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          $counter ++;
      
      $status = $row['rr_status_value'];
      $button_status2 ="";
     
   
      if($status == 1)
      {
      $button_status2 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(0,".$row['rr_id'].")'><span style='color:green;'><i class='fa fa-check-circle'></span></i></a>";
      }
      else
      {
      $button_status2 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(1,".$row['rr_id'].")'><span style='color:red;'><i class='fa fa-times-circle'></span></i> </a>";
      }


      $statusoku = $row['rr_oku'];
      $button_oku2 ="";
       if($statusoku == 1)
      {
      $button_oku2 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-danger text-center' onclick='changeOku(0,".$row['rr_id'].")'>Bilik OKU </button>";
      }
      else
      {
      $button_oku2 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-success text-center' onclick='changeOku(1,".$row['rr_id'].")'>Bukan Bilik OKU </button>";
      }
          
          
      echo "<tr>";
          echo "<td class='text-center' style='color:black'>" . $counter . "</td>";
          echo "<td style='color:black' class='text-center'>" . $row['rr_room_name'] . "</td>";
          echo "<td class='text-center'><div id='div'>".$button_status2."</div></td>";
          echo "<td class='text-center'><div id='oku'>".$button_oku2."</div></td>";
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

</div>




<div class="tab-pane fade" id="tab3default"><p style="color:black;"><?php 
$sql="SELECT * FROM ref_room WHERE rr_block=3 ORDER BY rr_room_name";


if($result = mysqli_query($conn, $sql)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
            echo "<th class='text-center' style='color:black'><center>NO.</th>";
            echo "<th class='text-center' style='color:black'>ROOM NUMBER :</th>";
            echo "<th class='text-center' style='color:black'>ACTION :</th>";
            echo "<th class='text-center' style='color:black'>OKU :</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          $counter ++;
      
      $status = $row['rr_status_value'];
      $button_status3 ="";
      if($status == 1)
      {
      $button_status3 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(0,".$row['rr_id'].")'><span style='color:green;'><i class='fa fa-check-circle'></span></i></a>";
      }
      else
      {
      $button_status3 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(1,".$row['rr_id'].")'><span style='color:red;'><i class='fa fa-times-circle'></span></i> </a>";
      }


      $statusoku = $row['rr_oku'];
      $button_oku3 ="";
       if($statusoku == 1)
      {
      
      $button_oku3 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-danger text-center' onclick='changeOku(0,".$row['rr_id'].")'>Bilik OKU </button>";
      }
      else
      {
      $button_oku3 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-success text-center' onclick='changeOku(1,".$row['rr_id'].")'>Bukan Bilik OKU </button>";
      }
          
          
      echo "<tr>";
          echo "<td class='text-center' style='color:black'>" . $counter . "</td>";
          echo "<td style='color:black' class='text-center'>" . $row['rr_room_name'] . "</td>";
          echo "<td class='text-center'><div id='div'>".$button_status3."</div></td>";
          echo "<td class='text-center'><div id='oku'>".$button_oku3."</div></td>";
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


</div>


<div class="tab-pane fade" id="tab4default"><p style="color:black;"><?php 
$sql="SELECT * FROM ref_room WHERE rr_block=4 ORDER BY rr_room_name";


if($result = mysqli_query($conn, $sql)){
  $counter =0;
        if(mysqli_num_rows($result) > 0){
          echo "<center><table class='table table-bordered table-hover'>";

        echo "<tr>";
            echo "<th class='text-center' style='color:black'><center>NO.</th>";
            echo "<th class='text-center' style='color:black'>ROOM NUMBER :</th>";
            echo "<th class='text-center' style='color:black'>ACTION :</th>";
            echo "<th class='text-center' style='color:black'>OKU :</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result)){
          $counter ++;
      
      $status = $row['rr_status_value'];
      $button_status4 ="";
      if($status == 1)
      {
      $button_status4 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(0,".$row['rr_id'].")'><span style='color:green;'><i class='fa fa-check-circle'></span></i></a>";
      }
      else
      {
      $button_status4 ="<a id='btnStat-".$row['rr_id']."' href='#' onclick='changeStat(1,".$row['rr_id'].")'><span style='color:red;'><i class='fa fa-times-circle'></span></i> </a>";
      }


      $statusoku = $row['rr_oku'];
      $button_oku4 ="";
       if($statusoku == 1)
      {
      $button_oku4 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-danger text-center' onclick='changeOku(0,".$row['rr_id'].")'>Bilik OKU </button>";
      }
      else
      {
      $button_oku4 ="<button id='btnOku-".$row['rr_id']."' class='btn btn-sm btn-success text-center' onclick='changeOku(1,".$row['rr_id'].")'>Bukan Bilik OKU </button>";
      }
          
          
      echo "<tr>";
          echo "<td class='text-center' style='color:black'>" . $counter . "</td>";
          echo "<td style='color:black' class='text-center'>" . $row['rr_room_name'] . "</td>";
          echo "<td class='text-center'><div id='div'>".$button_status4."</div></td>";
          echo "<td class='text-center'><div id='oku'>".$button_oku4."</div></td>";
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

$(function() {
    $('#failed_noti').hide();
    $('#success_noti').hide();
});

function changeStat(stat,id)
{
 
$.ajax({
type: "POST",
url: "action_updatestatusroom.php",
data: {idRoom:id,statRoom:stat},
dataType: "json",
success: function(result){
console.log(result);
  if(result)
  {
    if(stat==1)
    {
      
      $('#btnStat-'+id).attr("onclick","changeStat(0,"+id+")");
      $('#btnStat-'+id).html("<span style='color:green;'><i class='fa fa-check-circle'></span>");
    }
    else
    {
      $('#btnStat-'+id).attr("onclick","changeStat(1,"+id+")");
      $('#btnStat-'+id).html("<span style='color:red;'><i class='fa fa-times-circle'></span></i>");
    }
    
    $('#success_noti').show().delay(3000).fadeOut(300);
    
  }
  else
  {
   
  $('#failed_noti').show().delay(3000).fadeOut(300);
  
  }
}

});

}


function changeOku(stat,id)
{

$.ajax({
type: "POST",
url: "action_updateokuroom.php",
data: {idOku:id,statOku:stat},
dataType: "json",
success: function(result){
console.log(result);
if(result)
  {
    if(stat==1)
    {
      $('#btnOku-'+id).toggleClass('btn-success btn-danger');
      $('#btnOku-'+id).attr("onclick","changeOku(0,"+id+")");
      $('#btnOku-'+id).html('Bilik OKU');
    }
    else
    {
      $('#btnOku-'+id).toggleClass('btn-danger btn-success');
      $('#btnOku-'+id).attr("onclick","changeOku(1,"+id+")");
      $('#btnOku-'+id).html('Bukan Bilik OKU');
    }
  
    $('#success_noti').show().delay(3000).fadeOut(300);
  }
  else
  {
    $('#failed_noti').show().delay(3000).fadeOut(300);
  }
}

});

}

</script>
</div>


                    </div>
                </div>
            </div>
        </div>
    
  </div>
</div>


<br/>




    


</div>
</div>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>


</body>
</html>