<?php  
include ("config.php");  
if(isset($_POST['submit']))  
{
$uid = $_SESSION['iduser'];
$session = $_SESSION['activesess'];

$room=$_POST['choice']; 



$in_ch=mysqli_query($conn,"INSERT INTO user_room(ur_room_number, ur_session, user_id, ur_checkin_date, ur_checkin_time) VALUES ($room, $session, $uid, CURRENT_DATE() , CURRENT_TIME())");
$query=mysqli_query($conn,"UPDATE ref_room SET rr_status_room=1 WHERE rr_id=$room");


if($in_ch==1)  
   {  
   	 if($query==1){
   	 	echo"<script> alert('Successfully booked the room'); location = 'electric.php'; </script>";
   	 }
   	 else{
   	 	echo "<script> alert('Nono'); location = 'studentdetail.php'; </script>";
   	 }
      
   }  
else  
   {  
      echo "<script> alert('The room was already taken by someone else'); location = 'studentdetail.php'; </script>";

   }  
}
?> 