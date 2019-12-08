<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="CSS/style_for_h.css">
  
</head>
<body>
  <br>
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
    <div class="row">
    <div class="content-profile-page">
    <div class="profile-user-page card">
        <div class="img-user-profile">
            <img class="profile-bgHome" <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['picture']).'"style="width:50%;'; ?> />
        </div>
        <div class="user-profile-data">
        <?php if(isset($_SESSION['Name'])) { ?>
            <h1><?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></h1>
          </div>
            <table>
              <tr>
                <td>Student ID:
                <?php echo $_SESSION['userid']; ?>
                </td>
              </tr>
              <tr>
                <td>Subject:
                <?php echo $_SESSION['subject']; ?>
                </td>
              </tr>
              <tr>
                <td>Email:
                <?php echo $_SESSION['email']; ?>
                </td>
              </tr>
              <tr>
                <td>Gender:
                <?php echo $_SESSION['gender']; ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
          </div>
      </div>
      <?php }else { ?>
    <?php } ?>
      </div>
    </div>

</body>
</html>
