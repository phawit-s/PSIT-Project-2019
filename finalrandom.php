<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="example-rand-function - php mysql examples | w3resource">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
  <body>
      <div class="container">
        <div class="row">
           <div class="col-md">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php if(isset($_SESSION['Name'])) { ?>
                <a href="logout.php">Logout</a>
                <a href="profile.php">Welcome <?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></a>
                <a href="contact page.php">Contact Us</a>
                <a href="index.php">Home</a>
            <?php }else { ?>
                <a href="login.html">Login</a>
                <a href="register.html">Register</a>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2>Random<h2>
                  <tr><td colspan="2"><input type="submit" class="button2" name="save" value="Random"/></td></tr>
                  <table class='table table-bordered'>
                  <tr><th>Username</th><th>Name</th></tr>
      </form>
   <?php
    if(isset($_POST['save'])) {

        $hostname="localhost";
    $username="id11387127_projectpsit2019"; 
    $password="Imnayeon1995";
    $db = "id11387127_psit";
    $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    foreach($dbh->query('SELECT * FROM register ORDER BY RAND() limit 1') as $row) {
      if($row != $_SESSION['userwname']){
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['userwname'] . "</td>";
            echo "</tr>"; ?>
               <table><br>
            <tr>
                <td>
                  <b>Name: </b>
                  </td>
              <td>
                <?php echo $row['Name']; ?>
                  </td>
                  </tr>
                    <tr>
                <td>
                  <b>Student ID: </b>
                  </td>
              <td>
                <?php echo $row['userid']; ?>
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
                   <td><a href="profile<?php echo $row['userid'];?>.php" class="btn btn-secondary" button type="button">View</td>
                 </tr>      
         </table>
       <?php   }   
        } 
      }
        ?>
 

        </div>
      </div>
    </div>
  </body>
  </html>
