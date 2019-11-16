<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
        <ul>
        <?php if(isset($_SESSION['Name'])) { ?>
          <li><a href="logout.php">logout</a></li>
          <li><a href="#">WELCOME <?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></a></li>
          <li><a href="contact page.php">Contact Us</a></li>
        <?php }else { ?>
                <li><a href="login.html">login</a></li>
                <li><a href="register.html">register</a></li>
        <?php } ?>
        </ul>
    </div>
    <?php if(isset($_SESSION['Name'])) { ?>
    <ul>
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['picture']).'"/>'; ?>
        <li><?php echo $_SESSION['userwname']; ?></li>
        <li><?php echo $_SESSION['Name']; ?></li>
        <li><?php echo $_SESSION['Surname']; ?></li>
        <li><?php echo $_SESSION['email']; ?></li>
        <li><?php echo $_SESSION['gender']; ?></li>
        <a href="edit.php">edit</a>

    <?php }else { ?>
    <?php } ?>
    </ul>
        
    </div>
    <?php mysqli_close($con); ?>
</body>
</html>
