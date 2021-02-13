<?php
include ("config.php");  

$id = $_POST['idRoom'];
$value = $_POST['statRoom'];



$sql=mysqli_query($conn, "UPDATE ref_room SET rr_status_value=$value WHERE rr_id=$id");
//echo($sql);


     

mysqli_close($conn); // Closing Connection with Server
echo json_encode($sql);
?>