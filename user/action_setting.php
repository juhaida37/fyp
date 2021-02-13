<?php  
include ("config.php");  
if(isset($_POST['submit']))  {


$uid = $_SESSION['iduser'];
$oldpsw = mysqli_real_escape_string($conn,$_POST['oldpsw']);
$newpsw = mysqli_real_escape_string($conn,$_POST['newpsw']);
$repsw = mysqli_real_escape_string($conn,$_POST['repsw']);


//Insert Query of SQL
$sql = mysqli_query($conn,"SELECT * FROM user_login WHERE user_id=$uid");

$resultArr= mysqli_fetch_array($sql);
$oldp = $resultArr['user_psw'];


if($oldp==$oldpsw)  
   {  
		$query = mysqli_query($conn,"UPDATE user_login SET user_psw='$newpsw', user_repsw='$repsw' WHERE user_id=$uid");
        echo"<script> alert('Your password has been change'); location = 'setting.php'; </script>";
   }  
else  
   {  
   		echo "<script> alert('Your old password didnt match'); location = 'setting.php'; </script>";
   }
}     

mysqli_close($conn); // Closing Connection with Server
?>