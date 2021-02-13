<?php  
include ("config.php");  
if(isset($_POST['add'])){

$block = $_POST['block'];
$roomnumber = $_POST['roomnumber'];

//Insert Query of SQL
$query = mysqli_query($conn,"INSERT INTO ref_room(rr_block, rr_room_name) VALUES ($block, $roomnumber)");

/*var_dump("INSERT INTO user_guardian(ug_name, ug_income, ug_phonenumber, ug_address, ug_state) VALUES ('$nameofguardian', $income, '$guardianphone', '$guardianaddress', $guardianstate)");
die;*/

if($query==1)  
   {  
      echo"<script> alert('Inserted Successfully'); location = 'addroom.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed To Insert'); location = 'addroom.php'; </script>";
}
}     

mysqli_close($conn); // Closing Connection with Server
?>