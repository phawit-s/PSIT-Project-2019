<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/style_for_homepage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style_for_contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="top">
      "WELCOME TO TU ME PLEASE!"
      <br><br><p style="font-size: medium; font-weight: bold;">Please scroll down for more information</p>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">TU ME PLEASE!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More in website
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item" href="#">Rule for use this site</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Login</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <div class="textbox1">
        <p>"WHAT IS TU ME PLEASE ?"</p>
        <p>example text</p>
        <img src="https://www.todaysparent.com/wp-content/uploads/2017/06/when-your-kid-becomes-a-meme-1024x576-1497986561.jpg" width="330" height="300" style="border-radius: 5px">
    </div>
    <div>
        <div class="textbox2">
          <?php if(isset($_SESSION['Name'])) { ?>
            <b id="txt3">
            <p id="already">
            Already Have A Tutor ???
            </p>
            <p id="already2">!!!Please click this !!!</p><br><br>
            <p><a href="random.php" id="login_in_home">Go To Chat Page Nowww</a></p>
          </b>
          <?php }else { ?>
              <b id="txt2">
            <p id="txt2_h">Need a Tutor ???<br><b style="font-size: 20px; margin-bottom: 10px;">"you need to go to register first!!"</b></p>
            <p id="txt_3"><a href="login.html" style="text-decoration: none; color: white ;text-align: center; padding-left: 60px;">Plese Login!!!!</a></p>
          </b>
            
          <?php } ?>
        </div>
    </div>
</body>
</html>
        
