<?php


$host = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'information';
if(isset($_POST['save'])) {
    $ID = $_POST['cust_id'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $email = $_POST['email'];
    $userid = $_POST['userid'];
    $pass = $_POST['pass'];
    $conn = mysqli_connect($host,$username,$password,$databasename) or die(mysql_error());
    $sql = "Insert into list (cust_id, Name, Surname, email, userid, pass) VALUES ('$ID', '$Name', '$Surname', '$email', '$userid', '$pass')";
    mysqli_query($conn,$sql);

}
