<?php
include "config.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['psw']);
    
    if ($uname != "" && $password != ""){

        $sql_query = "SELECT COUNT(*) as cntUser from admin_login where ad_username='".$uname."' and ad_password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
           

            $uid = getID($uname,$password,$conn);
            $check = checkProf($uid,$conn);

            $_SESSION['username'] = $uname;
            $_SESSION['iduser'] =  $uid;

            // var_dump($check); die;

            if($check>0)    
            {
                header('Location: student.php');
            }
            else
            {
                header('Location: admindetails.php');
            }
            

        }else{
            echo"<script> alert('Invalid username and password'); location = 'homepage.php'; </script>";
        }

    }

}



function getID($uname,$password,$conn)
{

     $sql_query = "SELECT admin_id from admin_login where ad_username='".$uname."' and ad_password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
// var_dump($row[0] );die;

        $userid=$row[0];
        // var_dump($userid);die;
        return $userid;



}

function checkProf($id,$conn)
{

     $sql_query = "SELECT COUNT(*) as cntUserprof from admin_profile where ap_admin_id='".$id."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
    //var_dump("SELECT COUNT(*) as cntUserprof user_profile where up_user_id=");die;

        $count = $row['cntUserprof'];
        // var_dump($count);die;
        return $count;



}
?>

