<?php
include ("config.php"); 
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        
 $username = $_POST['uname'];
 $email = $_POST['email'];
 $password = $_POST['psw'];
 $repassword = $_POST['repsw'];

    $sql_u = "SELECT * FROM admin_login WHERE ad_username='$username'";
    $res_u = mysqli_query($conn, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
      echo "<script> alert('Username already registered'); location = 'signup.php'; </script>";  
    }
    else if($password != $repassword){
      echo "<script> alert('Password did not match'); location = 'signup.php'; </script>"; 
    }
    else{
        $query = "INSERT into admin_login (ad_username, ad_email, ad_password, ad_repassword) VALUES ('$username', '$email', '$password', '$repassword')";
        
        $result = mysqli_query($conn,$query);
        echo "<script> alert('Successful registration. Please login to the system.'); location = 'homepage.php'; </script>";
    }
}
?>