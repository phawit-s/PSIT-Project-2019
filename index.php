<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/style_for_homepage.css">
</head>
<body>
    <div class="top">
      "WELCOME TO TU ME PLEASE!"
      <br><br><p style="font-size: medium; font-weight: bold;">Please scroll down for more information</p>
    </div>
    <div class="menubar">
        <ul>
        <?php if(isset($_SESSION['Name'])) { ?>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="profile.php">Welcome <?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></a></li>
          <li><a href="contact page.php">Contact Us</a></li>
          <li><a href="allprofile.php">Member</a></li>
          <li><a href="index.php">Home</a></li>
          
        <?php }else { ?>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
        <?php } ?>
        </ul>
    </div>
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
        
