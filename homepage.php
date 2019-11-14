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
          <li><a href="logout.php">logout</a></li>
          <li><a href="#">WELCOME <?php echo $_SESSION['Name']; echo $_SESSION['Surname'];?></a></li>
          <li><a href="contact page.html">Contact Us</a></li>
        <?php }else { ?>
                <li><a href="login.html">login</a></li>
                <li><a href="register.html">register</a></li>
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
          <b id="txt2">
            
          </b>
          <b id="txt3">
            <p id="already">
            Already Have An Account ???
            </p>
            <p id="already2">!!!Please Login !!!</p><br><br>
            <p><a href="login.html" id="login_in_home">Go To Login Page Nowww</a></p>
          </b>
        </div>
    </div>
</body>
</html>
