<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="example-rand-function - php mysql examples | w3resource">
  <link rel="stylesheet" href="CSS/style_for_random.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
	<!--NavBar Section-->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top"><!--logo and position-->
  <a class="navbar-brand" href="index.php">TU ME PLEASE!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
<!-------------------------------------if you are already login---------------------------------------------------------------------------->
  <?php if(isset($_SESSION['Name'])) { ?>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact page V.2.html">Contact us<span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item active">
         <a class="nav-link" href="News.html">Updates History<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown"><!--drop down-->
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More in website
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item" href="profile.php">My Profile</a>
          <a class="dropdown-item" href="random.php">Random page</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
  <!-------------------------------------if you aren't already login yet---------------------------------------------------------------------------->
  <?php }else { ?>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact page V.2.html">Contact us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="register.html">Register<span class="sr-only">(current)</span></a>
      </li>
      </li>
    </ul>
  </div>
          <?php } ?>
</nav>
      <!--Result from random-->
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="container result">
          <div class="row">
            <div class="col-md-12">
                <h2 class="header">Find Tutors<h2>
                <hr class="line">
                <center><tr><td colspan="2"><input type="submit" class="btn btn-outline-dark btn-lg button2" name="save" value="Meet your tutor"/></td></tr></center><br>
                <table class='table table-bordered table-dark'>
                <tr>
                  <th>Username</th><th>Name</th>
                </tr>
      </form>
    <!------------connect with database if press the button--------------->
   <?php
    if(isset($_POST['save'])) {
    $hostname="localhost";
    $username="id11387127_projectpsit2019"; 
    $password="***********";
    $db = "id11387127_psit";
    $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    // random with php 
    foreach($dbh->query('SELECT * FROM register ORDER BY RAND() limit 1') as $row) {
      if($row != $_SESSION['userwname']){
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['userwname'] . "</td>";
            echo "</tr>"; ?>
            <!------------------show data and sent to databse to show history how many people you had random----------------------->
          <form action="testsave.php" method="POST" enctype="multipart/form-data">
          <table><br>
            <hr class="line">
            <tr>
                <td>
                  <b>Name: </b>
                  </td>
              <td>
                <input type="text" name="Name" value="<?php echo $row['Name'];?>">
                  </td>
                  </tr>
                  <tr>
                <td>
                  <b>Surname: </b>
                  </td>
              <td>
                <input type="text" name="Surname" value="<?php echo $row['Surname'];?>">
                  </td>
                  </tr>
                    <tr>
                <td>
                  <b>Student ID: </b>
                  </td>
              <td>
                <input type="text" name="userid" value="<?php echo $row['userid'];?>">
                  </td>
                  </tr>
                <tr>
                  <td>
                    <b>Email: </b>
                  </td>
                  <td>
                  <?php echo $row['email']; ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>Gender: </b>
                  </td>
                  <td>
                    <?php echo $row['gender']; ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>Subject: </b>
                  </td>
                  <td>
                    <?php echo $row['subject']; ?>
                  </td>
                   <td><input type="submit" class="btn btn-secondary" button type="button" name="save">View</td>
                 </tr>
         </table>
         </form>
       <?php   }
        } 
      }
        ?>
      <hr class="line">
</body>
</html>
