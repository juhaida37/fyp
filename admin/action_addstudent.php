<?php  
include ("config.php");  
if(isset($_POST['add'])){

$session = $_POST['session'];
$matric = $_POST['matric'];

//Insert Query of SQL
/*var_dump("INSERT INTO admin_addstudent(aas_session, aas_matric) VALUES ($session, '$matric')");
die;*/
$query = mysqli_query($conn,"INSERT INTO admin_addstudent(aas_session, aas_matric) VALUES ($session, '$matric')");



if($query==1)  
   {  
      echo"<script> alert('Inserted Successfully'); location = 'addstudent.php'; </script>";
   }  
else  
   {  
      echo "<script> alert('Failed To Insert'); location = 'addstudent.php'; </script>";
}
}     

mysqli_close($conn); // Closing Connection with Server
?>