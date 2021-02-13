<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Residential College Registration System</title>
  <link rel = "icon" href = "logozaba.png" type = "image/x-icon"> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>

input[type=text], [type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-transform: uppercase;
  color:black;
}

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navbar-brand">
                <h1 style="margin-top:-40%;"><span class="largenav"><img src="logozaba.png" height="60" alt="logo"></span></h1>
      </div>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homepage.php">LOGIN</a></li>
        <li><a href="signup.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<?php


	if(!empty($_POST["forgot-password"])){
				
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " user_matric = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " user_email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "SELECT * FROM user_login " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			echo 'No User Found';
		}
	}
?>

<script>
function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
		return false;
	}
	return true
}
</script>


<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">FORGOT PASSWORD?</h3>
  <form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
  
  <div class="container">

	<?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>

<div class="col-md-offset-2 col-md-8">	
		<div><label for="username">Matric Number</label></div>
		<div><input class="form-control" type="text" name="user-login-name" id="user-login-name" class="input-field" style='width: 100%'></div>
	
	
	
		<div><label for="email">Email</label></div>
		<div><input class="form-control" type="text" name="user-email" id="user-email" class="input-field" style='width: 100%'></div>
	
	<br>
	<button type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button" style='width: 100%'>SUBMIT</button>
	<br><br>
</div>

</div>
</form>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>