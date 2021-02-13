<?php
include ("config.php"); 
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        
 $matric = $_POST['matric'];
 $email = $_POST['email'];
 $password = $_POST['psw'];
 $repassword = $_POST['repsw'];

    $sql_u = "SELECT * FROM user_login WHERE user_matric='$matric'";
    $res_u = mysqli_query($conn, $sql_u);

    $sql = mysqli_query($conn,"SELECT * FROM admin_addstudent WHERE aas_matric='$matric'");
    $resultArr= mysqli_fetch_array($sql);
    $mtrc = $resultArr['aas_matric'];


    if($mtrc==$matric){



    if (mysqli_num_rows($res_u) > 0) {
      echo "<script> alert('Matric number already registered'); location = 'signup.php'; </script>";  
    }
    else if($password != $repassword){
      echo "<script> alert('Password did not match'); location = 'signup.php'; </script>"; 
    }
    else{
        $query = "INSERT into user_login (user_matric, user_email, user_psw, user_repsw) VALUES ('$matric', '$email', '$password', '$repassword')";
        $result = mysqli_query($conn,$query);
        echo "<script> alert('You already sign up. Please login to the system.'); location = 'homepage.php'; </script>";
    }




} else {
    echo "<script> alert('You are not allowed to sign up into this system.'); location = 'signup.php'; </script>";
}
}
?>