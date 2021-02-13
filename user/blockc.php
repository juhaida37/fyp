<?php
include('config.php');

$uid = $_SESSION['iduser'];

$resultSession=$conn->query("SELECT rs_id, rs_session FROM ref_semester");
$resultRoom=$conn->query("SELECT rr.rr_id,rr.rr_room_name,rr.rr_oku,rr.rr_status_value, rb.rb_block_name, rb.rb_block_name_alias FROM ref_room AS rr LEFT JOIN ref_block AS rb ON rr.rr_block=rb.rb_id WHERE rb.rb_id=3 AND rr.rr_oku=0 AND rr.rr_status_value=1 ORDER BY rr_room_name");



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
  <link rel="stylesheet" href="src/css/style.css">
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
  margin: 5px;
  cursor: pointer;
  /*width: 5%;*/
  display: table-cell;
  vertical-align: middle;
  font-weight: 300;
  color: #ffffff;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
  box-shadow: inset 0 30px 20px -20px rgba(255, 255, 255, 0.15);
}
.btns .btn:hover {
  box-shadow: inset 0 30px 30px -20px rgba(50, 50, 50, 0.02);
  background-color: #358026;
}

.btns .btn:active {
  box-shadow: inset 0 30px 30px -20px rgba(50, 50, 50, 0.02);
  background-color: grey;
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
  <h3 class="margin">Choose Your Room</h3>
<div class="container">
  <div class="row">
      <div class="col-md-offset-1 col-md-10">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">   
    

<form action="action_room.php" method="post">
<?php 

$query = "SELECT * FROM ref_semester WHERE rs_activesess=1";
$sql="SELECT * FROM user_room WHERE user_id=$uid";


if($result = mysqli_query($conn, $query)){
    if(mysqli_num_rows($result) > 0){
        

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<br><th>SESSION : </th>";
                echo "<td style='width:60%;'>" . $row['rs_session'] . "<br><br></td>";
            echo "</tr>";

}
}
}
  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) <1){
?>    

      <div class="btns btn-group btn-group-toggle" data-toggle="buttons">
  


      <?php
      
      
      while ($rows=$resultRoom->fetch_assoc()){
        $room_name=$rows['rr_room_name'];
        $room_id=$rows['rr_id'];
        $block_alias=$rows['rb_block_name_alias'];
         $setClass="";
         $disableProp = "";
        $selectedRoom=$conn->query("SELECT * FROM user_room  WHERE ur_session=1 AND ur_room_number=$room_id");
         //var_dump("SELECT * FROM user_room  WHERE ur_session=1 AND ur_room_number=$room_id");die;
         while ($selected=$selectedRoom->fetch_assoc()){
             // var_dump(count($selected));die;

            if(count($selected) >0)
            {
              $setClass="style='background-color:red;'";
              $disableProp = "disabled";
            }
         }


      ?>
      <label class="btn btn-secondary btn-warning" <?php echo $setClass ; ?>>
      <input <?php echo $setClass ." ". $disableProp ." "; ?> type="radio" name="choice" id="option1" value="<?php echo $room_id; ?>"
      <span class="btn"><?php echo $block_alias.' '.$room_name; ?></span>
      </label>

      <?php
    }
    ?> 

</div>
<br>
<br>
<button value="submit" name="submit" id="submit">SUBMIT</button>
<?php
} else{
      echo "<script> alert('You already register the room. Now you can print your slip. Please contact the administration if you have any issues.'); location = 'receipt.php'; </script>";
    }
    }

?>
 </form>

</div></div></div></div></div></div>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>


</body>
</html>