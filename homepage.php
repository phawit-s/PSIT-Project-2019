<?php session_start();
    if(isset($_SESSION['id'])){
        header("location: login.html");
    }
    else
    {
?>
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
        <?=$_SESSION['id'];?>!<a href="logout.php">Logout</a>
          <li><a href="">example</a></li>
          <li><a href="#">WELCOME</a></li>
          <li><a href="contact page.html">Contact Us</a></li>
        
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
<?php
}
?>