<?php
include ("config.php");  

$id = $_POST['idOku'];
$value = $_POST['statOku'];


$sql=mysqli_query($conn, "UPDATE ref_room SET rr_oku=$value WHERE rr_id=$id");
//echo($sql);


     

mysqli_close($conn); // Closing Connection with Server
echo json_encode($sql);
?>