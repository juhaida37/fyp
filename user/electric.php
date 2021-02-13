<?php
include('config.php');

$uid = $_SESSION['iduser'];
$resultSession=$conn->query("SELECT rs_id, rs_session FROM ref_semester");

include_once 'headerReqq.html';
?>



<!-- First Container -->
<div class="container-fluid bg-1 text-center">    
<h3 class="margin">REGISTER ELECTRICAL APPLIANCE</h3>

<div class="row">
  <div class="container">
  <div class="row">
      <div class="col-md-offset-2 col-md-8">
            <div class="table-responsive panel with-nav-tabs panel-default">
                <div class="table-responsive panel-heading"> 
<form action="action_electric.php" method="POST" id="my-form">
<?php 
$query = "SELECT * FROM ref_semester WHERE rs_activesess=1";
$uid = $_SESSION['iduser'];
$sql="SELECT * FROM user_electric WHERE user_id=$uid";
$getlistElectric="SELECT * FROM ref_electrical WHERE re_status_value=1";

  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) <1){
?>  
  
<?php
      if($result = mysqli_query($conn, $query)){
    if(mysqli_num_rows($result) > 0){
        

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<br><th>SESSION : </th>";
                echo "<td style='width:60%;'>" . $row['rs_session'] . "<br><br></td>";
            echo "</tr>";

}
}
}
?>
   

  <div class="inputGroup" style="width:190px;border-radius:0px;margin:0px auto">
    <table border="1">  
  <?php
    $listElectric = mysqli_query($conn, $getlistElectric);
    
    while($le=$listElectric->fetch_assoc())
    {
      ?>
       <tr>  
      <td><input id="option1" name="option1[]" type="checkbox" value="<?php echo $le['re_id'];?>"/></td>
      <td><label for="option1"><?php echo $le['re_electrical_name'];?></label><br></td>
      </tr>
      
      <?php
      
    }
    
  ?>
    

</table><br>
<?php
} else{
      echo "<script> alert('You already register the electrical appliances. Now you can print your slip. Please contact the administration if you want to make a change.'); location = 'receipt.php'; </script>";
    }
    }

?> 

</div>
<button name="submit" type="submit" id="submit">Submit</button>
  </div>

  
</form>

<script type="text/javascript">
   
    $(document).ready(function () {
    
        $("#my-form").submit(function (e) {
   
            $("#btn-submit").attr("disabled", true);
   
            return true;
    
        });
    });
    
</script>

</div></div></div></div></div></div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>
   
</body>
</html>