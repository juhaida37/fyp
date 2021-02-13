<?php  
include ("config.php");  
if(isset($_POST['submit']))  {


$uid = $_SESSION['iduser'];
$session = $_SESSION['activesess'];

$name = mysqli_real_escape_string($conn,$_POST['name']);
$gender = $_POST['gender'];
$oku = $_POST['oku'];
$phone = $_POST['phone'];
$ic = $_POST['ic'];
$email = mysqli_real_escape_string($conn,$_POST['email']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$state = $_POST['state'];
$dob = $_POST['dob'];
$faculty = $_POST['faculty'];
$nation = $_POST['nation'];
$religion = $_POST['religion'];
$status = $_POST['status'];
$fyos = $_POST['fyos'];

$nameofguardian = mysqli_real_escape_string($conn,$_POST['nog']);
$income = $_POST['income'];
$guardianphone = $_POST['gphone'];
$guardianaddress = mysqli_real_escape_string($conn,$_POST['gaddress']);
$guardianstate = $_POST['gstate'];


//Insert Query of SQL
$query = mysqli_query($conn,"UPDATE user_profile SET up_fullname='$name', up_gender=$gender, up_statusoku=$oku, up_phonenumber=$phone, up_ic=$ic, up_email='$email', up_address='$address', up_state=$state, up_dob='$dob', up_faculty=$faculty, up_nation=$nation, up_religion=$religion, up_status=$status, up_fyos=$fyos, up_user_id=$uid WHERE up_user_id=$uid AND up_session=$session");

/*var_dump("UPDATE user_guardian SET ug_name='$nameofguardian', ug_income=$income, ug_phonenumber='$guardianphone', ug_address='$guardianaddress', ug_state=$guardianstate WHERE up_user_id=$uid");
die;*/

$query = mysqli_query($conn,"UPDATE user_guardian SET ug_name='$nameofguardian', ug_income=$income, ug_phonenumber='$guardianphone', ug_address='$guardianaddress', ug_state=$guardianstate WHERE user_id=$uid AND up_session=$session");

if($query==1)  
   {  
      echo"<script> alert('Inserted Successfully'); location = 'studentdetail.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed To Insert'); location = 'studentdetail.php'; </script>";

   }
}     

mysqli_close($conn); // Closing Connection with Server
?>