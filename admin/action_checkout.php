<?php  
include ("config.php");  
if(isset($_POST['btnCheckout'])){

$session = $_POST['session'];
$studentid = $_POST['student_id'];
$roomid = $_POST['room_id'];

//Insert Query of SQL

$query1 = mysqli_query($conn,"UPDATE user_room SET ur_checkout=1, ur_date=CURRENT_DATE(), ur_time=CURRENT_TIME() WHERE user_id=$studentid AND ur_session=$session");
$query2 = mysqli_query($conn,"UPDATE ref_room SET rr_status_room=0 WHERE rr_id=$roomid");


if($query1==1)  
   {  
   	if($query2==1){
   		echo"<script> alert('Checkout Successfully'); location = 'studentprofile.php'; </script>";
   	}
   	else {
   		echo"<script> alert('Error!'); location = 'studentprofile.php'; </script>";
   	}
   	 	
   	 } 
else  
   {  
      echo "<script> alert('Failed To Checkout'); location = 'studentprofile.php'; </script>";
}
}  

mysqli_close($conn); // Closing Connection with Server
?>