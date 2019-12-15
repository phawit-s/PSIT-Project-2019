<?php session_start(); ?>
<?php
$con=mysqli_connect('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM register ";
$result=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    *{
        margin: 0;
        padding: 0;
    }

    body{
        background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("https://www.coworker.com/mag/wp-content/uploads/2017/10/NEST-@-TRYP-hotel-1280x640.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container{
        background-color: whitesmoke;
    }

    ul h5{
        color: rgb(168, 142, 69);
    }

    ul h5:hover{
        color: sandybrown;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['Name'])) { ?>
                <li class="nav-item"><a class="nav-link" href="logout.php"><h5>Logout</h5></a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php"><h5>Welcome</h5> <?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="contact page.php"><h5>Contact Us</h5></a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"><h5>Home</h5></a></li>
            <?php }else { ?>
                <li class="nav-item"><a class="nav-link" href="login.html"><h5>Login</h5></a></li>
                <li class="nav-item"><a class="nav-link" href="register.html"><h5>Register</h5></a></li>
            <?php } ?>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-md">
                  <!-- table information -->
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Student id</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>E-mail</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        ?>
                        <tr>
                            <td><?php echo $row['userid']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Surname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['userwname']; ?></td>
                            <td><a href="profile<?php echo $row['userid'];?>.php" class="btn btn-secondary" button type="button">View</td>
                        </tr>
                            <?php } ?>
                        <?php
                            mysqli_free_result($result);
                            mysqli_close($con);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
