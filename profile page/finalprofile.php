<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="CSS/style_for_h.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body class="background">
  <!--Navigation bar section-->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="index.php">TU ME PLEASE!!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="contact page.php">Contact Us</a>
        </li>
        <?php if(isset($_SESSION['Name'])) { ?>
          <li class="nav-item active">
            <a class="nav-link" href="profile.php">Welcome <?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php }else { ?>
          <li class="nav-item active">
            <a class="nav-link" href="login.html">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.html">Register</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
  <!--Profile display section-->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="header">My Profile</h1>
        <hr class="line">
          <center><img class="userimage" <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['picture']).'"'; ?> ></center>
        <hr class="line">
      </div>
      <div class="col-md-4">
        <h2 class="second-header">My Information</h2>
        <hr class="line">
        <?php if(isset($_SESSION['Name'])) { ?>
        <table>
          <tr>
            <td><h4>Name:</h4>
            <p>Thanaphat Suyapong</p>
            </td>
          </tr>
          <tr>
            <td><h4>Student ID:</h4>
            <p><?php echo $_SESSION['userid']; ?></p>
            </td>
          </tr>
          <tr>
            <td><h4>Subject:</h4>
            <p><?php echo $_SESSION['subject']; ?></p>
            </td>
          </tr>
          <tr>
            <td><h4>Email:</h4>
            <p><?php echo $_SESSION['email']; ?></p>
            </td>
          </tr>
          <tr>
            <td><h4>Gender:</h4>
            <p><?php echo $_SESSION['gender']; ?></p>
            </td>
          </tr>
        </table>
      </div>
        <?php }else { ?>
      <?php } ?>
    </div>
  </div>
</body>
</html>
