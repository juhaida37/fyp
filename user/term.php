<?php
include('action_login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: studentdetail.php"); // Redirecting To Profile Page
}
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
    html {
  scroll-behavior: smooth;
}
  body {
    font: 15px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #e8b923; /* Orange */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background: url(gerbang.jpg); /* Image Background */
    background-size: 1300px;
    color: black;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 30px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }

input[type=text], input[type=password] {
  width: 30%;
  padding: 2px 10px;
  margin: 4px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color: black;
}

button {
  background-color: #E15E3E;
  color: white;
  padding: 2px 10px;
  margin: 4px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

/*edit size gambar*/
img.avatar {
  width: 9%;
  height: 9%;
  border-radius: 10%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 5px;
}

/* Change styles for dropdown */
.dropdown {
  padding: 2px 10px;
  color: black;
  margin: 4px 0;
  border: none;
  cursor: pointer;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.paragraph{
    padding: 35px;
    text-align: left;
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
        <li><a href="facility.php">FACILITY</a></li>
        <li><a href="signup.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id="login" class="container-fluid bg-1 text-center">
<h3 class="margin">TERM & CONDITION</h3>

<div class="paragraph">
<p>Saya dengan sesungguhnya dan sejujurnya berjanji bahawa saya akan mematuhi peraturan-peraturan Kolej Kediaman Ketujuh (Za'ba) serta apa-apa peraturan dan arahan lain yang dikeluarkan dan dikuatkuasakan oleh Pengetua, Penyelia dan Pihak Pengurusan Kolej dari masa ke semasa sepanjang saya menghuni di Kolej Kediaman Ketujuh (Za'ba). Maka dengan ini saya berjanji;</p><br>

<p>1. Tidak akan melakukan sebarang aktiviti yang bercanggah dengan undang-udang negara, peraturan Universiti Malaya dan peraturan Kolej Kediaman semasa menghuni di Kolej Kediaman Ketujuh (Za'ba).</p>

<p>2. Tidak akan terlibat secara langsung atau tidak langsung dalam aktiviti ppolitik dan hal-hal yang berkaitan dengannya semasa menghuni di Kolej Kediaman Ketujuh (Za'ba).</p>

<p>3. Tidak akan merosakkan sebarang harta benda Kolej Kediaman Ketujuh (Za'ba) dan akan menjaga segala harta benda Kolej Kediaman Ketujuh (Za'ba).</p>

<p>4. Tidak akan berkelakuan dengan acara yang boleh memburukkan atau mencemarkan nama Kolej Kediaman Ketujuh (Za'ba).</p>

<p>5. Tidak akan berkelakuan dengan cara boleh ditafsirkan sebagai ingkar perintah dan arahan yang dikeluarkan oleh Pengetua dan Pengurusan Kolej.</p>

<p>6. Tidak menganjurkan sebarang aktiviti atau program atau perjumpaan tanpa mendapatkan kebenaran Pengetua atau Pengurusan Kolej Kediaman Ketujuh (Za'ba).</p>

<p>7. Tidak akan terlibat dalam sebarang program atau perjumpaan yang boleh menjejaskan keharmonian kaum di Kolej Kediaman Ketujuh (Za'ba).</p>

<p>8. Tidak akan terlibat secara langsung atau tidak langsung dalam pembikinan atau pengedaran surat-surat layang atau fitnah ke atas mana-mana orang/pihak di dalam Kolej Kediaman Ketujuh (Za'ba).</p>

<p>9. Akan menggantikan sebarang peralatan kolej yang dipinjamkan/dipertanggungjawabkan kepada saya sekiranya rosak/hilang.</p>

<p>10. Akan taat dan akur kepada semua ketetapan serta arahan Pengetua dan Pengurusan Kolej dari masa ke semasa.</p><br>  
 
<p>Saya sesungguhnya faham bahawa jika saya disabitkan kerana melanggar Aku Janji ini, saya boleh dikenakan tindakan seperti yang ditetapkan oleh Bahagian Hal Ehwal Pelajar Universiti Malaya dan Pihak Pengurusan Kolej Kediaman Ketujuh (Za'ba).</p>  
</div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>


