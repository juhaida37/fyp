<?php  
include ("config.php");  
if(isset($_POST['add'])){

$item = $_POST['electrical'];

//Insert Query of SQL
/*var_dump("INSERT INTO admin_addstudent(aas_session, aas_matric) VALUES ($session, '$matric')");
die;*/
$query = mysqli_query($conn,"INSERT INTO ref_electrical(re_electrical_name) VALUES ('$item')");



if($query==1)  
   {  
      echo"<script> alert('Inserted Successfully'); location = 'electric.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed To Insert'); location = 'electric.php'; </script>";
}
}     

mysqli_close($conn); // Closing Connection with Server
?>