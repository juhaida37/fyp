<?php
$id =$user['admin_id'];

    require("PHPMailer/src/PHPMailer.php");
    require("PHPMailer/src/SMTP.php");
    require("PHPMailer/src/Exception.php");


    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 0;  //tukar 1 kalau nak tengok problem sending email
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "salafussoleh03@gmail.com";
    $mail->Password = "hoskelantan"; //masuk password betul


$genpass = password_generate(7);
$query = mysqli_query($conn,"UPDATE admin_login SET ad_password='".$genpass."' WHERE admin_id=".$user['admin_id'].'');
        
If ($query)
{
   //Set Params
    $mail->SetFrom("salafussoleh03@gmail.com");
    $mail->AddAddress($user['ad_email']);
    $mail->Subject = "Forgot Your Password?";
    $mail->Body = "<h4>Dear user,</h4>
    <p>
    You have successfully reset your password. 
    <br> 
    Your temporary password is <b>". $genpass. "</b>.
    
    <br>

    To change your password, please click  <a href='../admin/homepage.php'>here</a>

    <br><br>

    Thank you. Have a nice day!
    </p>"; 



     if(!$mail->Send()) {
        $error_message = 'Problem in Sending Password Recovery Email';
     } else {
        $success_message = 'Please check your email to reset password';
     }

}
else
{
  $error_message = 'Failed to reset password';
}

	


function password_generate($chars) 
{
  	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  	return substr(str_shuffle($data), 0, $chars);
}


?>