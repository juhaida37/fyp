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
$query = mysqli_query($conn,"INSERT INTO user_profile(up_fullname, up_gender, up_statusoku, up_phonenumber, up_ic, up_email, up_address, up_state, up_dob, up_faculty, up_nation, up_religion, up_status, up_fyos, up_user_id, up_session) VALUES ('$name', $gender, $oku, $phone, $ic, '$email', '$address', $state, '$dob', $faculty,$nation, $religion, $status, $fyos, $uid, $session)");

/*var_dump("INSERT INTO user_guardian(ug_name, ug_income, ug_phonenumber, ug_address, ug_state) VALUES ('$nameofguardian', $income, '$guardianphone', '$guardianaddress', $guardianstate)");
die;*/

$query = mysqli_query($conn,"INSERT INTO user_guardian(ug_name, ug_income, ug_phonenumber, ug_address, ug_state, user_id, ug_session) VALUES ('$nameofguardian', $income, '$guardianphone', '$guardianaddress', $guardianstate, $uid, $session)");

if($query==1)  
   {  
      echo"<script> alert('Inserted Successfully'); location = 'block.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed To Insert'); location = 'electric.php'; </script>";

   }
}     

mysqli_close($conn); // Closing Connection with Server
?>