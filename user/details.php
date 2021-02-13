<?php

include "config.php";


$resultGender=$conn->query("SELECT rg_id, rg_gender FROM ref_gender ORDER BY rg_gender");
$resultOKU=$conn->query("SELECT rs_id, rs_statusname FROM ref_statusoku ORDER BY rs_statusname");
$resultState=$conn->query("SELECT rs_id, rs_statename FROM ref_state ORDER BY rs_statename");
$resultFaculty=$conn->query("SELECT rf_id, rf_faculty FROM ref_faculty ORDER BY rf_faculty");
$resultNation=$conn->query("SELECT rn_id, rn_nation_name FROM ref_nation ORDER BY  rn_nation_name");
$resultReligion=$conn->query("SELECT rr_id, rr_religion_name FROM ref_religion ORDER BY rr_religion_name");
$resultStatus=$conn->query("SELECT rs_id, rs_status FROM ref_status ORDER BY rs_status");
$resultFinalYearOfStudy=$conn->query("SELECT rf_id, rf_final_year_of_study FROM ref_fyos ORDER BY rf_final_year_of_study");
$resultIncome=$conn->query("SELECT ri_id,ri_income FROM ref_income ORDER BY ri_income");
$resultGstate=$conn->query("SELECT rs_id, rs_statename FROM ref_state ORDER BY  rs_statename");

include_once 'headerReq.html';
?>


<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">FILL IN YOUR DETAILS</h3>
  <img src="avatar.png" class="avatar" style="display:inline">
  <form action="action_details.php" method="POST">
  
  <div class="container">
 <?php 
 // var_dump($_SESSION);

 ?>
    <label for="name"><b>Name</b></label>
    <input class="form-control" type="text" placeholder="Full name" name="name" required><br>


    <label for="gender"><b>Gender</b></label>
    <select name ="gender" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultGender->fetch_assoc())
      {
        $gender_name=$rows['rg_gender'];
        $gender_id=$rows['rg_id'];
        echo "<option value=$gender_id>$gender_name</option>";
      }
      ?>
    </select>


    <label for="oku"><b>Are you disable student?</b></label>
    <select name ="oku" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultOKU->fetch_assoc())
      {
        $oku_name=$rows['rs_statusname'];
        $oku_id=$rows['rs_id'];
        echo "<option value=$oku_id>$oku_name</option>";
      }
      ?>
    </select>


    <label for="phone"><b>Phone Number</b></label>
    <input class="form-control" class="form-control" type="number" placeholder="Eg : 0123456789" name="phone" required><br>


    <label for="ic"><b>NRIC</b></label>
    <input class="form-control" type="number" placeholder="Eg : 901122011234" name="ic" required><br>


    <label for="email"><b>Email</b></label>
    <input class="form-control" type="text" placeholder="Eg : abc@gmail.com" name="email" required><br>


    <label for="address"><b>Address</b></label>
    <input class="form-control" type="text" placeholder="Eg : Full Address" name="address" required><br>


    <label for="state"><b>State</b></label>
    <select name="state" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultState->fetch_assoc())
      {
        $state_name=$rows['rs_statename'];
        $state_id=$rows['rs_id'];
        echo "<option value=$state_id>$state_name</option>";
      }
      ?>
    </select>


    <label for="dob"><b>Date of Birth</b></label>
    <input class="form-control" type="text" placeholder="Eg : 1 January 1999" name="dob" required><br>


    <label for="faculty"><b>Faculty</b></label>
    <select name="faculty" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultFaculty->fetch_assoc())
      {
        $faculty_name=$rows['rf_faculty'];
        $faculty_id=$rows['rf_id'];
        echo "<option value='$faculty_id'>$faculty_name</option>";
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
        echo "<option value=$nation_id>$nation_name</option>";
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
        echo "<option value=$religion_id>$religion_name</option>";
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
        echo "<option value=$status_id>$status_name</option>";
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
        echo "<option value=$fyos_id>$fyos_name</option>";
      }
      ?>
    </select>

   <label for="nog"><b>Name of father/Guardian</b></label>
    <input class="form-control" type="text" placeholder="Full name" name="nog" required><br>


    <label for="income"><b>Total Parent/Guardian Income</b></label>
    <select name="income" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultIncome->fetch_assoc())
      {
        $income_name=$rows['ri_income'];
        $income_id=$rows['ri_id'];
        echo "<option value=$income_id>$income_name</option>";
      }
      ?>
    </select>


    <label for="gphone"><b>Phone Number of Parent/Guardian</b></label>
    <input class="form-control" type="number" placeholder="Eg : 0123456789" name="gphone" required><br>


    <label for="gaddress"><b>Parent/Guardian Address</b></label>
    <input class="form-control" type="text" placeholder="Eg : Full Address" name="gaddress" required><br>

    <label for="gstate"><b>State</b></label>
    <select name="gstate" class="form-control">
      <option>--- PLEASE SELECT ---</option>
      <?php
      while($rows=$resultGstate->fetch_assoc())
      {
        $state_name=$rows['rs_statename'];
        $state_id=$rows['rs_id'];
        echo "<option value=$state_id>$state_name</option>";
      }
      ?>
    </select>
     

    <button value="submit" name="submit" id="submit">SUBMIT</button><br>
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
