
<?php
include('config.php');

$uid = $_SESSION['iduser'];
  $sql = "SELECT * FROM user_profile as up 
  INNER JOIN ref_gender as rg ON up.up_gender= rg.rg_id 
  INNER JOIN ref_statusoku as rs ON up.up_statusoku= rs.rs_id 
  INNER JOIN ref_state as rst ON up.up_state= rst.rs_id 
  INNER JOIN ref_faculty as rf ON up.`up_faculty`= rf.rf_id 
  INNER JOIN ref_nation as rn ON up.up_nation= rn.rn_id 
  INNER JOIN ref_religion as rr ON up.up_nation= rr.rr_id 
  INNER JOIN ref_status as rt ON up.up_status= rt.rs_id 
  INNER JOIN ref_fyos as rfy ON up.up_fyos= rfy.rf_id 
  where up_user_id=$uid";

  $sql_guardian="SELECT * FROM user_guardian as ug
  INNER JOIN ref_state as rst ON ug.ug_state= rst.rs_id 
  INNER JOIN ref_income as ri ON ug.ug_income= ri.ri_id 
  where ug.user_id=$uid";

$resultGender=$conn->query("SELECT rg_id, rg_gender FROM ref_gender");
$resultOKU=$conn->query("SELECT rs_id, rs_statusname FROM ref_statusoku");
$resultState=$conn->query("SELECT rs_id, rs_statename FROM ref_state");
$resultFaculty=$conn->query("SELECT rf_id, rf_faculty FROM ref_faculty");
$resultNation=$conn->query("SELECT rn_id, rn_nation_name FROM ref_nation");
$resultReligion=$conn->query("SELECT rr_id, rr_religion_name FROM ref_religion");
$resultStatus=$conn->query("SELECT rs_id, rs_status FROM ref_status");
$resultFinalYearOfStudy=$conn->query("SELECT rf_id, rf_final_year_of_study FROM ref_fyos");

$resultIncome=$conn->query("SELECT ri_id,ri_income FROM ref_income");
$resultGstate=$conn->query("SELECT rs_id, rs_statename FROM ref_state");


include_once 'headerReq.html';
?>


<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">UPDATE YOUR DETAILS</h3>
  <img src="avatar.png" class="avatar" style="display:inline">
  <form action="action_updatestudentdetail.php" method="POST">
  
  <div class="container">
<?php

 if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
?>
   
<label for="name"><b>Name</b></label>
    <input class="form-control" type="text" placeholder="Full name" name="name" value='<?php echo $row['up_fullname']; ?>' required><br>


    <label for="gender"><b>Gender</b></label>
    <select name ="gender" class="form-control" disabled>
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultGender->fetch_assoc())
      {
        $gender_name=$rows['rg_gender'];
        $gender_id=$rows['rg_id'];
        $sel = '';

        if($row['rg_id'] == $gender_id ){

             $sel = 'selected';
        }
        echo "<option value=$gender_id ".$sel." >$gender_name</option>";
      }
      ?>
    </select>


    <label for="oku"><b>Are you disable student?</b></label>
    <select name ="oku" class="form-control" disabled>
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultOKU->fetch_assoc())
      {
        $oku_name=$rows['rs_statusname'];
        $oku_id=$rows['rs_id'];
        $sel = '';

        if($row['rs_id'] == $oku_id ){

             $sel = 'selected';
        }
        echo "<option value=$oku_id ".$sel.">$oku_name</option>";
      }
      ?>
    </select>


    <label for="phone"><b>Phone Number</b></label>
    <input class="form-control" type="number" placeholder="Eg : 0123456789" name="phone" value='<?php echo $row['up_phonenumber']; ?>' required><br>


    <label for="ic"><b>NRIC</b></label>
    <input class="form-control" type="number" placeholder="Eg : 901122011234" name="ic" value='<?php echo $row['up_ic']; ?>' required><br>


    <label for="email"><b>Email</b></label>
    <input class="form-control" type="text" placeholder="Eg : abc@gmail.com" name="email" value='<?php echo $row['up_email']; ?>' required><br>


    <label for="address"><b>Address</b></label>
    <input class="form-control" type="text" placeholder="Eg : Full Address" name="address" value='<?php echo $row['up_address']; ?>' required><br>


    <label for="state"><b>State</b></label>
    <select name="state" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultState->fetch_assoc())
      {
        $state_name=$rows['rs_statename'];
        $state_id=$rows['rs_id'];
         $sel = '';

        if($row['rg_id'] == $state_id ){

             $sel = 'selected';
        }
        echo "<option value=$state_id ".$sel.">$state_name</option>";
      }
      ?>
    </select>


    <label for="dob"><b>Date of Birth</b></label>
    <input class="form-control" type="text" placeholder="Eg : 1 January 1999" name="dob" value='<?php echo $row['up_dob']; ?>' required><br>


    <label for="faculty"><b>Faculty</b></label>
    <select name="faculty" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultFaculty->fetch_assoc())
      {
        $faculty_name=$rows['rf_faculty'];
        $faculty_id=$rows['rf_id'];
         $sel = '';

        if($row['rf_id'] == $faculty_id ){

             $sel = 'selected';
        }
        echo "<option value='$faculty_id' ".$sel.">$faculty_name</option>";
      }
      ?>
    </select>


    <label for="nation"><b>Nation</b></label>
    <select name="nation" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultNation->fetch_assoc())
      {
        $nation_name=$rows['rn_nation_name'];
        $nation_id=$rows['rn_id'];
        $sel = '';

        if($row['rn_id'] == $nation_id ){

             $sel = 'selected';
        }
        echo "<option value=$nation_id ".$sel.">$nation_name</option>";
      }
      ?>
    </select>


    <label for="religion"><b>Religion</b></label>
    <select name="religion" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultReligion->fetch_assoc())
      {
        $religion_name=$rows['rr_religion_name'];
        $religion_id=$rows['rr_id'];
        $sel = '';

        if($row['rr_id'] == $religion_id ){

             $sel = 'selected';
        }
        echo "<option value=$religion_id ".$sel.">$religion_name</option>";
      }
      ?>
    </select>


     <label for="status"><b>Status</b></label>
    <select name="status" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultStatus->fetch_assoc())
      {
        $status_name=$rows['rs_status'];
        $status_id=$rows['rs_id'];
        $sel = '';

        if($row['rs_id'] == $status_id ){

             $sel = 'selected';
        }
        echo "<option value=$status_id ".$sel.">$status_name</option>";
      }
      ?>
    </select>


    <label for="fyos"><b>Final Year of Study</b></label>
    <select name="fyos" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultFinalYearOfStudy->fetch_assoc())
      {
        $fyos_name=$rows['rf_final_year_of_study'];
        $fyos_id=$rows['rf_id'];
        $sel = '';

        if($row['rf_id'] == $fyos_id ){

             $sel = 'selected';
        }
        echo "<option value=$fyos_id ".$sel.">$fyos_name</option>";
      }
      ?>
    </select>

 

<?php 

}}}

?>

<?php

 if($result = mysqli_query($conn, $sql_guardian)){
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
?>

      <label for="nog"><b>Name of father/Guardian</b></label>
    <input class="form-control" type="text" placeholder="Full name" name="nog" value='<?php echo $row['ug_name']; ?>' required><br>


    <label for="income"><b>Total Parent/Guardian Income</b></label>
    <select name="income" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultIncome->fetch_assoc())
      {
        $income_name=$rows['ri_income'];
        $income_id=$rows['ri_id'];
         $sel = '';

        if($row['ri_id'] == $income_id ){

             $sel = 'selected';
        }
        echo "<option value=$income_id ".$sel.">$income_name</option>";
      }
      ?>
    </select>


    <label for="gphone"><b>Phone Number of Parent/Guardian</b></label>
    <input class="form-control" type="number" placeholder="Eg : 0123456789" name="gphone" value='<?php echo $row['ug_phonenumber']; ?>' required><br>


    <label for="gaddress"><b>Parent/Guardian Address</b></label>
    <input class="form-control" type="text" placeholder="Eg : Full Address" name="gaddress" value='<?php echo $row['ug_address']; ?>' required><br>

    <label for="gstate"><b>State</b></label>
    <select name="gstate" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultGstate->fetch_assoc())
      {
        $state_name=$rows['rs_statename'];
        $state_id=$rows['rs_id'];
         $sel = '';

        if($row['rs_id'] == $state_id ){

             $sel = 'selected';
        }
        echo "<option value=$state_id ".$sel.">$state_name</option>";
      }
      ?>
    </select>

    <?php 

}}}

?>
        
    <button type="submit" name="submit">Submit</button><br>
    <label>
      <span class="psw">By submit this form, you agree with the <a href="Termuser.php" style="text-decoration: none">term & condition</a></span>
    </label>
  </div>
</form>
</div>
     

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>
