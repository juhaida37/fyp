<?php  
include ("config.php");  
if(isset($_POST['submit'])){

$uid = $_SESSION['iduser'];
$name = mysqli_real_escape_string($conn,$_POST['name']);
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$ic = $_POST['ic'];
$address = mysqli_real_escape_string($conn,$_POST['address']);
$state = $_POST['state'];
$dob = $_POST['dob'];
$nation = $_POST['nation'];
$religion = $_POST['religion'];
$status = $_POST['status'];

//Insert Query of SQL
$query = mysqli_query($conn,"INSERT INTO admin_profile(ap_name, ap_gender, ap_phone, ap_ic, ap_address, ap_state, ap_dob, ap_nation, ap_religion, ap_status, ap_admin_id) VALUES ('$name', $gender, $phone, $ic, '$address', $state, '$dob', $nation, $religion, $status, $uid)");

/*var_dump("INSERT INTO user_guardian(ug_name, ug_income, ug_phonenumber, ug_address, ug_state) VALUES ('$nameofguardian', $income, '$guardianphone', '$guardianaddress', $guardianstate)");
die;*/

if($query==1)  
   {  
      echo"<script> alert('Inserted Successfully'); location = 'student.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed To Insert'); location = 'admindetails.php'; </script>";
}
}     

mysqli_close($conn); // Closing Connection with Server
?>