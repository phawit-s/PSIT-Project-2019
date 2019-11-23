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
        <div class="row">
            <div class="col-md">
                <table class="table">
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
                        <td><a href="profile<?php echo $row['userid'];?>.php" class="btn btn-success" button type="button">View</td>
                    
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
    
</body>
</html>