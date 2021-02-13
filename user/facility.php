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
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 2px 10px;
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
<div class="container-fluid bg-1 text-center">    
  <h3 class="margin">FACILITY PROVIDED</h3><br>
<div class="album py-5 bg-light">  
  <div class="row">
             <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\a.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Gazebo</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\b.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Court futsal</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\c.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Laluan braille OKU</p>
                </div>
              </div>
            </div>



            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\d.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Pintu gerbang</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\e.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Court tennis</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\f.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Cafe</p>
                </div>
              </div>
            </div>



            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\g.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Court basketball</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\h.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Lobi</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\i.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Arena intelektual</p>
                </div>
              </div>
            </div>



            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\j.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Surau</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\k.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Laluan ke surau</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\l.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Dewan Nukleus</p>
                </div>
              </div>
            </div>



            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\y.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Lif</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\z.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Laluan pelajar OKU (P)</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="image\r.JPG" alt="Card image cap" style="width:100%">
                <div class="card-body">
                  <p class="card-text">Laluan pelajar OKU (L)</p>
                </div>
              </div>
            </div>
</div>
</div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Website Made By <a style="text-decoration: yellow">Juhaida</a></p> 
</footer>

</body>
</html>