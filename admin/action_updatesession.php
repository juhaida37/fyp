<?php
include ("config.php");  

$id = $_POST['idSess'];
$value = $_POST['statSess'];

$sql=mysqli_query($conn, "UPDATE ref_semester SET rs_activesess=$value WHERE rs_id=$id");
//echo($sql);


     

mysqli_close($conn); // Closing Connection with Server
echo json_encode($sql);
?>