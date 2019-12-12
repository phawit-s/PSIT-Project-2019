<?php session_start(); ?>
<?php
$con=mysqli_connect('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM history where userid='".$_SESSION['userid']."' ";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>

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
        <div class="card">
          <div class="card-header text-white" style="background-color: lightgreen;">
            <h4 class="card-title" style="color: white;">Your Profile</h4>
        </div>
        
          <div class="card-body">
               <?php
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
            <table><br>
            <tr>
                            <td><?php echo $row['userid']; ?></td>
                            <td><?php echo $row['Nameran']; ?></td>
                            <td><?php echo $row['Surname']; ?></td>
                    <td><a href="profile<?php echo $row['userid'];?>.php" class="btn btn-secondary" button type="button">View</td>
                </tr>
                </table>
          </div>
        </div>
    </div>
  <?php } ?>
 
  </div>
  <?php mysqli_close($con); ?>

</body>

</html>
