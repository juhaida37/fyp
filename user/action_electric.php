<?php  
include ("config.php");  
if(isset($_POST['submit']))  
{
$uid = $_SESSION['iduser'];
$session = $_SESSION['activesess'];
$checkbox1=$_POST['option1']; 


   foreach($checkbox1 as $chk)
    {
$in_ch=mysqli_query($conn,"INSERT INTO user_electric(ue_electrical, ue_session, user_id) VALUES ($chk,$session, $uid)");  

          }

if($in_ch==1)  
   {  
      echo"<script> alert('Registration successful'); location = 'receipt.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed to register'); location = 'receipt.php'; </script>";

   }  
}
?>