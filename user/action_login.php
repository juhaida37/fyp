<?php
include "config.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['matric']);
    $password = mysqli_real_escape_string($conn,$_POST['psw']);
    
    if ($uname != "" && $password != ""){

        $sql_query = "SELECT COUNT(*) as cntUser from user_login where user_matric='".$uname."' and user_psw='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){


            $uid = getID($uname,$password,$conn);
            $session = getSession($session,$conn);
            $check = checkProf($uid,$conn);

            $_SESSION['matric'] = $uname;
            $_SESSION['iduser'] =  $uid;
            $_SESSION['activesess'] = $session;
            // var_dump($check); die;

            if($check>0)    
            {
                header('Location: studentdetail.php');
            }
            else
            {
                header('Location: details.php');
            }
            

        }else{
            echo"<script> alert('Invalid username and password'); location = 'homepage.php'; </script>";
        }

    }

}



function getID($uname,$password,$conn)
{

     $sql_query = "SELECT user_id from user_login where user_matric='".$uname."' and user_psw='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
// var_dump($row[0] );die;

        $userid=$row[0];
        // var_dump($userid);die;
        return $userid;



}

function checkProf($id,$conn)
{

     $sql_query = "SELECT COUNT(*) as cntUserprof from user_profile where up_user_id='".$id."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
    //var_dump("SELECT COUNT(*) as cntUserprof user_profile where up_user_id=");die;

        $count = $row['cntUserprof'];
        // var_dump($count);die;
        return $count;



}

function getSession($session,$conn)
{

     $sql_query = "SELECT rs_id FROM ref_semester WHERE rs_activesess=1";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
// var_dump($row[0] );die;

        $session=$row[0];
        // var_dump($userid);die;
        return $session;



}

?>

