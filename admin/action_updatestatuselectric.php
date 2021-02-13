<?php
include ("config.php");  

$id = $_POST['idElect'];
$value = $_POST['statElect'];

$sql=mysqli_query($conn, "UPDATE ref_electrical SET re_status_value=$value WHERE re_id=$id");
//echo($sql);


     

mysqli_close($conn); // Closing Connection with Server
echo json_encode($sql);
?>